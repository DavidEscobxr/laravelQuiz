<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuartel extends Model
{
    use HasFactory;

    //Relacion uno a uno polimorfica
    public function image(){
        return $this->morphMany('App\Models\Image','imageable');
    }
}
