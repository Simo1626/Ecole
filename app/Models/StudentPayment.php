<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPayment extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'payment_date', 'Student_id', 'StudentPaymentPlan_id'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'Student_id');
    }

    public function paymentPlan()
    {
        return $this->belongsTo(StudentPaymentPlan::class, 'StudentPaymentPlan_id');
    }
}