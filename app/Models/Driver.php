<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'city',
        'region',
        'driver_license',
        'status',
        'carlicense'

    ];

    public function Driver (){
        $this->belongsto(User::class);
    }
    public function Dritrips(){
        return $this->hasMany(Dritrip::class);
    }
    public function User (){
        return $this->belongsto(User::class);
    }
    public function Books()
    {
        return $this->hasMany(Book::class);
    }

}
