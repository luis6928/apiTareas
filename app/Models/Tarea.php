<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $guarded=[];
    //protected $fillable=[];
    protected $hidden=['created_at','updated_at'];

    
}
