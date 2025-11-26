<?php

namespace App\Services;

class NotificationService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    //
    public function send($message, $recipient)
    {
        // Logic to send notification
        return "Notification message: $message to recipient: $recipient";
    }
}
