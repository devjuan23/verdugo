@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
    @include('layouts.errors-and-messages')
    <!-- Default box -->
        @if(!$permissions->isEmpty())
            <div class="box">
                <div class="box-body">
                    <h2>Permisos</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <td> Nombre para mostrar </td>
                                <td> Descripción </td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($permissions as $permission)
                            <tr>
                                <td>
                                    {{ $permission->display_name }}
                                </td>
                                <td>
                                    {!! $permission->description !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $permissions->links() }}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
            @else
            <p class="alert alert-warning">No se ha creado ningún permiso todavía.</p>
        @endif
    </section>
    <!-- /.content -->
@endsection
