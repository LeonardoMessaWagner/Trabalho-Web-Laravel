@extends('template.header')

@section('cad')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/cadastro.css') }}">
    <div class="body-background">
        @if ($errors->any())
            <div class="alert alert-danger rounded-0">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container-fluid d-flex justify-content-center align-items-center h-100">

            <div class="card p-3 text-center py-4">
                <h4>Criar conta</h4>
                <div>
                    <span>Já estou cadastrado!</span>
                    <a href="{{ route('home') }}" class="text-decoration-none">Login</a>
                </div>
                <form method="post" action="{{ route('cadastra_users_back_end') }}">
                    @csrf
                    <div class="input-group mt-3 px-3">
                        <input class="form-control" name="nome" placeholder="Nome*">
                    </div>

                    <div class="input-group px-3 mt-3">
                        <input type="text" class="form-control" name="email" placeholder="E-mail*">

                    </div>

                    <div class="input-group mt-3 px-3">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" name="matricula" placeholder="Matricula*">

                            </div>
                            <div class="col">
                                <input type="password" class="form-control" name="password" placeholder="Senha*">

                            </div>
                        </div>

                    </div>

                    <div class="input-group mt-3 px-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Sou ?</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="decisao">
                            <option value="aluno">Aluno</option>
                            <option value="funcionario">Funcionário</option>
                        </select>
                    </div>

                    <div class="mt-3 d-grid px-3">
                        <button type="submit" class="btn btn-primary btn-block btn-signup text-uppercase">
                            Cadastrar-se

                        </button>
                    </div>

                </form>


            </div>

        </div>
    </div>

@endsection
