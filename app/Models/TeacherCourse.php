<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherCourse extends Model
{
    use HasFactory;

    protected $fillable = ['Teacher_id', 'Course_id'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'Teacher_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'Course_id');
    }
}