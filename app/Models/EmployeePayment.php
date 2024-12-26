<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeePayment extends Model
{
    use HasFactory;

    protected $fillable = ['payment_date', 'Employee_id', 'EmployeePaymentPlan_id'];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'Employee_id');
    }

    public function paymentPlan()
    {
        return $this->belongsTo(EmployeePaymentPlan::class, 'EmployeePaymentPlan_id');
    }
}
