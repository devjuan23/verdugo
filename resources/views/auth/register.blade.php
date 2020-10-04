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
    .label-custom{
        padding-bottom: 5px;
    }
</style>
<div class="container content">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top: 35px;">
            <h2>Registro</h2>    
            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="control-label label-custom">Nombre</label>
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus placeholder="Name">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label label-custom">Correo Electrónico</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label label-custom">Clave</label>
                    <input id="password" type="password" class="form-control" name="password" placeholder="xxxxx">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password-confirm" class=" control-label label-custom">Confirma Clave</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="xxxxx">
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-default btn-block btn-orange">
                            Registrar
                        </button>
                    </div>
                </div>
            </form>
                
            
        </div>
    </div>
</div>
@endsection
