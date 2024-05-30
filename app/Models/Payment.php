<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'method_name',
        'pay_at',
    ];

    protected $dates = [
        'pay_at',
        'created_at',
        'updated_at',
    ];
}
