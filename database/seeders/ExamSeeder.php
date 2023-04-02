<?php

namespace Database\Seeders;

use App\Models\Exam;
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
        Exam::truncate();

        Exam::create([
            'title' => 'physics'
        ]);
        Exam::create([
            'title' => 'chemistry'
        ]);
        Exam::create([
            'title' => 'Objective C'
        ]);
        Exam::create([
            'title' => 'Biology'
        ]);
        Exam::create([
            'title' => 'php'
        ]);
        Exam::create([
            'title' => 'math'
        ]);
        Exam::create([
            'title' => 'Compiler design'
        ]);
        Exam::create([
            'title' => 'Algorithm'
        ]);
    }
}
