@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">

    @include('layouts.errors-and-messages')
    <!-- Default box -->
        @if($province)
            <div class="box">
                <div class="box-body">
                    <h2>Provincia</h2>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td class="col-md-4">Nombre</td>
                            <td class="col-md-4">Estado</td>
                            <td class="col-md-4">Acciones</td>
                        </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>{{ $province->name }}</td>
                                <td>@include('layouts.status', ['status' => $province->status])</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.countries.provinces.edit', [$countryId, $province->id]) }}" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="box-body">
                    <h2>Ciudades / Municipios</h2>
                    @include('admin.shared.cities')
                </div>
            <!-- /.box-body -->
                <div class="box-footer">
                    <div class="btn-group">
                        <a href="{{ route('admin.countries.show', $countryId) }}" class="btn btn-default btn-sm">Atras</a>
                    </div>
                </div>
            </div>
            <!-- /.box -->
        @endif

    </section>
    <!-- /.content -->
@endsection
