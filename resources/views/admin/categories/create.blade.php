@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        @include('layouts.errors-and-messages')
        <div class="box">
            <form action="{{ route('admin.categories.store') }}" method="post" class="form" enctype="multipart/form-data">
                <div class="box-body">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="parent">Categoría principal </label>
                        <select name="parent" id="parent" class="form-control select2">
                            <option value="">-- Seleccione --</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Nombre <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" placeholder="Nombre" class="form-control" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción </label>
                        <textarea class="form-control ckeditor" name="description" id="description" rows="5" placeholder="Descripción">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="cover">Cubrir </label>
                        <input type="file" name="cover" id="cover" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="status">Estado </label>
                        <select name="status" id="status" class="form-control">
                            <option value="0">Inhabilitar</option>
                            <option value="1">Habilitar</option>
                        </select>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="btn-group">
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-default">Atras</a>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
