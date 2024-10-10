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
        <label for="real_name">Real Name:</label> 
        <input type="text" class="form-control" name="real_name" value="{{ $superhero->real_name }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="hero_name">Hero Name:</label> 
        <input type="text" class="form-control" name="hero_name" value="{{ $superhero->hero_name }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="additional_info">Additional Information:</label> 
        <textarea rows="5" columns="5" class="form-control" name="additional_info" disabled>{{ $superhero->additional_info }}</textarea> 
      </div> 
      <a href="{{ route('superheroes.edit', $superhero->id) }}" class="btn btn-primary">Edit</a> 
      <a href="{{ route('superheroes.index') }}" class="btn btn-primary">Index</a> 
    </div> 
  </div> 
@endsection