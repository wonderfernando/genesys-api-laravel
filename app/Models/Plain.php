<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plain extends Model
{
    use HasFactory;
    protected $fillable = ["name","price","time","days","description"];
    public $timestamps=false;
}
