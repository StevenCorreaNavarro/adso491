<?php

namespace App\Http\Controllers;  //// reconocedor de controladores
use App\Models\Calculadora;
use App\Models\Product;
use App\Models\Curso;
use App\Models\Module;
use App\Models\Teacher;
use App\Models\Registro; 
use App\Models\Store;              //crear esta parte 
use App\Models\Student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// git remote add origin https://github.com/StevenCorreaNavarro/example-app.git

// Route::get('/', function () {           //http://localhost/example-app/example-app/public/mejos
//     return view('welcome');
// });

// Route::get('/', function () {           //primera vista de modulos
//     $modules = Module::orderBy('id', 'desc')->get();
//     return view('module_carpet.listar',compact('modules'));
// });

Route::get('/', function () {           //primera vista de modulos
        // $modules = Module::orderBy('id', 'desc')->get();
        return view('bienvenido');
    });
    

// use App\Model\User
// $user = User::find(2)  
Route::get('usuario/asociar_rol',[RoleUserController::class,'asociar']);
Route::post('usuario/asociar_rol/store',[RoleUserController::class,'store'])->name('role_user.store');

//modulo
Route::get('module/listar',[ModuleController::class,'listar'])->name('module.listar');
Route::get('module/create',[ModuleController::class,'create'])->name('module.create');
Route::post('module/store',[ModuleController::class,'store'])->name('module.store');
Route::get('module/{dato}',[ModuleController::class,'show'])->name('module.show');
Route::put('module/{dato}',[ModuleController::class,'update'])->name('module.update');  
Route::delete('module/{dato}',[ModuleController::class,'destroy'])->name('module.destroy');
Route::get('module/{dato}/editar',[ModuleController::class,'edit'])->name('module.edit'); 
//estudiante
Route::get('student/listar',[StudentController::class,'listar'])->name('student.listar');
Route::get('student/create',[StudentController::class,'create'])->name('student.create');
Route::post('student/store',[StudentController::class,'store'])->name('student.store');
Route::get('student/{dato}',[StudentController::class,'show'])->name('student.show');
Route::put('student/{dato}',[StudentController::class,'update'])->name('student.update');      
Route::delete('student/{dato}',[StudentController::class,'destroy'])->name('student.destroy');
Route::get('student/{dato}/editar',[StudentController::class,'edit'])->name('student.edit');   
//profesor    
Route::get('teacher/listar',[TeacherController::class,'listar'])->name('teacher.listar');
Route::get('teacher/create',[TeacherController::class,'create'])->name('teacher.create');
Route::post('teacher/store',[TeacherController::class,'store'])->name('teacher.store');
Route::get('teacher/{dato}',[TeacherController::class,'show'])->name('teacher.show');
Route::put('teacher/{dato}',[TeacherController::class,'update'])->name('teacher.update');      
Route::delete('teacher/{dato}',[TeacherController::class,'destroy'])->name('teacher.destroy');
Route::get('teacher/{dato}/editar',[TeacherController::class,'edit'])->name('teacher.edit');   
//curso
Route::get('curso/listar',[CursoController::class,'listar'])->name('curso.listar');
Route::get('curso/create',[CursoController::class,'create'])->name('curso.create');
Route::post('curso/store', [CursoController::class,'store'])->name('curso.store');
Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.show');
Route::put('curso/{curso}',[CursoController::class,'update'])->name('curso.update');      //actualizacion de datos
Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');
Route::get('curso/{curso}/editar',[CursoController::class,'edit'])->name('curso.edit');   //actualizacion de datos

// Route::get('/rutapepe',[ProductController::class,'f_pepe']);      // public function f_pepe() desde product controller
// Route::get('/rutapepecarlos',[ProductController::class,'f_carlos']);  //rutapepecarlos  
// Route::get('/rutasuma/{dato1}/{dato2}',[CalculadoraControler::class,'suma']);
// Route::get('/rutaresta/{dato1}/{dato2}',[CalculadoraControler::class,'resta']);
// Route::get('/rutamult/{dato1}/{dato2}',[CalculadoraControler::class,'multiplicasion']);
// Route::get('/rutadiv/{dato1}/{dato2}',[CalculadoraControler::class,'division']);
// Route::get('/rutaprimo/{dato1}',[CalculadoraControler::class,'primo']); //php artisan 

// Route::get('curso/listar', [CursoController::class, 'listar'])->name('curso.listar');  // funsion listar para consulta en cursocontroller
// Route::get('curso/create', [CursoController::class, 'create']);           // ruta
// Route::post('curso/store', [CursoController::class, 'store'])->name('curso.store');
// Route::get('curso/{curso}', [CursoController::class, 'show'])->name('curso.show'); 
// Route::get('curso/{curso}', [CursoController::class, 'destroy'])->name('curso.destroy'); 

// Route::get('registrarse/registrar', [RegistroController::class, 'registro']);  // funsion que esta en RegistroController
// Route::post('registrarse/store', [RegistroController::class, 'store'])->name('registrar.store'); /*ruta para action en view */

// route::get('login',[Logincontroller::class,'iniciar']);
// route::post('login/store',[LoginController::class,'store'])->name ('login.store');