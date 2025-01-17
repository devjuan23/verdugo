@extends('layouts.front.app')

@section('content')
    
    <!-- Main content -->
    <section class="container content">
        <div class="row">
            <div class="col-md-12">@include('layouts.errors-and-messages')</div>
            <div class="col-md-5">
                <h2>Login to your account</h2>
                <form action="{{ route('cart.login') }}" method="post" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email" class="control-label">Correo</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password">Clave</label>
                        <input type="password" name="password" id="password" value="" class="form-control" placeholder="xxxxx">
                    </div>
                    <div class="row">
                        <button class="btn btn-primary btn-block btn-custom" type="submit">Entrar</button>
                    </div>
                </form>
                <div class="row"><hr>
                    <a href="#">Olvide mi clave</a><br>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-1">
                <h2>Registrarse</h2>
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="control-label">Nombre</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">Correo</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label">Clave</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="control-label">Confirmar Clave</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
