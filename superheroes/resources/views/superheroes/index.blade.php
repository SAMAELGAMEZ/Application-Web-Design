@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Superheroes</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('superheroes.create') }}" class="btn btn-primary mb-3">Add New Superhero</a>

    <table class="table">
        <thead>
            <tr>
                <th>Real Name</th>
                <th>Hero Name</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($superheroes as $superhero)
            <tr>
                <td>{{ $superhero->real_name }}</td>
                <td>{{ $superhero->hero_name }}</td>
                <td><img src="{{ $superhero->photo_url }}" alt="{{ $superhero->hero_name }}" width="100"></td>
                <td>
                    <a href="{{ route('superheroes.show', $superhero->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('superheroes.edit', $superhero->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('superheroes.destroy', $superhero->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection