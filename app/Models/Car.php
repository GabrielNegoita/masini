<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;

    public function producer(): BelongsTo
    {

        return $this->belongsTo(Producer::class, 'producer_id');
    }

    public function carModel()
    {        
        return $this->belongsTo(CarModel::class, 'car_model_id');
    }
    public function fuel()
    {
        return $this->belongsTo(Fuel::class, 'fuel_id');
    }
    public function traction()
    {
        return $this->belongsTo(Traction::class, 'traction_id');
    }
    public function transmision()
    {
        return $this->belongsTo(Transmision::class, 'transmision_id');
    }
    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }
    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }
   


}
