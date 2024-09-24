<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Closure;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'title' => $this->faker->word(),
           'description' => $this->faker->sentence(random_int(5, 10)),
           'instructor_id' => User::factory()->state(['role'=>'instructor']),
           'created_at' => now(), 
        ];
    }
    static Course $course ;

    /**
     * Define actions to take after creating a course.
     *
     * @param  \App\Models\Course  $course
     * @return void
     */
   
}
