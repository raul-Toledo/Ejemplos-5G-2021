<?php

use Illuminate\Support\Facades\Route;
//Agregamos el controlador
use App\Http\Controllers\Pruebas;
use App\Http\Controllers\NeruoLink;
use App\Http\Controllers\VideoController;

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

Route::get('/', [NeruoLink::class, 'inicio'])->name('principal');
Route::get('/param',[NeruoLink::class, 'parametro'] );
Route::get('/param2', [NeruoLink::class, 'parametro2'] );
Route::get('/with', [Pruebas::class, 'chetos'])->name('ejemWith');
Route::get('/url/{b}/{a?}/{f?}', [Pruebas::class, 'area']);
Route::get('/multi/', [Pruebas::class,'inicio']);

Route::get('/cosa', function(){
    return redirect()->route('principal');
});