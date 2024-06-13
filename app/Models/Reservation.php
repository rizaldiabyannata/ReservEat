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
        'status',
        'reservation_date',
        'phone_number',
        'name',
        'price',
        'payment_id',
        'table_number',
        'number_of_guest'
    ];

    protected $cast = [
        'created_at' => 'datetime:H:i:s',
        'updated_at' => 'datetime:H:i:s',
        'reservation_date' => 'datetime:H:i:s',
    ];


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

    public function getReservationsTodayAttribute()
    {
        $today = Carbon::today();
        $todayReservations = Reservation::whereDate('created_at', $today->format('Y-m-d'))->count();
        return $todayReservations;
    }
}
