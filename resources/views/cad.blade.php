@extends('template.header')

@section('cad')
    <br>
    <div class="row">
        <link rel="stylesheet" href="{{ URL::asset('assets/css-login.css') }}" />
        <div class="col-4 m-auto">
            <div class="card">
                <div id="login-title" class="card-header  text-center">
                    Cadastrar
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('cadastra_users_back_end') }}">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">Nome*</label>
                                <input type="text" class="form-control" name="nome" placeholder="Seu nome">
                            </div>
                            <div class="col">
                                <label for="exampleInputMatricula1">Matrícula*</label>
                                <input type="text" class="form-control" placeholder="Matricula do IFF"
                                    name="matricula">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Endereço de email*</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Seu email">
                            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com
                                ninguém.</small>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputPassword1">Senha*</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Senha">
                            </div>
                        </div>
                        <br>
                        <div class="col-12">
                            <label class="visually" for="inlineFormSelectPref">Sou um?</label>
                            <select name="decisao" class="form-select" id="inlineFormSelectPref">

                                <option value="aluno">Aluno</option>
                                <option value="funcionario">funcionário</option>
                            </select>
                        </div>



                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-muted text-center">
                    Não tem uma conta?<br>
                    <a class="btn btn-primary" href="{{ route('home') }}"> login</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
