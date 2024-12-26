<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherPayment extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'payment_date', 'Teacher_id', 'TeacherPaymentPlan_id'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'Teacher_id');
    }

    public function paymentPlan()
    {
        return $this->belongsTo(TeacherPaymentPlan::class, 'TeacherPaymentPlan_id');
    }
}