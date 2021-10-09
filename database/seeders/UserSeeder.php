<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(50)->create();

        if (User::where('email', 'admin@suntech.dev.vn')->count() === 0) {
            User::create([
                'name' => 'Administrator',
                'email' => 'admin@suntech.dev.vn',
                'phone' => '0985454334',
                'email_verified_at' => now(),
                'address' => 'Ha Noi',
                'type' => 2,
                'password' => bcrypt('123@123a'),
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
