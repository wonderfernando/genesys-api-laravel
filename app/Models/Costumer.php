<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    use HasFactory;
    protected $table="costumers";
    protected $fillable = ['name',
    'phone'  ,
    'bi'     ,
    'email'  ,
    'user_id',
    'city_id'   ,
    
     'gender',
     'photo' ,
    'address',
     'password'
    ];

    
    public function User()
    {
        return hasOne(User::class);
    }
}
