<?php

use App\Http\Controllers\JogosController;
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

Route::get('/', function () {
    return view('welcome');
});

/* Retornando uma view
    Route::view('/jogos', 'jogos');
*/

/* Retornando uma texto*/

Route::get('/home', function(){
    return 'Testando texto';
});


//Route::get('/jogos', [JogosController::class, 'index']);

Route::prefix('jogos')->group(function (){
    Route::get('/', [JogosController::class, 'index'])->name('jogos-index');
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
    Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id','[0-9]+')->name('jogos-edit');
    Route::put('/{id}/edit', [JogosController::class, 'update'])->where('id','[0-9]+')->name('jogos-update');
    Route::delete('/{id}', [JogosController::class, 'destroy'])->where('id','[0-9]+')->name('jogos-destroy');
});

//Rota de erro
Route::fallback(function(){
    return 'Erro de rota';
});
