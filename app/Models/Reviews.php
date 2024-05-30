<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Restaurant;
use App\Models\User;

class Reviews extends Model
{
    protected $fillable = [
        'restaurant_id',
        'user_id',
        'review_text',
        'rating',
    ];

    protected $casts = [
        'rating' => 'integer',
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
