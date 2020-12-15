<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;

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
    return view('welcome');
});

Route::get('/mi_primer_ruta', function (){
    return 'Helo World Juan';
});

Route::get('prueba', [PruebaController::class, 'prueba']);
Route::get('clientes', [PruebaController::class, 'clientes']);
//Route::get('/prueba', 'PruebaController@prueba');
//Route::get('user/{id}', [UserController::class, 'show']);

