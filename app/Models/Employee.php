<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'role', 'phone_number', 'Institution_id'];

    public function institution()
    {
        return $this->belongsTo(Institution::class, 'Institution_id');
    }

    public function payments()
    {
        return $this->hasMany(EmployeePayment::class, 'Employee_id');
    }
}
