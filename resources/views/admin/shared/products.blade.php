@if(!$products->isEmpty())
    <table class="table">
        <thead>
        <tr>
            <td> ID </td>
            <td> Nombre </td>
            <td> Cantidad </td>
            <td> Precio </td>
            <td> Estado </td>
            <td> Acciones </td>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>
                    @if($admin->hasPermission('view-product'))
                        <a href="{{ route('admin.products.show', $product->id) }}">{{ $product->name }}</a>
                    @else
                        {{ $product->name }}
                    @endif
                </td>
                <td>{{ $product->quantity }}</td>
                <td>{{ config('cart.currency') }} {{ $product->price }}</td>
                <td>@include('layouts.status', ['status' => $product->status])</td>
                <td>
                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                        <div class="btn-group">
                            @if($admin->hasPermission('update-product'))<a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Editar</a>@endif
                            @if($admin->hasPermission('delete-product'))<button onclick="return confirm('Estas seguro?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Eliminar</button>@endif
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif
