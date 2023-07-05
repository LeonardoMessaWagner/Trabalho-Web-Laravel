@extends('template.header')

@section('login-cad')
<link rel="stylesheet" href="{{URL::asset('assets/css/login.css')}}">
    <div class="body-background">
        <div class="container-fluid d-flex justify-content-center align-items-center h-100">

            <div class="card p-3 text-center py-4">
                <h4>Login</h4>
                <div>
                    <span>Nao possuo cadastro!</span>
                    <a href="{{route('cad')}}" class="text-decoration-none">Cadastrar-se</a>
                </div>

                <div class="mt-3 px-3">
                    <input class="form-control" placeholder="Email">
                </div>
                <div class="mt-3 px-3">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                </div>


                <div class="mt-3 d-grid px-3">
                    <button class="btn btn-primary btn-block btn-signup text-uppercase">
                        <span>Entrar</span>

                    </button>
                </div>


            </div>

        </div>
    </div>
@endsection
