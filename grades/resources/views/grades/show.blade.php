@extends('layouts.app') 

@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 
  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      View Grade Entry 
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
        <label for="activity_type">Activity Type:</label> 
        <input type="text" class="form-control" name="activity_type" value="{{ $grade->activity_type }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="grade">Grade (optional):</label> 
        <input type="text" class="form-control" name="grade" value="{{ $grade->grade ?? 'Not graded' }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="date">Date:</label> 
        <input type="text" class="form-control" name="date" value="{{ $grade->date }}" disabled /> 
      </div> 
      <a href="{{ route('grades.edit', $grade->id) }}" class="btn btn-primary">Edit</a> 
      <a href="{{ route('grades.index') }}" class="btn btn-primary">Index</a> 
    </div> 
  </div> 
@endsection