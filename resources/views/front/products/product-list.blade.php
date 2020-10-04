<style>
.products{
height: 300px;
background-color: #1b1c20;
-webkit-box-shadow: 0px 13px 33px -25px rgba(0,0,0,0.46);
-moz-box-shadow: 0px 13px 33px -25px rgba(0,0,0,0.46);
box-shadow: 0px 13px 33px -25px rgba(0,0,0,0.46);
border: none;
}
.products-name{
    font-family: 'inter-medium';
    font-size: 14px;
}
.products-price{
    font-family: 'inter-medium';
    font-size: 14px;
    color: #ff722c;
}
.products-info{
    font-family: 'inter-light';
    font-size: 12px;
    text-align: center;
    color: #888;
    z-index: 1000;
}
.products-button{
    text-align: center;
}
.products-info:hover{
    display: none;    
}

.products-img{
    width: auto;
    height: 180px;
}

.thumbnail {
    background-color: #1b1c20;
    padding: 4px !important;
    border: 0px solid #ddd !important;
   
}

.carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
    display: block;
    max-width: 100%;
    height: 150px;
}

.thumbnail a>img, .thumbnail>img {
    margin-right: auto;
    margin-left: auto;
}

img {
    vertical-align: middle;
}

.color{
    background-color: #1b1c20;
}
</style>
@if(!empty($products) && !collect($products)->isEmpty())
    <div class="row">
        @foreach($products as $product)
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 text-center">
                <div class="thumbnail single-product">
                    <div class="product-overlay">
                        <div class="vcenter">
                            <div class="centrize">
                                <ul class="list-unstyled list-group">
                                    <li>
                                        <form action="{{ route('cart.store') }}" class="form-inline" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="quantity" value="1" />
                                            <input type="hidden" name="product" value="{{ $product->id }}">
                                            <button id="add-to-cart-btn" type="submit" class="btn btn-default product-btn  btn-sm" data-toggle="modal" data-target="#cart-modal"> <i class="fa fa-cart-plus"></i> Add al carrito</button>
                                        </form>
                                    </li>
                                    <li>  <button type="button" class="btn btn-default product-btn btn-sm" data-toggle="modal" data-target="#myModal_{{ $product->id }}"> <i class="fa fa-eye"></i> Ver detalles</button>
                                    <li>  <a class="btn btn-default btn-sm product-btn" href="{{ route('front.get.product', str_slug($product->slug)) }}"> <i class="fa fa-link"></i> Ver producto</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @if(isset($product->cover))
                        <img src="{{ asset("storage/$product->cover") }}" alt="{{ $product->name }}" class="img-bordered img-responsive">
                    @else
                        <img src="https://placehold.it/263x330" alt="{{ $product->name }}" class="img-bordered img-responsive" />
                    @endif
                    <div class="caption">
                        <span class="products-name text-white">{{ $product->name }}</span>
                        <span class="clearfix products-price">
                            {{ config('cart.currency') }}
                            @if(!is_null($product->attributes->where('default', 1)->first()))
                                @if(!is_null($product->attributes->where('default', 1)->first()->sale_price))
                                    {{ number_format($product->attributes->where('default', 1)->first()->sale_price, 2) }}
                                    <span class="text text-danger">Sale!</span>
                                @else
                                    {{ number_format($product->attributes->where('default', 1)->first()->price, 2) }}
                                @endif
                            @else
                                {{ number_format($product->price, 2) }}
                            @endif
                        </span>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal_{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content color">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                @include('layouts.front.product')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @if($products instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator)
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-left">{{ $products->links() }}</div>
                </div>
            </div>
        @endif
    </div>
@else
    <p class="alert alert-warning">No hay productos todavía.</p>
@endif
