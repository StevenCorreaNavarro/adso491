<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trucktrucker extends Model

    // use HasFactory;
    {
        protected $table = 'truck_trucker'; // esto soluciona el problema de las tablas erroeneas desconocidas
    }
    

