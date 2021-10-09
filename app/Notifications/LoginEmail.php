<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailBase;

class LoginEmail extends VerifyEmailBase
{
    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable);
        }

        return (new MailMessage)
            ->subject('Tracking login')
            ->line('You did login on other location')
            ->line('Login at: ' . now()->format('d-m-Y H:i:s'))
            ->line('Line content 1')
            ->line('Line content 2')
            ->line('Line content 3');
    }   
}