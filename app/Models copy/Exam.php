<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function students()
    {
        //function_body
        return $this->hasMany(Student::class,'id','Student_Name');
    }

    public function department()
    {
        //function_body
        return $this->belongsTo(Department::class,'Department','id');
    }

}
