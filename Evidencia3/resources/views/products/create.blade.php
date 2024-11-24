@extends('layouts.app')

@section('content')
  <style>
    .uper {
      margin-top: 40px;
    }
  </style>
  <div class="card uper">
    <div class="card-header">
      Nuevo Producto
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
      <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="picture" class="form-label">Imagen del Producto</label>
          <input class="form-control" type="file" name="picture">
        </div>
        <div class="form-group">
          <label for="cliente">Cliente:</label>
          <input type="text" class="form-control" name="cliente">
        </div>
        <div class="form-group">
          <label for="producto">Producto:</label>
          <input type="text" class="form-control" name="producto">
        </div>
        <div class="form-group">
          <label for="precio">Precio:</label>
          <input type="text" class="form-control" name="precio">
        </div>
        <div class="form-group">
          <label for="tracking">Tracking:</label>
          <textarea rows="2" class="form-control" name="tracking"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Regresar</a>
      </form>
    </div>
  </div>
@endsection