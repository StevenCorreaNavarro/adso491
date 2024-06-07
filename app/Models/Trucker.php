<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trucker extends Model
{
    use HasFactory;
    //Relacion Muchos a Muchos
    public function trucks(){
      return $this->belongsToMany('App\Models\Truck');
  }
}
