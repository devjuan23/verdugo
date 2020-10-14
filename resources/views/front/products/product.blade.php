@extends('layouts.front.app')

@section('og')
    <meta property="og:type" content="product"/>
    <meta property="og:title" content="{{ $product->name }}"/>
    <meta property="og:description" content="{{ strip_tags($product->description) }}"/>
    @if(!is_null($product->cover))
        <meta property="og:image" content="{{ asset("storage/$product->cover") }}"/>
    @endif
@endsection

@section('content')
    <div class="container product">
        <div class="row pt-2">
            <div class="col-md-12">
                <ol class="breadcrumb bg-transparent">
                    <li><a href="{{ route('home') }}" class="text-orange"> <i class="fa fa-home"></i> Home</a></li>
                    @if(isset($category))
                    <li><a href="{{ route('front.category.slug', $category->slug) }}">{{ $category->name }}</a></li>
                    
                    @endif
                    <li class="active">Producto</li>
                </ol>
            </div>
        </div>
        @include('layouts.front.product')
    </div>
@endsection
