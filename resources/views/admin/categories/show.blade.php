@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">

    @include('layouts.errors-and-messages')
    <!-- Default box -->
        @if($category)
            <div class="box">
                <div class="box-body">
                    <h2>Categorias</h2>
                    <table class="table">
                        <thead>
                        <tr>
                            <td class="col-md-4">Nombre</td>
                            <td class="col-md-4">Descripción</td>
                            <td class="col-md-4">Cubrir</td>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    @if(isset($category->cover))
                                        <img src="{{asset("storage/$category->cover")}}" alt="category image" class="img-thumbnail">
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @if(!$categories->isEmpty())
                <hr>
                    <div class="box-body">
                        <h2>Sub Categorias</h2>
                        <table class="table">
                            <thead>
                            <tr>
                                <td class="col-md-3">Nombre</td>
                                <td class="col-md-3">Descripción</td>
                                <td class="col-md-3">Cubrir</td>
                                <td class="col-md-3">Acción</td>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $cat)
                                    <tr>
                                        <td><a href="{{route('admin.categories.show', $cat->id)}}">{{ $cat->name }}</a></td>
                                        <td>{{ $cat->description }}</td>
                                        <td>@if(isset($cat->cover))<img src="{{asset("storage/$cat->cover")}}" alt="category image" class="img-thumbnail">@endif</td>
                                        <td><a class="btn btn-primary" href="{{route('admin.categories.edit', $cat->id)}}"><i class="fa fa-edit"></i> Editar</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
                @if(!$products->isEmpty())
                    <div class="box-body">
                        <h2>Productos</h2>
                        @include('admin.shared.products', ['products' => $products])
                    </div>
                @endif
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="btn-group">
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-default btn-sm">Atras</a>
                    </div>
                </div>
            </div>
            <!-- /.box -->
        @endif

    </section>
    <!-- /.content -->
@endsection
