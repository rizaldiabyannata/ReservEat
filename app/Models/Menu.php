<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'path_photo_menu',
        'menu_category_id',
        'description',
        'stok',
        'price',
    ];

    public $timestamps = true;

    public function menuCategory()
    {
        return $this->belongsTo(MenuCategories::class);
    }
}
