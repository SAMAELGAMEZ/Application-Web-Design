@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Superhero</h1>
    <form action="{{ route('superheroes.update', $superhero->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="real_name">Real Name:</label>
            <input type="text" name="real_name" class="form-control" value="{{ old('real_name', $superhero->real_name) }}" required>
        </div>
        <div class="form-group">
            <label for="hero_name">Hero Name:</label>
            <input type="text" name="hero_name" class="form-control" value="{{ old('hero_name', $superhero->hero_name) }}" required>
        </div>
        <div class="form-group">
            <label for="photo_url">Photo URL:</label>
            <input type="url" name="photo_url" class="form-control" value="{{ old('photo_url', $superhero->photo_url) }}" required>
        </div>
        <div class="form-group">
            <label for="additional_info">Additional Info:</label>
            <textarea name="additional_info" class="form-control">{{ old('additional_info', $superhero->additional_info) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Superhero</button>
    </form>
</div>
@endsection