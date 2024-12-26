<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'phone_number', 'email', 'logo'];

    public function courses()
    {
        return $this->hasMany(Course::class, 'Institution_id');
    }

    public function employees()
    {
        return $this->hasMany(Employee::class, 'Institution_id');
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class, 'Institution_id');
    }

    public function halls()
    {
        return $this->hasMany(Hall::class, 'Institution_id');
    }
}
