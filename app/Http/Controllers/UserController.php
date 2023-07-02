<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    function cad_users(Request $request)
    {
        $request->validate([
            'nome' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'matricula' => ['required'],
        ], [
            'nome.required' => 'O nome é obrigatório',
            'email.required' => 'O Email é obrigatório',
            'password.required' => 'A Senha é obrigatória',
            'matricula.required' => 'A Matricula é obrigatória',
        ]);


        $new_user = new User($request->only('nome', 'email', 'password', 'matricula'));
        $new_user->confirmado = 0;
        if ($request->decisao === 'aluno') {
            $new_user->aluno = 1;
        } elseif ($request->decisao === 'funcionario') {
            $new_user->funcionario = 1;
        }
        if ($new_user->save()) {
            Alert::success("Tudo certo!", "O usuário $new_user->nome foi cadastrado, mas ainda esta sujeito a confirmação de dados!");
            return redirect()->route('home');

        }
    }
}