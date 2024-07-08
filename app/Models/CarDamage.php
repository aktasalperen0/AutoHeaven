<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarDamage extends Model
{
    use HasFactory;

    protected $table = "car_damage";

    public function getCars(){
        return $this->hasMany(Car::class, "damage_id", "id");
    }
}
