<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VeiculoController;
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


     Route::get('/teste', [HomeController::class, 'teste']);


//Route::group(['prefix' => 'veiculos', 'as' => 'veiculos.'], function () {
//  Route::get('/', 'VeiculoController@index')->name('list');
//  Route::get('/novo', 'VeiculoController@create')->name('create');
//  Route::post('/novo', 'VeiculoController@store')->name('store');
//});


Route::get('/', [HomeController::class, 'index']);

Route::group(['prefix' => 'veiculo', 'as' => 'veiculo.'], function () {
  Route::get('/', [VeiculoController::class, 'index'])->name('list');
  Route::get('/novo', [VeiculoController::class, 'create'])->name('create');
  Route::post('/novo', [VeiculoController::class, 'store'])->name('store');
});
