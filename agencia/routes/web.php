<?php

use Illuminate\Support\Facades\Route;
use App\Categoria;
use App\Http\Controllers\PropiedadesController;
use App\Propiedad;

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
    //$propiedades = Propiedad::orderBy('id', 'DESC')
    //->paginate(5);
    return view('home');
    //$data = Categoria::all();
    //return response()->json($data);
});

Route::get('/crearpropiedad', [PropiedadesController::class,'createPropiedad']);
Route::get('/listapropiedades', [PropiedadesController::class,'listPropiedades']);
Route::get('/propiedad/{slug}/detalle', [PropiedadesController::class,'detallePropiedad'])->name('detallepropiedad');
