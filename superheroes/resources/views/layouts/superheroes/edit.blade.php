@extends('layouts.app') 

@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 
  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      Edit Superhero 
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
      <form method="post" action="{{ route('superheroes.update', $superheroe->id) }}"> 
        @csrf 
        @method('PATCH') 
        <div class="form-group"> 
          <label for="name">Superhero Name:</label> 
          <input type="text" class="form-control" name="name" value="{{ $superheroe->name }}" /> 
        </div> 
        <div class="form-group"> 
          <label for="real_name">Real Name:</label> 
          <input type="text" class="form-control" name="real_name" value="{{ $superheroe->real_name }}" /> 
        </div> 
        <div class="form-group"> 
          <label for="universe">Universe:</label> 
          <input type="text" class="form-control" name="universe" value="{{ $superheroe->universe }}" /> 
        </div> 
        <button type="submit" class="btn btn-primary">Save</button> 
        <a href="{{ route('superheroes.index') }}" class="btn btn-primary">Return</a> 
      </form> 
    </div> 
  </div> 
@endsection