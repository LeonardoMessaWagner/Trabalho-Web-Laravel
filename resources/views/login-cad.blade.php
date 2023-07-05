@extends('template.header')

@section('login-cad')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/login.css') }}">
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
                <h4>Login</h4>
                <div>
                    <span>Nao possuo cadastro!</span>
                    <a href="{{ route('cad') }}" class="text-decoration-none">Cadastrar-se</a>
                </div>
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="mt-3 px-3">
                        <input name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="mt-3 px-3">
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                    </div>


                    <div class="mt-3 d-grid px-3">
                        <button class="btn btn-primary btn-block btn-signup text-uppercase">
                            <span>Entrar</span>

                        </button>
                    </div>
                </form>


            </div>

        </div>
    </div>
@endsection
