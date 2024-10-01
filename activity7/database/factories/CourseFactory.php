<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'course_key' => $this->faker->unique()->numerify('Rob###'),
            'course_name' => $this->faker->sentence(3),  
            'robotics_kit' => $this->faker->randomElement(['StarterKit', 'Kit5', 'Educational Robotics Kit']),
            'course_cover' => $this->faker->imageUrl(640, 480, 'robots', true),
            'content' => $this->faker->paragraph(),
        ];
    }
}
