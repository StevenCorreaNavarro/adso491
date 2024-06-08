<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    //Relacion muchos a muchos    
    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }
}
