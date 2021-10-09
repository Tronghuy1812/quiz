<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Lang;
use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailBase;

class VerifyEmail extends VerifyEmailBase
{
//    use Queueable;

    // change as you want
    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable);
        }

        return (new MailMessage)
            ->subject('Test Send mail custom')
            ->line('Please click the button below to verify your email address.')
            ->action(
                'Button Send Mail Verify',
                $this->verificationUrl($notifiable)
            )
            ->line('If you did not create an account, no further action is required.')
            ->line('Line content 1')
            ->line('Line content 2')
            ->line('Line content 3');
    }
}