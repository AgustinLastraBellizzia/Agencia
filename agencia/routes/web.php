<?php

use Illuminate\Support\Facades\Route;
use App\Categoria;
use App\Http\Controllers\PropiedadesController;

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

Route::get('/', function () {
    //return view('welcome');
    $data = Categoria::all();
    return response()->json($data);
});

Route::get('/crearpropiedad', [PropiedadesController::class,'createPropiedad']);
Route::get('/listapropiedades', [PropiedadesController::class,'listPropiedades']);