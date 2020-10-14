@extends('layouts.front.app')

@section('og')
    <meta property="og:type" content="category"/>
    <meta property="og:title" content="{{ $category->name }}"/>
    <meta property="og:description" content="{{ $category->description }}"/>
    @if(!is_null($category->cover))
        <meta property="og:image" content="{{ asset("storage/$category->cover") }}"/>
    @endif
@endsection

@section('content')
    <style>
        .categories-item{
        width: 80%;
        margin-top: 30px;
        }
        .subtitle>p{
            font-size:14px;
            color: #c1c1c1;
            font-family:'inter-light';
            line-height: 20px;
            text-align: center;
        }

        @media (max-width: 575.98px) {
        .categories-item{
            width: 100%;
            margin-top: 30px;
        }
        }
    </style>
    <div class="container">
      
        <div class="row pt-2">
            <div class="category-top col-md-12 text-center pt-2">
                <h2 class="text-orange">{{ $category->name }}</h2>
                <span class="subtitle">{!! $category->description !!}</span>
            </div>
        </div>
        
        <div class="col-md-3 col-sm-12 pt-2">
            @include('front.categories.sidebar-category')
        </div>
        <div class="new-product t100 home">
            <div class="row">
                <div class="category-image">
                    @if(isset($category->cover))
                        <img src="{{ asset("storage/$category->cover") }}" alt="{{ $category->name }}" class="category-images img-responsive" />
                    @else
                        <img src="https://placehold.it/1200x200" alt="{{ $category->cover }}" class="img-responsive" />
                    @endif
                </div>
            </div>
            <hr>
            <div class="categories-item container">
                @include('front.products.product-list', ['products' => $products])
            </div>
        </div>
    </div>
@endsection
