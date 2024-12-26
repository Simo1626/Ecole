<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'Institution_id'];

    public function institution()
    {
        return $this->belongsTo(Institution::class, 'Institution_id');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'TeacherCourse', 'Teacher_id', 'Course_id');
    }

    public function payments()
    {
        return $this->hasMany(TeacherPayment::class, 'Teacher_id');
    }
}