@extends('layouts.front.app')

@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-md-4 col-md-offset-4" style="margin-top: 35px;">
                <div class="col-md-offset-1">
                    <h2>Recuperar Clave</h2>
                </div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-md-10 col-md-offset-1">
                            <label for="email" class="control-label">Correo</label>
                        </div>

                        <div class="col-md-10 col-md-offset-1 pt-2">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-4">
                            <button type="submit" class="btn btn-orange">
                                Enviar link
                            </button>
                        </div>
                    </div>
                </form>

            
        </div>
        
    </div>
</div>
@endsection
