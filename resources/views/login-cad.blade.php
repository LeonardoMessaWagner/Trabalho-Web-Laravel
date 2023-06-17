@extends('template.header')

@section('login-cad')
    <br>
    <div class="row">
        <link rel="stylesheet" href="{{ URL::asset('assets/css-login.css') }}" />
        <div class="col-8 m-auto">
            <div class="card">
                <div id="login-title" class="card-header  text-center">
                    Entrar
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Endereço de email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Seu email">
                            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com
                                ninguém.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Lembre-se de mim!</label>
                        </div>
                        <div class="text-center">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-muted text-center">
                    Não tem uma conta?
                    <a class="btn btn-primary"> Cadastre-se!</a>
                </div>
            </div>
        </div>
    </div>
@endsection
