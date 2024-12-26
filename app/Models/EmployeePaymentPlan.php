<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeePaymentPlan extends Model
{
    use HasFactory;

    protected $fillable = ['plan_name', 'description', 'amount', 'payment_frequency', 'Institution_id'];

    public function institution()
    {
        return $this->belongsTo(Institution::class, 'Institution_id');
    }
}
