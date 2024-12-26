<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'Institution_id'];

    public function institution()
    {
        return $this->belongsTo(Institution::class, 'Institution_id');
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'StudentCourse', 'Course_id', 'Student_id');
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'TeacherCourse', 'Course_id', 'Teacher_id');
    }
}
