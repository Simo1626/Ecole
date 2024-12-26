<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'student'; // Optional if the table name is plural of the model name

    // Primary key
    protected $primaryKey = 'id';

    // Indicates if the IDs are auto-incrementing.
    public $timestamps = false;

    protected $fillable = [
        'first_name', 'last_name', 'birthday', 'grade_level',
        'phone_number', 'email', 'registration_date', 
        'responsible_name', 'responsible_contact', 'picture'
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'StudentCourse', 'Student_id', 'Course_id');
    }

    public function payments()
    {
        return $this->hasMany(StudentPayment::class, 'Student_id');
    }
}
