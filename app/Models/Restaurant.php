<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

use App\Models\restaurant_categories;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo_path',
        'address',
        'phone_number',
        'open_time',
        'close_time',
        'email',
        'password',
        'category_id',
        'number_of_tables',
        'user_id'
    ];

    protected $casts = [
        'open_time' => 'datetime:H:i:s',
        'close_time' => 'datetime:H:i:s',
    ];

    public function category()
    {
        return $this->belongsTo(restaurant_categories::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function getOpenTimeAttribute($value)
    {
        return Carbon::parse($value)->format('H:i:s');
    }

    public function getCloseTimeAttribute($value)
    {
        return Carbon::parse($value)->format('H:i:s');
    }
}
