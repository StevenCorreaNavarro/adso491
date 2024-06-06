<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    use HasFactory;
    //Relacion Muchos a Muchos
    public function customers(){
      return $this->belongsToMany('App\Models\Customer');
  }
}
