<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Message;

class MessageSeeder extends Seeder
{
    /**
     * Seed demo chat messages between staff.
     */
    public function run(): void
    {
        $admin = User::where('role', 'admin')->first();
        $doctor = User::where('role', 'doctor')->first();
        $reception = User::where('role', 'reception')->first();

        if (! $admin || ! $doctor || ! $reception) {
            $this->command?->warn('MessageSeeder skipped: required users not found.');
            return;
        }

        $messages = [
            [
                'sender_id' => $reception->id,
                'receiver_id' => $doctor->id,
                'message' => 'دکتر، بیمار اورژانسی ساعت ۱۲:۳۰ نیاز به معاینه فوری دارد.',
                'read' => false,
            ],
            [
                'sender_id' => $doctor->id,
                'receiver_id' => $reception->id,
                'message' => 'پرونده و علائم حیاتی را قبل از ورود ارسال کنید.',
                'read' => false,
            ],
            [
                'sender_id' => $admin->id,
                'receiver_id' => $doctor->id,
                'message' => 'گزارش هفتگی بیماران را تا پایان امروز بفرستید.',
                'read' => true,
            ],
            [
                'sender_id' => $doctor->id,
                'receiver_id' => $admin->id,
                'message' => 'گزارش تهیه شده و در CRM آپلود شد.',
                'read' => true,
            ],
            [
                'sender_id' => $admin->id,
                'receiver_id' => $reception->id,
                'message' => 'یادآوری: تایید بیمه سه پرونده معوقه را پیگیری کنید.',
                'read' => false,
            ],
        ];

        foreach ($messages as $data) {
            Message::create($data);
        }

        // پیام‌های فیک بیشتر برای همه کاربران
        $userCount = User::count();
        if ($userCount >= 2) {
            Message::factory()->count(80)->create();
        }
    }
}

