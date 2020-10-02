@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">

    @include('layouts.errors-and-messages')
    <!-- Default box -->
        @if($couriers)
            <div class="box">
                <div class="box-body">
                    <h2> <i class="fa fa-truck"></i> Mensajeros</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>

                                    <td class="col-md-2">Nombre</td>
                                    <td class="col-md-2">Descripción</td>
                                    <td class="col-md-2">URL</td>
                                    <td class="col-md-1">¿Es gratis?</td>
                                    <td class="col-md-1">Costo</td>
                                    <td class="col-md-1">Estado</td>
                                    <td class="col-md-3">Acciones</td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($couriers as $courier)
                                <tr>
                                    <td>{{ $courier->name }}</td>
                                    <td>{{ str_limit($courier->description, 100, ' ...') }}</td>
                                    <td>{{ $courier->url }}</td>
                                    <td>
                                        @include('layouts.status', ['status' => $courier->is_free])
                                    </td>
                                    <td>
                                        {{config('cart.currency')}} {{ $courier->cost }}
                                    </td>
                                    <td>@include('layouts.status', ['status' => $courier->status])</td>
                                    <td>
                                        <form action="{{ route('admin.couriers.destroy', $courier->id) }}" method="post" class="form-horizontal">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="delete">
                                            <div class="btn-group">
                                                <a href="{{ route('admin.couriers.edit', $courier->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Editar</a>
                                                <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Eliminar</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        @endif

    </section>
    <!-- /.content -->
@endsection
