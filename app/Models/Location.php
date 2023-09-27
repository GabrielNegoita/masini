<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    public function county()
    {
        return $this->belongsTo(County::class, 'county_id');
    }
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
