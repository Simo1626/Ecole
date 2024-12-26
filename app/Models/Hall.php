<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    protected $fillable = ['hall_number', 'capacity', 'facilities', 'Institution_id'];

    public function institution()
    {
        return $this->belongsTo(Institution::class, 'Institution_id');
    }
}
