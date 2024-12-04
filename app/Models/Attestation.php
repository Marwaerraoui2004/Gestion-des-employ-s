<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attestation extends Model
{
    protected $fillable = [
        'employee_id', 
        'date_creation', 
        'type'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
