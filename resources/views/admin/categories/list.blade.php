@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
    @include('layouts.errors-and-messages')
    <!-- Default box -->
        @if($categories)
            <div class="box">
                <div class="box-body">
                    <h2>Categorias</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td class="col-md-3">Nombre</td>
                                    <td class="col-md-3">Cubrir</td>
                                    <td class="col-md-3">Estado</td>
                                    <td class="col-md-3">Acción</td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.categories.show', $category->id) }}">{{ $category->name }}</a></td>
                                    <td>
                                        @if(isset($category->cover))
                                            <img src="{{ asset("storage/$category->cover") }}" alt="" class="img-responsive">
                                        @endif
                                    </td>
                                    <td>@include('layouts.status', ['status' => $category->status])</td>
                                    <td>
                                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="post" class="form-horizontal">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="delete">
                                            <div class="btn-group">
                                                <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Editar</a>
                                                <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Eliminar</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $categories->links() }}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        @endif

    </section>
    <!-- /.content -->
@endsection
