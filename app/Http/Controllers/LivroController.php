<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class LivroController extends Controller
{
    //
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', compact('livros'));
    } 

    public function store(Request $request){
        $dados = $request->validate([
            'titulo' => 'required|min:1',
            'autor' => 'required|min:3|max:100',
            'ano_publicacao' => 'required|integer|min:1'
        ]);

        Livro::create([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'ano_publicacao' => $request->ano_publicacao

        ]);

        return redirect('/livros');
    }
}
