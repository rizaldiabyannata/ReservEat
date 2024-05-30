<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use App\Models\Restaurant;

class restaurant_categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'path',
        'description',
    ];
}
