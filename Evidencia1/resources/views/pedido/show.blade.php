@extends('layouts.app') 
@section('content') 
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    View Pedido
  </div>

  <div class="form-group">
    <img src="{{ $pedido->picture }}" class="img-fluid">
  </div>
  <div class="card-body">
    <div class="form-group">
      <label for="cliente">Cliente:</label>
      <input type="text" class="form-control" name="cliente" value="{{ $pedido->cliente }}" disabled />
    </div>
    <div class="form-group">
      <label for="producto">Producto:</label>
      <input type="text" class="form-control" name="producto" value="{{ $pedido->producto }}" disabled />
    </div>
    <div class="form-group">
      <label for="precio">Precio:</label>
      <input type="text" class="form-control" name="precio" value="{{ $pedido->precio }}" disabled />
    </div>
    <div class="form-group">
      <label for="tracking">Tracking:</label>
      <textarea rows="5" columns="5" class="form-control" name="tracking" disabled>{{ $pedido->tracking }}</textarea>
    </div>
    <a href="{{ route('pedido.edit', $pedido->id) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('pedido.index') }}" class="btn btn-primary">Index</a>
  </div>
</div>
@endsection