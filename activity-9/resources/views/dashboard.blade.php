<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>
    <p>Bienvenido, {{ Auth::user()->name }}. Este es tu dashboard.</p>
@endsection