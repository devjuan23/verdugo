@extends('layouts.front.app')

@section('content')
    <style>
        .btn-orange{
            background-color: #ff722c;
            border: 1px solid #ff722c;
            color: #fff;
        }
        .btn-orange:hover{
            background-color: #fff;
            border: 1px solid #ff722c;
            color: #ff722c;
        }
    </style>
    <!-- Main content -->
    <section class="container content">
        <div class="col-md-12">@include('layouts.errors-and-messages')</div>
        <div class="col-md-4 col-md-offset-4" style="margin-top: 35px;">
            <h2>Iniciar Sesion</h2>
            <form action="{{ route('login') }}" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Clave</label>
                    <input type="password" name="password" id="password" value="" class="form-control" placeholder="xxxxx">
                </div>
                <div class="row">
                    <button class="btn btn-default btn-block btn-orange" type="submit">Entrar</button>
                </div>
            </form>
            <div class="row">
                <hr>
                <a href="{{route('password.request')}}">Olvidé mi Clave</a><br>
                <a href="{{route('register')}}" class="text-center">No posees acceso? Registrarte Aqui.</a>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
