<style media="screen">
/* CSS for this component */
</style>

@if(!empty($products) && !collect($products->isEmpty()))
<div class="row">
    @foreach($products as $product)
    <!-- Producto -->
    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 text-center">
        <div class="thumbnail">
             @if(isset($product->cover))
                <img src="{{ asset("storage/$product->cover") }}" alt="{{ $product->name }}" class="img-bordered img-responsive">
            @else
                <img src="https://placehold.it/263x330" alt="{{ $product->name }}" class="img-bordered img-responsive" />
                <!-- <img src="{{ asset('new/recursos/1.PNG') }}" alt="img"> -->
            @endif
            <div class="caption">
                <a href="#"><span class="products-name text-white">{{ $product->name }}</span></a>
                <span class="products-price clearfix">121,0 $</span>
                <span class="products-info">Lorem ipsum dolor sit amet, consectetur.</span>
            </div>
        </div>
    </div>
    @endforeach
</div>
@else
<p class="alert alert-warning">No hay productos todavía.</p>
@endif
