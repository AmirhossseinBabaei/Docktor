<?php

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Auth;

// Channel for private chat between two users
Broadcast::channel('private-chat.{userId1}.{userId2}', function ($user, $userId1, $userId2) {
    // If user is not authenticated, try to get from session
    if (!$user) {
        $user = Auth::user();
    }
    
    // Allow access if the user is one of the two users in the chat
    if ($user) {
        return (int) $user->id === (int) $userId1 || (int) $user->id === (int) $userId2;
    }
    
    return false;
});
