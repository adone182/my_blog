@extends('layouts.main')

{{-- section about --}}
@section('container')
    <h1 class="mb-3">Blogs Page</h1>

    <h2>{{ $name }}</h2>
    <h4>{{ $email }}</h4>
    <p>{{ $job }}</p>
    <img src="img/{{ $img }}" alt="{{ $name }}" width="200" class="rounded-circle">
@endsection
