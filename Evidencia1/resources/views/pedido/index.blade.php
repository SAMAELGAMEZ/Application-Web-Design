@extends('layouts.app') 
@section('content') 
  <style> 
    .margin { 
      margin-top: 40px; 
    } 
  </style> 
  <div class="margin"> 
    @if (session()->get('success')) 
      <div class="alert alert-success"> 
        {{ session()->get('success') }} 
      </div><br /> 
    @endif 
    <div class="row mb-3"> 
      <a class="btn btn-primary" href="{{ route('pedido.create') }}">Add</a> 
    </div> 

    <table class="table table-striped"> 
      <thead> 
        <tr> 
          <th>No</th> 
          <th>Cliente</th> 
          <th>Producto</th> 
          <th>Precio</th> 
          <th>Tracking</th> 
          <th width="80px"></th> 
          <th width="80px"></th> 
        </tr> 
      </thead> 
      <tbody> 
        @foreach ($pedidos as $pedido) 
          <tr> 
            <td><a href="{{ route('pedido.show', $pedido->id) }}">{{ $pedido->id }}</a></td> 
            <td><a href="{{ route('pedido.show', $pedido->id) }}">{{ $pedido->cliente }}</a></td> 
            <td><a href="{{ route('pedido.show', $pedido->id) }}">{{ $pedido->producto }}</a></td> 
            <td><a href="{{ route('pedido.show', $pedido->id) }}">{{ $pedido->precio }}</a></td> 
            <td><a href="{{ route('pedido.show', $pedido->id) }}">{{ $pedido->tracking }}</a></td> 
            <td><a href="{{ route('pedido.edit', $pedido->id) }}" class="btn btn-sm btn-primary">Edit</a></td> 
            <td> 
              <form action="{{ route('pedido.destroy', $pedido->id) }}" method="post"> 
                @csrf 
                @method('DELETE') 
                <button class="btn btn-sm btn-danger" type="submit">Delete</button> 
              </form> 
            </td> 
          </tr> 
        @endforeach 
      </tbody> 
    </table> 
  </div> 
@endsection