<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();

        foreach ($categories as $index => $category) {
            Question::factory(50)->create([
                'created_by' => $category->created_by,
                'category_id' => $category->id,
                'level' => $index % 2 === 0 ? 1 : 2,
            ]);
        }
    }
}
