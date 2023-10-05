<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrdersCars extends Model
{
    use HasFactory;
    public function cars(): BelongsTo 
    {

        return $this->belongsTo(Car::class, 'car_id');
    }
    public function order():BelongsTo{
        return $this->belongsTo(Order::class, 'order_id');
    }
}
