<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
 public function create()
 {
    return view('users.create');

 }
 public function store(Request $request)
 {
   $dadosValidados = $request ->validate([
  'name'=> 'required|min:3|max:255',
  'email'=> 'required|email|unique:users,email',
  'passaword'=> 'required|min:6',
   ]);
   //Persistencia no banco usando o ORM Eloquent
   User::create($dadosValidados);
 // redireciona para o painel administrativo com mensagem de texto
 
   return Redirect('/admin') ->with('sucesso', 'Usuário cadastrado com sucesso');
 }
}
