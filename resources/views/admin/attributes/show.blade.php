@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
    @include('layouts.errors-and-messages')
    <!-- Default box -->
    <div class="box">
        <div class="box-body">
            <h2>Atributos</h2>
            <table class="table">
                <thead>
                    <tr>
                        <td>Nombre del Atributo</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $attribute->name }}</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            @if(!$values->isEmpty())
                <div class="table-responsive">
                    <table class="table table-striped" style="margin-left: 35px">
                        <thead>
                            <tr>
                                <td>Valores del Atributo</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($values as $item)
                                <tr>
                                    <td>{{ $item->value }}</td>
                                    <td>
                                        <form action="{{ route('admin.attributes.values.destroy', [$attribute->id, $item->id]) }}" class="form-horizontal" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="delete">
                                            <div class="btn-group">
                                                <button onclick="return confirm('Estas seguro?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Eliminar</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <div class="btn-group">
                <a href="{{ route('admin.attributes.values.create', $attribute->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Agregar Valores</a>
                <a href="{{ route('admin.attributes.index') }}" class="btn btn-default btn-sm">Atras</a>
            </div>
        </div>
    </div>
    <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection
