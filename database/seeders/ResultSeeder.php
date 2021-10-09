<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\User;
use App\Models\Exam;
use App\Models\Result;
use App\Models\ResultsDetail;
use Illuminate\Database\Seeder;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('type', 1)->first();
        $exam = Exam::has('questions')->first();

        $result = Result::create([
            'user_id' => $user->id,
            'exam_id' => $exam->id,
        ]);
        
        foreach ($exam->questions as $question) {
            ResultsDetail::create([
                'result_id' => $result->id,
                'question_id' => $question->id,
                'answers_id' => Answer::where('question_id', $question->id)->inRandomOrder()->first()->id,
            ]);
        }

        // Logic for exam's score
        $result->score = 10;
        $result->save();
    }
}
