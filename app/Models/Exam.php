<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    public function exam_results()
    {
        return $this->hasMany(ExamResult::class, 'exam_id');
    }
}
