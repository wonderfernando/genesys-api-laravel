<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    use HasFactory;
    protected $fillable = ["name","plain_id","costumer_id","user_id","total","date","date_final","status"];
    public $timestamps = false;
}
