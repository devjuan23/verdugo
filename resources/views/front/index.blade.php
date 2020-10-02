@extends('layouts.front.app')
@section('og')
<meta property="og:type" content="home"/>
<meta property="og:title" content="{{ config('app.name') }}"/>
<meta property="og:description" content="{{ config('app.name') }}"/>
@endsection
@section('css')
<!-- Estilos propios de esta pagina -->
<link href="{{ asset('css/new/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/new/main.css') }}" rel="stylesheet">
<link href="{{ asset('fonts/new/font.css') }}" rel="stylesheet">
@endsection
@section('js')
<!-- Scripts propios de esta pagina -->
<script src="{{ asset('js/new/bootstrap.min.js') }}"></script>
@endsection
@section('content')
<div class="hero">
    <div class="main d-flex justify-content-center pb-5">
        <div class="center d-flex align-items-center align-content-center justify-content-center flex-column">
            <div class="title text-center pb-1">
                <span class="display-3 text-white">FRUIT MARKET</span>
            </div>
            <div class="sub-title text-center pb-4 text-white">
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit!</span>
            </div>
            <div>
                <input type="text">
            </div>
        </div>
    </div>
</div>

<section>
   <div class="categories mt-5 d-flex flex-column justify-content-center align-items-center">
       <div class="categories-title">
           <span>Categories</span>
       </div>
       <div class="categories-subtitle">
           <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex optio vitae nulla earum!</span>
       </div>
       <div class="categories-item container-fluid">
        <div class="row">
            <div class="col-md-4 col-lg-3 col-sm-6 mt-4">
                <div class="card products">
                    <img src="{{ asset('new/recursos/3.PNG') }}" class="card-img-top products-img" alt="img-products">
                    <div class="card-body d-flex flex-column align-self-center justify-content-start align-items-center">
                        <a href="#"><span class="products-name text-white pb-1">Name products</span></a>
                        <span class="products-price pb-1">121,0 $</span>
                        <span class="products-info">Lorem ipsum dolor sit amet, consectetur.</span>
                        <!-- <button type="button" class="btn btn-sm btn-success products-button">Success</button> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6 mt-4">
                <div class="card products">
                    <img src="{{ asset('new/recursos/1.PNG') }}" class="card-img-top products-img" alt="img-products">
                    <div class="card-body d-flex flex-column align-self-center justify-content-start align-items-center">
                        <a href="#"><span class="products-name text-white pb-1">Name products</span></a>
                        <span class="products-price pb-1">121,0 $</span>
                        <span class="products-info">Lorem ipsum dolor sit amet, consectetur.</span>
                        <!-- <button type="button" class="btn btn-sm btn-success">Success</button> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6 mt-4">
                <div class="card products">
                    <img src="{{ asset('new/recursos/2.PNG') }}" class="card-img-top products-img" alt="img-products">
                    <div class="card-body d-flex flex-column align-self-center justify-content-start align-items-center">
                        <a href="#"><span class="products-name text-white pb-1">Name products</span></a>
                        <span class="products-price pb-1">121,0 $</span>
                        <span class="products-info">Lorem ipsum dolor sit amet, consectetur.</span>
                        <!-- <button type="button" class="btn btn-sm btn-success">Success</button> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6 mt-4">
                <div class="card products">
                    <img src="{{ asset('new/recursos/5.PNG') }}" class="card-img-top products-img" alt="img-products">
                    <div class="card-body d-flex flex-column align-self-center justify-content-start align-items-center">
                        <a href="#"><span class="products-name text-white pb-1">Name products</span></a>
                        <span class="products-price pb-1">121,0 $</span>
                        <span class="products-info">Lorem ipsum dolor sit amet, consectetur.</span>
                        <!-- <button type="button" class="btn btn-sm btn-success">Success</button> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6 mt-4">
                <div class="card products">
                    <img src="{{ asset('new/recursos/2.PNG') }}" class="card-img-top products-img" alt="img-products">
                    <div class="card-body d-flex flex-column align-self-center justify-content-start align-items-center">
                        <a href="#"><span class="products-name text-white pb-1">Name products</span></a>
                        <span class="products-price pb-1">121,0 $</span>
                        <span class="products-info">Lorem ipsum dolor sit amet, consectetur.</span>
                        <!-- <button type="button" class="btn btn-sm btn-success">Success</button> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6 mt-4">
                <div class="card products">
                    <img src="{{ asset('new/recursos/6.PNG') }}" class="card-img-top products-img" alt="img-products">
                    <div class="card-body d-flex flex-column align-self-center justify-content-start align-items-center">
                        <a href="#"><span class="products-name text-white pb-1">Name products</span></a>
                        <span class="products-price pb-1">121,0 $</span>
                        <span class="products-info">Lorem ipsum dolor sit amet, consectetur.</span>
                        <!-- <button type="button" class="btn btn-sm btn-success">Success</button> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6 mt-4">
                <div class="card products">
                    <img src="{{ asset('new/recursos/2.PNG') }}" class="card-img-top products-img" alt="img-products">
                    <div class="card-body d-flex flex-column align-self-center justify-content-start align-items-center">
                        <a href="#"><span class="products-name text-white pb-1">Name products</span></a>
                        <span class="products-price pb-1">121,0 $</span>
                        <span class="products-info">Lorem ipsum dolor sit amet, consectetur.</span>
                        <!-- <button type="button" class="btn btn-sm btn-success">Success</button> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6 mt-4">
                <div class="card products">
                    <img src="{{ asset('new/recursos/1.PNG') }}" class="card-img-top products-img" alt="img-products">
                    <div class="card-body d-flex flex-column align-self-center justify-content-start align-items-center">
                        <a href="#"><span class="products-name text-white pb-1">Name products</span></a>
                        <span class="products-price pb-1">121,0 $</span>
                        <span class="products-info">Lorem ipsum dolor sit amet, consectetur.</span>
                        <!-- <button type="button" class="btn btn-sm btn-success">Success</button> -->
                    </div>
                </div>
            </div>               
        </div>
    </div>
    <div class="categories-all d-flex justify-content-center mt-5">
       <button type="button" class="btn btn-outline-dark text-white">Ver todos</button>
   </div>
</div>
</section>
<section>
   <div class="slogan mt-5 d-flex justify-content-center align-items-center">
       <div class="slogan-content d-flex flex-column align-items-center">
        <span class="slogan-title">FRUITMARKET</span>
        <span class="slogan-subtitle">QUALITY ASSURANCE</span>
    </div>
</div>
</section>
<section class="pb-5">
   <div class="categories mt-5 d-flex flex-column justify-content-center align-items-center">
       <div class="categories-title">
           <span>Categories</span>
       </div>
       <div class="categories-subtitle">
           <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex optio vitae nulla earum!</span>
       </div>
       <div class="categories-item container-fluid">
        <div class="row">
            <div class="col-md-4 col-lg-3 col-sm-6 mt-4">
                <div class="card products">
                    <img src="{{ asset('new/recursos/3.PNG') }}" class="card-img-top products-img" alt="img-products">
                    <div class="card-body d-flex flex-column align-self-start justify-content-start align-items-center">
                        <span class="products-name text-white pb-1">Name products</span>
                        <span class="products-price pb-1">121,0 $</span>
                        <span class="products-info">Lorem ipsum dolor sit amet, consectetur.</span>
                        <!-- <button type="button" class="btn btn-sm btn-success">Success</button> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6 mt-4">
                <div class="card products">
                    <img src="{{ asset('new/recursos/1.PNG') }}" class="card-img-top products-img" alt="img-products">
                    <div class="card-body d-flex flex-column align-self-start justify-content-start align-items-center">
                        <span class="products-name text-white pb-1">Name products</span>
                        <span class="products-price pb-1">121,0 $</span>
                        <span class="products-info">Lorem ipsum dolor sit amet, consectetur.</span>
                        <!-- <button type="button" class="btn btn-sm btn-success">Success</button> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6 mt-4">
                <div class="card products">
                    <img src="{{ asset('new/recursos/2.PNG') }}" class="card-img-top products-img" alt="img-products">
                    <div class="card-body d-flex flex-column align-self-start justify-content-start align-items-center">
                        <span class="products-name text-white pb-1">Name products</span>
                        <span class="products-price pb-1">121,0 $</span>
                        <span class="products-info">Lorem ipsum dolor sit amet, consectetur.</span>
                        <!-- <button type="button" class="btn btn-sm btn-success">Success</button> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6 mt-4">
                <div class="card products">
                    <img src="{{ asset('new/recursos/5.PNG') }}" class="card-img-top products-img" alt="img-products">
                    <div class="card-body d-flex flex-column align-self-start justify-content-start align-items-center">
                        <span class="products-name text-white pb-1">Name products</span>
                        <span class="products-price pb-1">121,0 $</span>
                        <span class="products-info">Lorem ipsum dolor sit amet, consectetur.</span>
                        <!-- <button type="button" class="btn btn-sm btn-success">Success</button> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6 mt-4">
                <div class="card products">
                    <img src="{{ asset('new/recursos/2.PNG') }}" class="card-img-top products-img" alt="img-products">
                    <div class="card-body d-flex flex-column align-self-start justify-content-start align-items-center">
                        <span class="products-name text-white pb-1">Name products</span>
                        <span class="products-price pb-1">121,0 $</span>
                        <span class="products-info">Lorem ipsum dolor sit amet, consectetur.</span>
                        <!-- <button type="button" class="btn btn-sm btn-success">Success</button> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6 mt-4">
                <div class="card products">
                    <img src="{{ asset('new/recursos/6.PNG') }}" class="card-img-top products-img" alt="img-products">
                    <div class="card-body d-flex flex-column align-self-start justify-content-start align-items-center">
                        <span class="products-name text-white pb-1">Name products</span>
                        <span class="products-price pb-1">121,0 $</span>
                        <span class="products-info">Lorem ipsum dolor sit amet, consectetur.</span>
                        <!-- <button type="button" class="btn btn-sm btn-success">Success</button> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6 mt-4">
                <div class="card products">
                    <img src="{{ asset('new/recursos/2.PNG') }}" class="card-img-top products-img" alt="img-products">
                    <div class="card-body d-flex flex-column align-self-start justify-content-start align-items-center">
                        <span class="products-name text-white pb-1">Name products</span>
                        <span class="products-price pb-1">121,0 $</span>
                        <span class="products-info">Lorem ipsum dolor sit amet, consectetur.</span>
                        <!-- <button type="button" class="btn btn-sm btn-success">Success</button> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-sm-6 mt-4">
                <div class="card products">
                    <img src="{{ asset('new/recursos/1.PNG') }}" class="card-img-top products-img" alt="img-products">
                    <div class="card-body d-flex flex-column align-self-start justify-content-start align-items-center">
                        <span class="products-name text-white pb-1">Name products</span>
                        <span class="products-price pb-1">121,0 $</span>
                        <span class="products-info">Lorem ipsum dolor sit amet, consectetur.</span>
                        <!-- <button type="button" class="btn btn-sm btn-success">Success</button> -->
                    </div>
                </div>
            </div>               
        </div>
    </div>
    <div class="categories-all d-flex justify-content-center mt-5">
        <button type="button" class="btn btn-outline-dark text-white">Ver todos</button>
    </div>
</div>
</section>






















<!-- CODIGO DE ESTA VISTA ANTERIOR -->
{{--
    @include('layouts.front.home-slider')

    @foreach($categories as $key => $category)
    <section class="new-product t100 home">
        <div class="container">
            <div class="section-title b50">
                <h2 style="margin-top: 2%">{{ $category->name }}</h2>
            </div><br>
            @include('front.products.product-list', ['products' => $category->products->where('status', 1)])
            <div id="browse-all-btn"> <a class="btn btn-default browse-all-btn" href="{{ route('front.category.slug', $category->slug) }}" role="button">ver mas productos</a></div>
        </div>
    </section>
    @endforeach

    <hr />
    --}}
    @endsection
