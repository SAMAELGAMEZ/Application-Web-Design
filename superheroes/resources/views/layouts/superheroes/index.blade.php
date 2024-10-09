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
    <div class="row"> 
      <a class="btn btn-primary" href="{{ route('superheroes.create') }}">Add Superhero</a> 
    </div> 

    <table class="table table-striped"> 
      <thead> 
        <tr> 
          <th>No</th> 
          <th>Superhero Name</th> 
          <th>Real Name</th> 
          <th>Universe</th> 
          <th width="80px"></th> 
          <th width="80px"></th> 
        </tr> 
      </thead> 
      <tbody> 
        @foreach ($superheroes as $superheroe) 
          <tr> 
            <td><a href="{{ route('superheroes.show', $superheroe->id) }}">{{ $superheroe->id }}</a></td> 
            <td><a href="{{ route('superheroes.show', $superheroe->id) }}">{{ $superheroe->name }}</a></td> 
            <td><a href="{{ route('superheroes.show', $superheroe->id) }}">{{ $superheroe->real_name }}</a></td> 
            <td><a href="{{ route('superheroes.show', $superheroe->id) }}">{{ $superheroe->universe }}</a></td> 
            <td><a href="{{ route('superheroes.edit', $superheroe->id) }}" class="btn btn-primary">Edit</a></td> 
            <td> 
              <form action="{{ route('superheroes.destroy', $superheroe->id) }}" method="post"> 
                @csrf 
                @method('DELETE') 
                <button class="btn btn-danger" type="submit">Delete</button> 
              </form> 
            </td> 
          </tr> 
        @endforeach 
      </tbody> 
    </table> 
  </div> 
@endsection