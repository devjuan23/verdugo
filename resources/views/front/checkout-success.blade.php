@extends('layouts.front.app')

@section('content')
    <div class="container product-in-cart-list">
        <div class="row">
            <div class="col-md-12">
                <hr>
                <p class="alert alert-success">Su pedido esta en camino! <a href="{{ route('home') }}">Mostrar más</a></p>
            </div>
        </div>
    </div>
@endsection