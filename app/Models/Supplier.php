<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    // M\user Relacion Uno a Muchos
    public function Products()
    {
        return $this->hasMany('App\Models\Product'); //RECUPERAR LA COLECCION DE POST QUE PERTENECEN A ESTE USUARIO
    }
}
