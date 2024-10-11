@extends('layouts.app') 
@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 
  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      Edit Grade 
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
      <form method="post" action="{{ route('grades.update', $grade->id) }}"> 
        @csrf 
        @method('PATCH') 

        <div class="form-group"> 
          <label for="subject">Subject:</label> 
          <input type="text" class="form-control" name="subject" value="{{ $grade->subject }}" /> 
        </div> 

        <div class="form-group"> 
          <label for="activity_type">Activity Type:</label> 
          <select name="activity_type" class="form-control">
            <option value="homework" {{ $grade->activity_type == 'homework' ? 'selected' : '' }}>Homework</option>
            <option value="activity" {{ $grade->activity_type == 'activity' ? 'selected' : '' }}>Activity</option>
            <option value="quick test" {{ $grade->activity_type == 'quick test' ? 'selected' : '' }}>Quick Test</option>
            <option value="midterm" {{ $grade->activity_type == 'midterm' ? 'selected' : '' }}>Midterm</option>
          </select>
        </div> 

        <div class="form-group"> 
          <label for="grade">Grade (optional):</label> 
          <input type="number" class="form-control" name="grade" value="{{ $grade->grade }}" min="0" max="100" /> 
        </div> 

        <div class="form-group"> 
          <label for="date">Date:</label> 
          <input type="date" class="form-control" name="date" value="{{ $grade->date }}" /> 
        </div> 

        <button type="submit" class="btn btn-primary">Save</button> 
        <a href="{{ route('grades.index') }}" class="btn btn-primary">Return</a> 
      </form> 
    </div> 
  </div> 
@endsection