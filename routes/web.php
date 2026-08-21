<?php

use App\Http\Controllers\LivroController;
use App\Http\Controllers\OficinaController;

use App\Http\Controllers\OficinaControllerController;

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
   return view('home');
});

Route:: view('/landing', 'landing');
Route::view('/admin', 'admin.dashboard');


Route::get('/livros', [LivroController::class, 'index']);
Route::post('/livros', [LivroController::class, 'store']);

Route::get('/oficinas', [OficinaController::class, 'index']);
Route::post('/oficinas', [OficinaController::class, 'store']);