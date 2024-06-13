<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplayReviews extends Model
{
    use HasFactory;
    protected $fillable = [
        'review_id',
        'restaurant_id',
        'reply_text',
    ];

    public $timestamps = true;
}
