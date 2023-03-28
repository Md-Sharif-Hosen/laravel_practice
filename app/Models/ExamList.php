<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamList extends Model
{
    use HasFactory;
    // public function subject()
    // {
    //     //function_body
    //     return $this->belongsTo(Exam::class,'Exam_Name');
    // }

    public function student()
    {
        //function_body
        return $this->belongsTo(Student::class,'Student_Name','id');
    }


}
