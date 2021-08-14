<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $fillable = [
        'fname',
        'lname',
        'birth',
        'Email',
        'number',
        'Address',
        'city',
        'state',
        'zip',
        'started_at',
        'password',
    ];

}
