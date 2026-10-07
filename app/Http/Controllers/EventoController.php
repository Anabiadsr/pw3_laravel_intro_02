<?php

namespace App\Http\Controllers;
use App\Models\Evento;
use Illuminate\Http\Request;


class EventoController extends Controller
{
    //exibe a listagem de usuários com suporte a filtro de busca 
    public function index(Request $request)
    {
        //captura o termo de busca  
        $busca  = $request-> input('busca');

        if($busca){
            $eventos = Evento::where('titulo', 'like', "%{$busca}%") ->orderBy('titulo', 'ASC') ->get();
        } 
        else{
            $eventos = Evento::orderby('titulo', 'ASC')-> get();
        }

        return view('eventos.index', compact('eventos', 'busca'));
        

    }

    public function create()
    {
        return view('eventos.create');
    }

    public function store(Request $request)
    {
        $dadosvalidos = $request->validate([
            'titulo' => 'required|min:3|max:255',
            'local' => 'required|min:2|max:255',
            'vagas' => 'required|integer|min:0',
            'preco_inscricao' => 'required|numeric|min:0',
        ]);

        Evento::create($dadosvalidos);

        return redirect('/eventos')->with('sucesso', 'Usuário cadastrado com sucesso.');
    }
}
