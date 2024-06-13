<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu_Reservations extends Model
{
    use HasFactory;
    protected $fillable = [
        'menu_id',
        'reservation_id',
        'quantity'
    ];
}
