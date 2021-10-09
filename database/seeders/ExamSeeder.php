<?php

namespace Database\Seeders;

use App\Models\Exam;
use App\Models\User;
use App\Models\Question;

use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exam::factory(10)->create([
            'created_by' => User::where('type', 2)->first()->id
        ]);

        $exams = Exam::inRandomOrder()->limit(5)->get();

        foreach ($exams as $exam) {
            $questions = Question::inRandomOrder()->limit(50)->get();

            foreach($questions as $question) {
                $exam->questions()->attach($question->id);
                
            }
        }
    }
}
