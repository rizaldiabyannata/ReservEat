<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation_History extends Model
{
    protected $fillable = [
        'reservation_id',
        'status',
    ];

    public $timestamps = true;

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }

    public function getStatusAttribute($value)
    {
        return ucfirst($value);
    }
}
