<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    use HasFactory;

    protected $fillable = ['Student_id', 'Course_id'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'Student_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'Course_id');
    }
}