<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
})->name("principal");
*/
/*
Route::get("alumnos", function (){
    return view("alumnos");
});
*/

//Ejecuta el metodo de un controlador
//Route::get("alumnos", ["controlador", "index"]);

/*
Route::get("alumno", [APP\Controllers\AlumnoController::class, "index"]);
Route::get("alumno/create", [APP\Controllers\AlumnoController::class, "create"]);
Route::post("alumno/store/", [APP\Controllers\AlumnoController::class, "store"]);
*/

//Crea los recursos automaticamente,
Route::resource("alumno", App\Http\Controllers\AlumnoController::class); //php artisan route list
