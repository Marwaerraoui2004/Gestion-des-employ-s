<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    protected $fillable = [
        'first_name',
        'last_name',
        'cin',
        'birthdate',
        'adress',
        'phone',
        'salary',
        'start_date',
        'exit_date',
        'job_title_id'
    ];
    public function jobTitle()
    {
        return $this->belongsTo(JobTitle::class);
    }
}
