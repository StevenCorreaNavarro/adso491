<?php

namespace App\Http\Controllers;
use App\Models\RoleUser;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleUserController extends Controller
{
    public function listar()
    {
        // $user = User::find(1);
        // return $user->profile;                          $students  se escribe igual compact('students'));
        $roleusers = RoleUser::orderBy('id', 'desc')->get();
        return view('role_user.listar', compact('roleusers'));
        
    }
    public function asociar()
    {
        $user = User::all();
        $role = Role::all();
        return view('role_user.asociar', compact('user', 'role'));
    }
    // public function asociar()
    // { // crear formulario
    //     // $teacher=Teacher::pluck('id');
    //     $users = User::all();
    //     $roles = Role::all();
    //     return view('role_user.create', compact('users', 'roles'));
    // }
    // public function create()
    // { // crear formulario
    //     return view('role_user.create');
    // }

    public function store(Request $request)
    {
        $user = User::find($request->user_id);
        $user->roles()->attach($request->role_id);
        // return 'hola desde asociar';
        // $user->save();
        // return $curso;
        return redirect()->route('role_user.listar'); 
    }
}
