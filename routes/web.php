<?php
use app\Models\User;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
   return view('home');
});

Route:: view('/landing', 'landing');
Route::view('/admin', 'admin.dashboard');

//carregar o formulário
Route::get('/usuarios/novo', [UserController::class, 'create']);
//salvar dados enviados 
Route::post('/usuarios', [UserController::class, 'store']);

Route::get('/livros', [LivroController::class, 'index']);
Route::post('/livros', [LivroController::class, 'store']);

Route::get('/oficinas', [OficinaController::class, 'index']);
Route::post('/oficinas', [OficinaController::class, 'store']);

Route::get('/teste-orm', function () {
    User::create([
        'name' => 'João Ramponi',
        'email' => 'joaoramponi6@escola.sp.gov.br',
        'password' => '12345678'
    ]);

    return User::all();
});
