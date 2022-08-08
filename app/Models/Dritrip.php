<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dritrip extends Model
{
    use HasFactory;
    protected $fillable = [
        'driver_id',
        'trip_id',
        'price'

    ];
    public function Driver(){
        return $this->belongsto(Driver::class);
    }
    public function Trip(){
        return $this->belongsto(Trip::class);
    }
}
