@extends('layouts.main')

{{-- section post --}}
@section('container')
    {{-- section content categories --}}
    <h1 class="mb-4">Post Categories</h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-lg-4 my-3">
                    <a href="/posts?author={{ $category->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="img-fluid"
                                alt="{{ $category->name }}">

                            <div class="card-img-overlay p-0 d-flex align-items-center">
                                <h5 class="card-title text-center flex-fill p-4 fs-4"
                                    style="background-color: rgba(0,0,0, 0.6)">
                                    {{ $category->name }}
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
