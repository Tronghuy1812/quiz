<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\User;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::where('type', 2)->get();

        foreach ($users as $user) {
            Category::factory(20)->create([
                'created_by' => $user->id
            ]);
        }
    }
}
