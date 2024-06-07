<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    protected $table = 'role_user'; // esto soluciona el problema de las tablas erroeneas desconocidas
}

// class Role_user extends Model
// {
//     use HasFactory;
//     //Relacion Uno a Muchos (Inversa) 
//     public function users()
//     {
//         return $this->belongsTo('App\Models\Users');
//     }

//     //Relacion Uno a Muchos (Inversa) 
//     public function role()
//     {
//         return $this->belongsTo('App\Models\Roles');
//     }
    
// }
