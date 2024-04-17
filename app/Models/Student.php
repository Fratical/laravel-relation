<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function profile()
    {
        return $this->hasOne(Profile::class,'student_id','id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class,'student_id','id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class,'student_subjects');
    }

}
