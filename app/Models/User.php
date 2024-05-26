<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // M\user Relacion Uno a Muchos
    public function posts()
    {
        return $this->hasMany('App\Models\Post'); //RECUPERAR LA COLECCION DE POST QUE PERTENECEN A ESTE USUARIO
    }

    // Model\user  Relacion Uno A Uno con profile
    public function profile()
    {
        return $this->hasOne('App\Models\Profile');
    }
    
}


// PS C:\xampp\htdocs\adso491> php artisan migrate

//  INFO  Nothing to migrate.

// PS C:\xampp\htdocs\adso491> php artisan tinker
// Psy Shell v0.12.3 (PHP 8.2.12 — cli) by Justin Hileman
// > use App\Models\Profile                                                                                                                                                                                 
// > $user = User::find(1);                                                                                                                                                                                 
// [!] Aliasing 'User' to 'App\Models\User' for this Tinker session.
// = App\Models\User {#5456
//   id: 1,
//   name: "steven ",
//   email: "epag@epa.com",
//   email_verified_at: null,
//   #password: "",
//   #remember_token: null,
//   created_at: null,
//   updated_at: null,
// }

// > use App\Model\User                                                                                                                                                                                                   
// > $user = User::find(1);                                                                                                                                                                                               
//  Error  Class "App\Model\User" not found.

// > use App\Model\User
// > $user = User::find(1);

//  Error  Class "App\Model\User" not found.

// >                                                                                                                                                                                                                      
// PS C:\xampp\htdocs\adso491> php artisan tinker
// Psy Shell v0.12.3 (PHP 8.2.12 — cli) by Justin Hileman
// > use App\Models\Profile
// > $profile=Profile::find(1)
// = App\Models\Profile {#5454
//   id: 1,
//   title: "CIO",
//   biografia: "el lider de la banda",
//   website: "piru@epa.com",
//   user_id: 2,
//   created_at: null,
//   updated_at: null,
// }

// > use App\Models\Profile                                                                                                                                                                                               
// > $user = User::find(1);                                                                                                                                                                                               
// [!] Aliasing 'User' to 'App\Models\User' for this Tinker session.
//   id: 1,
//   name: "steven ",
//   email: "epag@epa.com",
//   email_verified_at: null,
//   #password: "",
//   #remember_token: null,
//   created_at: null,
//   updated_at: null,
// }

// > use App\Models\Category
// > $category =Category::find(1);
// = App\Models\Category {#5117
//   id: 1,
//   name: "cat_laravel ",
//   created_at: null,
//   updated_at: null,
// }

// > use App\Models\Teacher
// > $teacher =Teacher::find(1);
// = null

// >                                                                                                                                                                                                                      













