<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CoursePage;

class CoursePagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Example seeding data for the course pages
        CoursePage::create([
            'course_id' => 1, // Reference to an existing course
            'page_title' => 'Introduction to Machine Learning',
            'page_content' => 'This is the content of the machine learning introduction page...',
            'image' => 'images/machine-learning-intro.jpg', // Example image path
            'page_number' => 1
        ]);

        CoursePage::create([
            'course_id' => 1,
            'page_title' => 'Machine Learning Algorithms',
            'page_content' => 'This page discusses various ML algorithms...',
            'image' => 'images/ml-algorithms.jpg',
            'page_number' => 2
        ]);
    }
}
