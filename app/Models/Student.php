<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{




    use HasFactory;
    
    public function department()
    {
        //function_body
        return $this->belongsTo(Department::class, 'Department', 'id');
    }
}
