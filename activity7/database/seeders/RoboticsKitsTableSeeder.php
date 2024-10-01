<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class RoboticsKitsTableSeeder extends Seeder
{
    public function run()
    {
        Course::create([
            'course_key' => 'Rob101',
            'course_name' => 'Introduction to Robotics',
            'robotics_kit' => 'StarterKit'
        ]);

        Course::create([
            'course_key' => 'Rob102',
            'course_name' => 'Introduction to Automation',
            'robotics_kit' => 'StarterKit'
        ]);

        Course::create([
            'course_key' => 'Rob103',
            'course_name' => 'Programming for Robotics',
            'robotics_kit' => 'Educational Robotics Kit'
        ]);
    }
}