<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'max_students'];

    public function students()
    {
        return $this->hasMany(Student::class, 'Group_id');
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'Group_id');
    }
}
