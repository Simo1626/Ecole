<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPaymentPlan extends Model
{
    use HasFactory;

    protected $fillable = ['plan_name', 'amount'];

    public function payments()
    {
        return $this->hasMany(StudentPayment::class, 'StudentPaymentPlan_id');
    }
}