@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
    @include('layouts.errors-and-messages')
    <!-- Default box -->
        @if(!$products->isEmpty())
            <div class="box">
                <div class="box-body">
                    <h2>Productos</h2>
                    @include('layouts.search', ['route' => route('admin.products.index')])
                    <div class="table-responsive">
                      @include('admin.shared.products')
                    </div>
                    {{ $products->links() }}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
            @else
            <p class="alert alert-warning">No tiene productos creados. <a href="{{ route('admin.products.create') }}">Create one!</a></p>
        @endif

    </section>
    <!-- /.content -->
@endsection
