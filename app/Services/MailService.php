<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Mail\Order;

class MailService
{
    public function send(array $emails)
    {
        $users = [
            ['email' => 'abasd@gmail.com'],
            ['email' => 'abasd@gmail.com'],
        ];

        try {
            $emailsImplode = implode(',', $emails);

            foreach ($users as $user) {
                Mail::to($user['email'])
                    ->cc('ababab@gmail.com')
                    ->send(new Order);
            }
        } catch(\Exception $e) {
            dump($e->getMessage());
        }
    }
}