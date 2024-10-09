@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $superhero->hero_name }}</h1>
    <p><strong>Real Name:</strong> {{ $superhero->real_name }}</p>
    <p><strong>Additional Info:</strong> {{ $superhero->additional_info }}</p>
    <img src="{{ $superhero->photo_url }}" alt="{{ $superhero->hero_name }}" width="200">
</div>
@endsection