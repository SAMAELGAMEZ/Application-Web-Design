@extends('layouts.app')

@section('content')
    <div class="card uper">
        <div class="card-header">
            Edit Pedido
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('pedido.update', $pedido->id) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="cliente">Cliente:</label>
                    <input type="text" class="form-control" name="cliente" value="{{ $pedido->cliente }}" />
                </div>
                <div class="form-group">
                    <label for="producto">Producto:</label>
                    <input type="text" class="form-control" name="producto" value="{{ $pedido->producto }}" />
                </div>
                <div class="form-group">
                    <label for="precio">Precio:</label>
                    <input type="text" class="form-control" name="precio" value="{{ $pedido->precio }}" />
                </div>
                <div class="form-group">
                    <label for="tracking">Tracking:</label>
                    <input type="text" class="form-control" name="tracking" value="{{ $pedido->tracking }}" />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection