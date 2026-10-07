<?php
use App\Models\User;
use App\Http\Controllers\LivroController;
use App\Models\Livro;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventoController;

Route::get('/', function () {
    return view('home');
}); 


Route::view('/landing', 'landing');
// Rota da listagem e painel administrativo (GET)
Route::get('/admin', [UserController::class, 'index']);

Route::get('/usuarios/novo', [UserController::class, 'create']);

Route::post('usuarios', [UserController::class, 'store']);

// Route::get('/sobre', function () {
//     return view('sobre.sobre');
// });
// Route::get('/equipe', function () {
//     return view('equipe.equipe');
// });
// Route::get('/contato', function () {
//     return view('contato.contato');
// });

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

// Rotas de criação de usuários
Route::get('/usuarios/novo', [UserController::class, 'create']);
Route::post('/usuarios', [UserController::class, 'store']);

// Rotas da Agenda de Eventos

Route::get('/eventos', [EventoController::class, 'index']);
Route::get('/eventos/novo', [EventoController::class, 'create']);
Route::post('/eventos', [EventoController::class, 'store']);