<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\LoginEvent;

class LoginListener
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(LoginEvent $event)
    {
        // Job Queue -> push hàng đợi [mail1, mail2, mail3, mail4,]
        // Job: mail1
        // Queue (redis) Memory Database: Storage on RAM 

        $event->user->sendEmailNotificationLogin();
    }
}
