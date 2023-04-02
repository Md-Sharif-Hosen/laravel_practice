<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamList extends Model
{
    use HasFactory;
    public function subject()
    {
        //function_body
        return $this->hasOne(Exam::class,'id','Subject_Name');
    }

    public function student()
    {
        //function_body
        return $this->hasOne(Student::class,'id','student_name');
    }


}
