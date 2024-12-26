<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = ['attendance_date', 'status', 'Student_id', 'Group_id'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'Student_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'Group_id');
    }
}
