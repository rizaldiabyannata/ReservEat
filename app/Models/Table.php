<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = [
        'restaurant_id',
        'table_number',
        'capacity',
    ];

    public $timestamps = true;

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
