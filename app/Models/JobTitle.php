<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobTitle extends Model
{

    protected $fillable = [
        'id',
        'title', 
    ];

    // public function employees()
    // {
    //     return $this->hasMany(Employee::class);
    // }
}
