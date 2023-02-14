<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CortoController;

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
    return view('index');
})->name('index');

Route::get('holamundo', function () {
    return 'Hola mundo!';
})->name('Hola mundo');

Route::get('saludo1/{nombre?}/{apellido}', function (string $nombre, string $apellido) {
    return "Hola, $nombre $apellido!";
})->where('nombre', '[A-Za-z]+')
    ->where('nombre', '[A-Za-z]+')
    ->name('saludo_con_apellidos');
---------------------------------------------------------------------
Route::get('saludo/{nombre?}/{id?}',function ($nombre = "Invitado", $id = 0) {
    return view('saludo')->with('nombre',$nombre)->with('id',$id);
})->where('nombre', '[A-Za-z]+')
    ->where('id', '[0-9]+')
    ->name('saludo');


Route::get('saludo/{nombre?}/{id?}',function ($nombre = "Invitado", $id = 0) {
    return view('saludo',['nombre'=> $nombre, 'id' => $id]);
})->where('nombre', '[A-Za-z]+')
    ->where('id', '[0-9]+')
    ->name('saludo');


Route::get('saludo/{nombre?}/{id?}',function ($nombre = "Invitado", $id = 0) {
    return view('saludo',compact('nombre','id'));
})->where('nombre', '[A-Za-z]+')
    ->where('id', '[0-9]+')
    ->name('saludo');


Route::view('saludo/{nombre}/{id}', 'saludo', ['nombre' => 'nombre', 'id' => 'id'])
->where(['nombre' => '[A-Za-z]+', 'id' => '[0-9]+']);


Route::view('saludo/{nombre}/{id}', 'saludo', ['nombre','id'])
->where(['nombre' => '[A-Za-z]+', 'id' => '[0-9]+']);


Route::get('/', IndexController::class)->name('index');
Route::get('listado', function () {

    );

    return view('corto.listado', compact('cortos'));
})->name('listado_cortos');*/

Route::get('/', IndexController::class)->name('index');

Route::resource('corto', CortoController::class)->only(['index']);
//<a href="{{ route('holamundo') }}">Pincha aquí</a>