<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu_Categories extends Model
{
    protected $fillable = [
        'category_name',
    ];

    public $timestamps = true;
}
