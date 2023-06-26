<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
 protected $fillable = ["name",
 "phone",
 "email",
 "city_id",
 "address",
 "gender",
 "position_id"];
 public $timestamps = false;
}
