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
        return $this->belongsToMany(CrudHobby::class);
    }
    public function user_roles()
    {
        //function_body
        return $this->belongsTo(UserRole::class, 'role', 'serial');
    }
    public function crud_images()
    {
        //function_body
        return $this->hasMany(CrudImage::class, 'crud_model_id', 'id');
    }
}
