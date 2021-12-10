<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
     /**
     * The name of factory's corresponding model.
     *
     * @var string
     */

     protected $model = Student::class; 

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'semester' => $this->faker->text(5),
            'cgpa' => $this->faker->numberBetween(1,4),
        ];
    }
}
