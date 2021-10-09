<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Answer;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Question::all() as $index => $question) {
            for ($i = 1; $i <= 4; $i++) {
                if ($index % 2 === 0) {
                    $isCorrect = !Answer::where('question_id', $question->id)->where('is_correct', true)->exists() && ($i % 2 == 0);
                } else {
                    $isCorrect = !Answer::where('question_id', $question->id)->where('is_correct', true)->exists() && ($i % 3 == 0);
                }

                $data = [
                    'question_id' => $question->id,
                    'is_correct' => $isCorrect,
                ];

                Answer::factory(1)->create($data);
            }
        }
    }
}
