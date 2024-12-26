<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'amount', 'expense_type', 'expense_date', 'Institution_id'];

    public function institution()
    {
        return $this->belongsTo(Institution::class, 'Institution_id');
    }
}
