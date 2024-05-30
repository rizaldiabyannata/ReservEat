<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = [
        'restaurant_id',
        'menu_id',
        'discount_code',
        'discount_percentage',
        'valid_from',
        'valid_to',
    ];

    public $timestamps = true;

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
