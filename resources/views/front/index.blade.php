@extends('layouts.front.app')
@section('og')
<meta property="og:type" content="home"/>
<meta property="og:title" content="{{ config('app.name') }}"/>
<meta property="og:description" content="{{ config('app.name') }}"/>
@endsection
@section('css')
<!-- Estilos propios de esta pagina -->
<!-- <link href="{{ asset('css/new/bootstrap.min.css') }}" rel="stylesheet"> -->
<link href="{{ asset('css/new/main.css') }}" rel="stylesheet">
<link href="{{ asset('fonts/new/font.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
@endsection
@section('js')
<!-- Scripts propios de esta pagina -->
<!-- <script src="{{ asset('js/new/bootstrap.min.js') }}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Custom Javascript -->
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                items:1,
                loop:true,
                nav:true,
                dots:true,
                autoplay:true,
                autoplaySpeed:1000,
                smartSpeed:1500,
                autoplayHoverPause:true
            });
        });
    </script>
@endsection
@section('content')
<div class="hero">
<div class="owl-carousel owl-theme" id="owl-demo">
        <div class="item">
            <img src="{{ asset('new/slogan.jpg') }}" alt="The Last of us">
            <div class="slide-content">
                <h1>Ely</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
              
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('new/slogan.jpg') }}" alt="GTA V">
            <div class="slide-content">
                <h1>pedro</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
                
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('new/slogan.jpg') }}" alt="Mirror Edge">
            <div class="slide-content">
                <h1>jose</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
                
            </div>
        </div>
    </div>
</div>

<section>
   <div class="categories">
       <div class="categories-title">
           <span>Categories</span>
       </div>
       <hr class="line">
       <div class="categories-subtitle">
           <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex optio vitae nulla earum!</span>
       </div>
       <div class="categories-item container-fluid">
        <div class="row">
            <!-- Producto -->
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 text-center">
                <div class="thumbnail">
                    <img src="{{ asset('new/recursos/1.PNG') }}" alt="img">
                    <div class="caption">
                        <a href="#"><span class="products-name text-white">Name products</span></a>
                        <span class="products-price clearfix">121,0 $</span>
                        <span class="products-info">Lorem ipsum dolor sit amet, consectetur.</span>              
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <div class="categories-all text-center">
       <button type="button" class="btn-outline text-white">Ver todos</button>
   </div>
</div>
</section>
<section>
   <div class="slogan">
       <div class="slogan-content text-center">
            <span class="slogan-title clearfix">FRUITMARKET</span>
            <span class="slogan-subtitle">QUALITY ASSURANCE</span>
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
