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
      <a class="btn btn-primary" href="{{ route('grades.create') }}">Add Activity</a> 
    </div> 

    <table class="table table-striped"> 
      <thead> 
        <tr> 
          <th>No</th> 
          <th>Subject</th>  <!-- Añadir la columna de subject -->
          <th>Activity Type</th> 
          <th>Grade</th> 
          <th>Date</th> 
          <th width="80px"></th> 
          <th width="80px"></th> 
        </tr> 
      </thead> 
      <tbody> 
        @foreach ($grades as $grade) 
          <tr> 
            <td>{{ $loop->iteration }}</td>  <!-- Número de fila -->
            <td>{{ $grade->subject }}</td> <!-- Mostrar el subject -->
            <td>{{ $grade->activity_type }}</td> 
            <td>{{ $grade->grade }}</td> 
            <td>{{ $grade->date }}</td> 
            <td><a href="{{ route('grades.edit', $grade->id) }}" class="btn btn-primary">Edit</a></td> 
            <td> 
              <form action="{{ route('grades.destroy', $grade->id) }}" method="post"> 
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