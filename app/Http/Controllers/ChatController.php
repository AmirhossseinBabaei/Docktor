<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    /**
     * Display the chat page.
     */
    public function index()
    {
        // Get current user or create a default one
        $currentUser = Auth::user();
        
        if (!$currentUser) {
            // Create or get guest user
            $currentUser = User::firstOrCreate(
                ['email' => 'guest@example.com'],
                ['name' => 'کاربر مهمان', 'password' => bcrypt('password')]
            );
            
            // Login the user for session
            Auth::login($currentUser);
        }
        
        // Get all users except current user
        $users = User::where('id', '!=', $currentUser->id)->get();
        
        return view('chat', compact('users', 'currentUser'));
    }

    /**
     * Send a new message.
     */
    public function send(Request $request)
    {
        try {
            $request->validate([
                'message' => 'required|string|max:1000',
                'receiver_id' => 'required|exists:users,id',
            ]);

            $sender = Auth::user();
            
            if (!$sender) {
                return response()->json(['error' => 'کاربر یافت نشد. لطفا دوباره وارد شوید.'], 401);
            }

            // بررسی اینکه کاربر نمی‌تواند به خودش پیام بفرستد
            if ($sender->id == $request->receiver_id) {
                return response()->json(['error' => 'نمی‌توانید به خودتان پیام بفرستید.'], 422);
            }

            $message = Message::create([
                'sender_id' => $sender->id,
                'receiver_id' => $request->receiver_id,
                'message' => $request->message,
            ]);

            // Broadcast the new message
            try {
                broadcast(new NewMessage($message))->toOthers();
            } catch (\Exception $e) {
                // اگر broadcast با خطا مواجه شد، پیام را ذخیره می‌کنیم اما خطا را لاگ می‌کنیم
                \Log::error('Broadcast error: ' . $e->getMessage());
            }

            return response()->json([
                'status' => 'success',
                'message' => $message->load(['sender', 'receiver']),
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'error' => 'اطلاعات وارد شده معتبر نیست.',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            \Log::error('Send message error: ' . $e->getMessage());
            \Log::error('Stack trace: ' . $e->getTraceAsString());
            return response()->json([
                'error' => 'خطا در ارسال پیام. لطفا دوباره تلاش کنید.',
                'message' => config('app.debug') ? $e->getMessage() : 'خطای سرور'
            ], 500);
        }
    }

    /**
     * Get messages between two users.
     */
    public function messages(Request $request)
    {
        $request->validate([
            'other_user_id' => 'required|exists:users,id',
        ]);

        $currentUser = Auth::user() ?? User::first();
        
        if (!$currentUser) {
            return response()->json(['error' => 'کاربر یافت نشد'], 404);
        }

        $otherUserId = $request->other_user_id;

        $messages = Message::where(function ($query) use ($currentUser, $otherUserId) {
            $query->where('sender_id', $currentUser->id)
                  ->where('receiver_id', $otherUserId);
        })->orWhere(function ($query) use ($currentUser, $otherUserId) {
            $query->where('sender_id', $otherUserId)
                  ->where('receiver_id', $currentUser->id);
        })
        ->with(['sender', 'receiver'])
        ->orderBy('created_at', 'asc')
        ->get();

        // Mark messages as read
        Message::where('sender_id', $otherUserId)
            ->where('receiver_id', $currentUser->id)
            ->where('read', false)
            ->update(['read' => true]);

        return response()->json($messages);
    }

    /**
     * Get all users for chat list.
     */
    public function users()
    {
        $currentUser = Auth::user() ?? User::first();
        
        if (!$currentUser) {
            return response()->json(['error' => 'کاربر یافت نشد'], 404);
        }

        $users = User::where('id', '!=', $currentUser->id)->get();
        
        // Add unread count manually
        foreach ($users as $user) {
            $user->unread_count = Message::where('sender_id', $user->id)
                ->where('receiver_id', $currentUser->id)
                ->where('read', false)
                ->count();
        }

        return response()->json($users);
    }
}
