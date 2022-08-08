<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'trip_id',
        'driver_id',

    ];

    public function User (){
        return $this->belongsto(User::class);
    }
    public function Driver (){
        return $this->belongsto(Driver::class);
    }
    public function Trip (){
        return $this->belongsto(Trip::class);
    }

}
