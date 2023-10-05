<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    public function cars(): BelongsTo 
    {

        return $this->belongsTo(Car::class, 'car_id');

    }

    public function city():BelongsTo 
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
