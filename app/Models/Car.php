<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory,SoftDeletes;

    protected $table ='cars';



    public function getUsers(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function getGallery(){
        return $this->hasMany(MediaGallery::class,'car_id','id');
    }


}
