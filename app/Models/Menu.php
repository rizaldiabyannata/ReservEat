<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'path_photo_menu',
        'menu_category',
        'description',
        'price',
        'restaurant_id'
    ];

    public $timestamps = true;
}
