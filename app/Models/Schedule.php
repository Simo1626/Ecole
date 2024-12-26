<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['day', 'start_time', 'end_time', 'Hall_id', 'Course_id', 'Group_id', 'Teacher_id'];

    public function hall()
    {
        return $this->belongsTo(Hall::class, 'Hall_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'Course_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'Group_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'Teacher_id');
    }
}