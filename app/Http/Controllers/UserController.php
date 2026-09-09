<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $dadosvalidos = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create($dadosvalidos);

        return redirect('/admin')->with('sucesso', 'Usuário cadastrado com sucesso.');
    }
}
