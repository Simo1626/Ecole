<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherPaymentPlan extends Model
{
    use HasFactory;

    protected $fillable = ['plan_name', 'amount'];

    public function payments()
    {
        return $this->hasMany(TeacherPayment::class, 'TeacherPaymentPlan_id');
    }
}