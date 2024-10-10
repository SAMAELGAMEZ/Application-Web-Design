@extends('layouts.app') 
@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      New Superhero 
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
      <form method="post" action="{{ route('superheroes.store') }}"> 
        @csrf 
        <div class="form-group"> 
          <label for="real_name">Real Name:</label> 
          <input type="text" class="form-control" name="real_name" /> 
        </div> 
        <div class="form-group"> 
          <label for="hero_name">Hero Name:</label> 
          <input type="text" class="form-control" name="hero_name" /> 
        </div> 
        <div class="form-group"> 
          <label for="photo_url">Photo URL:</label> 
          <input type="text" class="form-control" name="photo_url" /> 
        </div> 
        <div class="form-group"> 
          <label for="additional_info">Additional Information:</label> 
          <textarea rows="5" columns="5" class="form-control" name="additional_info"></textarea> 
        </div> 
        <button type="submit" class="btn btn-primary">Save</button> 
        <a href="{{ route('superheroes.index') }}" class="btn btn-primary">Return</a> 
      </form> 
    </div> 
  </div> 
@endsection