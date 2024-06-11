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
        'address',
        'phone_number',
        'open_time',
        'close_time',
        'number_of_tables',
        'category_id',
        'user_id',
        'photo_path',
    ];

    protected $casts = [
        'open_time' => 'datetime:H:i:s',
        'close_time' => 'datetime:H:i:s',
    ];

    public function getOpenTimeAttribute($value)
    {
        return Carbon::parse($value)->format('H:i:s');
    }

    public function getCloseTimeAttribute($value)
    {
        return Carbon::parse($value)->format('H:i:s');
    }
}
