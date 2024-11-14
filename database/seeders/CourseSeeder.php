<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            [
                'name' => 'Machine Learning Fundamentals',
                'description' => 'Explore the foundational concepts of machine learning, covering topics such as supervised learning, unsupervised learning, and reinforcement learning.',
            ],
            [
                'name' => 'Digital Marketing Strategies',
                'description' => 'Dive into the world of digital marketing with a focus on strategic planning and execution, including SEO, content marketing, and social media management.',
            ],
            [
                'name' => 'Cybersecurity Essentials',
                'description' => 'Develop a foundational understanding of cybersecurity principles and practices, including threat detection, prevention, and response.',
            ],
            [
                'name' => 'Data Science for Business',
                'description' => 'Understand the intersection of data science and business decision-making, including data analysis, machine learning, and data visualization techniques.',
            ],
        ]);
    }
}
