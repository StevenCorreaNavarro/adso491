<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;


    //  models\profile Relacion Uno A Uno con profile
    public function profile()
    {

        return $this->hasOne('App\Models\Profile');
    }

    // models\profile relacion uno a uno con User
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
