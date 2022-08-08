<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'position',
        'destination',
        'date',
        // 'now',
        'status',
        'user_id',

    ];

    public function User (){
        return $this->belongsto(User::class);
    }
    public function Dritrips(){
        return $this->hasMany(Dritrip::class);
    }
}
