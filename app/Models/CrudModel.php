<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrudModel extends Model
{
    use HasFactory;
    public function crud_hobbies()
    {
        //function_body
        return $this ->belongsToMany(CrudHobby::class);
    }
}
