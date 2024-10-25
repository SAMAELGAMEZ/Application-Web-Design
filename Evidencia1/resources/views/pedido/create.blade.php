@extends('layouts.app') 
@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 
  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      New Pedido 
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
      <form method="post" action="{{ route('pedido.store') }}"> 
        @csrf 
        <div class="form-group"> 
          <label for="cliente">Cliente:</label> 
          <input type="text" class="form-control" name="cliente" /> 
        </div> 
        <div class="form-group"> 
          <label for="producto">Producto:</label> 
          <input type="text" class="form-control" name="producto" /> 
        </div> 
        <div class="form-group"> 
          <label for="precio">Precio:</label> 
          <input type="text" class="form-control" name="precio" /> 
        </div> 
        <div class="form-group"> 
          <label for="tracking">Tracking:</label> 
          <textarea rows="5" columns="5" class="form-control" name="tracking"></textarea> 
        </div> 
        <button type="submit" class="btn btn-primary">Save</button> 
        <a href="{{ route('pedido.index') }}" class="btn btn-primary">Return</a> 
      </form> 
    </div> 
  </div> 
@endsection