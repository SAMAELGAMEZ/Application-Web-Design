@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a New Superhero</h1>
    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="real_name">Real Name:</label>
            <input type="text" name="real_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="hero_name">Hero Name:</label>
            <input type="text" name="hero_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="photo_url">Photo URL:</label>
            <input type="url" name="photo_url" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="additional_info">Additional Info:</label>
            <textarea name="additional_info" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Superhero</button>
    </form>
</div>
@endsection