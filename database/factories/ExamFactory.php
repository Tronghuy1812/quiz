<?php

namespace Database\Factories;

use App\Models\Exam;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ExamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Exam::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name;
        $slug = Str::slug($name, '-');

        return [
            'name' => '[Exam]' . $name,
            'slug' => $slug,
            'time' => 30,
        ];
    }
}
