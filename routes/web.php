<?php

use App\Http\Controllers\LivroController;
use App\Models\Livro;
use Illuminate\Support\Facades\Route;

Route::get('/livros', [LivroController::class, 'index']);

Route::post('/livros', [LivroController::class, 'store']);