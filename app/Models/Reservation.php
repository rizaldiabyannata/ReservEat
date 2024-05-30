<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

use App\Models\Restaurant;
use App\Models\User;
use App\Models\Payment;
use App\Models\Menu;

class Reservation extends Model
{
    protected $fillable = [
        'restaurant_id',
        'user_id',
        'menu_id',
        'status',
        'reservation_date',
        'phone_number',
        'name',
        'price',
        'payment_id',
    ];

    protected $cast = [
        'created_at' => 'datetime:H:i:s',
        'updated_at' => 'datetime:H:i:s',,
        'reservation_date' => 'datetime:H:i:s',,
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }


    public function getCreatedAtTimeAttribute($value)
    {
        return Carbon::parse($value)->format('H:i:s');
    }

    public function getUpdateAtTimeAttribute($value)
    {
        return Carbon::parse($value)->format('H:i:s');
    }
    public function reservationDateTimeAttribute($value)
    {
        return Carbon::parse($value)->format('H:i:s');
    }
}
