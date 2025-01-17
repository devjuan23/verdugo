@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
    @include('layouts.errors-and-messages')
    <!-- Default box -->
        <div class="box">
            <div class="box-body">
                <h2>Direcciones</h2>
                <table class="table">
                    <tbody>
                    <tr>
                        <td class="col-md-1">Alias</td>
                        <td class="col-md-2">Dirección 1</td>
                        <td class="col-md-2">Dirección 2</td>
                        <td class="col-md-2">Ciudad</td>
                        <td class="col-md-2">Pais</td>
                        <td class="col-md-2">Código postal</td>
                        <td class="col-md-1">Estado</td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>{{ $address->alias }}</td>
                        <td>{{ $address->address_1 }}</td>
                        <td>{{ $address->address_2 }}</td>
                        <td>
                            @if(isset($address->city))
                                {{ $address->city }}
                            @endif
                        </td>
                        <td>{{ $address->country->name }}</td>
                        <td>{{ $address->zip }}</td>
                        <td>@include('layouts.status', ['status' => $address->status])</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="btn-group">
                    <a href="{{ route('admin.customers.show', $customerId) }}" class="btn btn-default btn-sm">Atras</a>
                </div>
            </div>
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection
