@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">

        @include('layouts.errors-and-messages')
        <!-- Default box -->
        <div class="box">
            <form action="{{ route('admin.payment-methods.update', $paymentMethod->id) }}" method="post">
            <div class="box-body">
                <h2> <i class="fa fa-flask"></i> Método de pago</h2>
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ $paymentMethod->name ?: old('name') }}" placeholder="Nombre" autofocus>
                </div>
                <div class="form-group">
                    <label for="description">Descripcion</label>
                    <textarea name="description" id="description" rows="10" class="form-control">{{ $paymentMethod->description ?: old('description') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="account_id">ID de la cuenta</label>
                    <input class="form-control" type="text" name="account_id" id="account_id" value="{{ $paymentMethod->account_id ?: old('account_id') }}" placeholder="Account ID">
                </div>
                <div class="form-group">
                    <label for="client_id">Cliente ID</label>
                    <input class="form-control" type="text" name="client_id" id="client_id" value="{{ $paymentMethod->client_id ?: old('client_id') }}" placeholder="Cliente ID">
                </div>
                <div class="form-group">
                    <label for="client_secret">Secreto del cliente</label>
                    <input class="form-control" type="text" name="client_secret" id="client_secret" value="{{ $paymentMethod->client_secret ?: old('client_secret') }}" placeholder="Secreto del cliente">
                </div>
                <div class="form-group">
                    <label for="api_url">Payment URL</label>
                    <div class="input-group">
                        <span class="input-group-addon">http://</span>
                        <input class="form-control" type="text" name="api_url" id="api_url" value="{{ $paymentMethod->api_url ?: old('api_url') }}" placeholder="URL para ir a la orden de procesamiento">
                    </div>
                </div>
                <div class="form-group">
                    <label for="redirect_url">Redirect URL</label>
                    <div class="input-group">
                        <span class="input-group-addon">http://</span>
                        <input class="form-control" type="text" name="redirect_url" id="redirect_url" value="{{ $paymentMethod->redirect_url ?: old('redirect_url') }}" placeholder="URL para ir después del pago">
                    </div>
                </div>
                <div class="form-group">
                    <label for="cancel_url">Cancel URL</label>
                    <div class="input-group">
                        <span class="input-group-addon">http://</span>
                        <input class="form-control" type="text" name="cancel_url" id="cancel_url" value="{{ $paymentMethod->cancel_url ?: old('cancel_url') }}" placeholder="URL para ir después de que el cliente cancele el pago">
                    </div>
                </div>
                <div class="form-group">
                    <label for="failed_url">Failed URL</label>
                    <div class="input-group">
                        <span class="input-group-addon">http://</span>
                        <input class="form-control" type="text" name="failed_url" id="failed_url" value="{{ $paymentMethod->failed_url ?: old('failed_url') }}" placeholder="URL para ir cuando el pago falló">
                    </div>
                </div>
                @include('admin.shared.status-select', ['status' => $paymentMethod->status])
            </div>
            <!-- /.box-body -->
                <div class="box-footer btn-group">
                    <a href="{{ route('admin.payment-methods.index') }}" class="btn btn-default">Atras</a>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection
