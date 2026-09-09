<?php
use App\Models\User;
use App\Http\Controllers\LivroController;
use App\Models\Livro;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
}); 

Route::view('/admin', 'admin.dashboard');
Route::view('/landing', 'landing');

Route::get('/usuarios/novo', [UserController::class, 'create']);

Route::post('usuarios', [UserController::class, 'store']);

Route::get('/sobre', function () {
    return view('sobre.sobre');
});
Route::get('/equipe', function () {
    return view('equipe.equipe');
});
Route::get('/contato', function () {
    return view('contato.contato');
});
Route::get('/teste-orm', function () {
    User::create([
        'name' => 'Ana Clara Santos',
        'email' => 'ana.santos@escola.sp.gov.br',
        "password" => '12345678'
    ]);
    return User::all();
});

Route::get('/livros', [LivroController::class, 'index']);

Route::post('/livros', [LivroController::class, 'store']);