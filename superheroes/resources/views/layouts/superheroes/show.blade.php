@extends('layouts.app') 

@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 
  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      View Superhero 
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

      <div class="form-group"> 
        <label for="name">Superhero Name:</label> 
        <input type="text" class="form-control" name="name" value="{{ $superheroe->name }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="real_name">Real Name:</label> 
        <input type="text" class="form-control" name="real_name" value="{{ $superheroe->real_name }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="universe">Universe:</label> 
        <input type="text" class="form-control" name="universe" value="{{ $superheroe->universe }}" disabled /> 
      </div> 
      <a href="{{ route('superheroes.edit', $superheroe->id) }}" class="btn btn-primary">Edit</a> 
      <a href="{{ route('superheroes.index') }}" class="btn btn-primary">Index</a> 
    </div> 
  </div> 
@endsection