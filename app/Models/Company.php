<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
   protected $fillable = ["name","country_id","nif","photo","phone","email"];
   public $timestamps = false;
}
