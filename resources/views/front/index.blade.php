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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
@endsection
@section('js')
<!-- Scripts propios de esta pagina -->
<!-- Owl Carousel -->
<script src="{{ asset('js/new/owl.carousel.min.js') }}"></script>
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
@include('layouts.front.home-slider')
<section>
    @foreach($categories as $key => $category)
    <div class="categories">
       <div class="categories-title">
           <span>{{ $category->name }}</span>
       </div>
       <hr class="line">
       <div class="categories-subtitle">
            <span>{!! $category->description !!}</span>
       </div>
       <!-- <div class="categories-subtitle">
           <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex optio vitae nulla earum!</span>
       </div> -->
       <div class="categories-item container-fluid">
        @include('front.products.product-list', ['products' => $category->products->where('status', 1)])
       </div>
    <div class="categories-all text-center">
       <a class="btn-outline text-white" href="{{ route('front.category.slug', $category->slug) }}">Ver mas categorias</a>
   </div>
   
    
        @if($key == 0)
    <div class="slogan">
       <div class="slogan-content text-center">
        <span class="slogan-title">FRUITMARKET</span>
        <br>
        <span class="slogan-subtitle">QUALITY ASSURANCE</span>
        </div>
    </div>
    @endif 
    
</div>
@endforeach
</section>

{{-- 
    <section>
<div class="slogan">
       <div class="slogan-content text-center">
        <span class="slogan-title">FRUITMARKET</span>
        <br>
        <span class="slogan-subtitle">QUALITY ASSURANCE</span>
        </div>
    </div>
</section>

--}}
























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
