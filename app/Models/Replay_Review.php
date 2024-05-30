<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Replay_Review extends Model
{
    protected $fillable = [
        'review_id',
        'restaurant_id',
        'reply_text',
    ];

    public $timestamps = true;

    public function review()
    {
        return $this->belongsTo(Reviews::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
