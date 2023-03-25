<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class StudentDepartment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Department::truncate();
        Department::create([
            'Department_Name' => 'Computer Science & Engineering(CSE)',
            'Course_Code'=>'2002',
        ]);

        Department::create([
            'Department_Name'=>'Electrical & Electronics Engineering(EEE)',
            'Course_Code'=>"2003",
        ]);
        Department::create([
            'Department_Name'=>'Electrical & Computer Engineering(ECE)',
            'Course_Code'=>'2004',
        ]);

    }
}
