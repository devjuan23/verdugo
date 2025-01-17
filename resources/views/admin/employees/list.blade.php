@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">

        @include('layouts.errors-and-messages')
        <!-- Default box -->
        @if($employees)
        <div class="box">
            <div class="box-body">
                <h2>Usuarios</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td class="col-md-1">ID</td>
                                <td class="col-md-3">Nombre</td>
                                <td class="col-md-3">Email</td>
                                <td class="col-md-1">Estado</td>
                                <td class="col-md-4">Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>@include('layouts.status', ['status' => $employee->status])</td>
                                <td>
                                    <form action="{{ route('admin.employees.destroy', $employee->id) }}" method="post" class="form-horizontal">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="delete">
                                        <div class="btn-group">
                                            <a href="{{ route('admin.employees.show', $employee->id) }}" class="btn btn-default btn-sm"><i class="fa fa-eye"></i> Ver</a>
                                            <a href="{{ route('admin.employees.edit', $employee->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Editar</a>
                                            <button onclick="return confirm('Estas seguro?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Eliminar</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                {{ $employees->links() }}
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        @endif

    </section>
    <!-- /.content -->
@endsection
