@extends('layouts.main')

{{-- section post --}}
@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    {{-- buttun search --}}

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    {{-- kondisi buat check ada postingan atau tidak(kita pake if punyanya blade) --}}
    @if ($posts->count())
        <div class="card mb-3">
            {{-- kondisi jika gambar ada di ketika di upload ketika bikin postingan --}}
            @if ($posts[0]->image)
                <img src="{{ asset('storage/' . $posts[0]->image) }}"
                    alt="{{ $posts[0]->category->name }}"class="img-fluid">
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}">
            @endif

            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p class="mb-1">
                    <small>
                        By. <a href="/posts?author={{ $posts[0]->author->username }}"
                            class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                            href="/posts?category={{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>

                <p>{{ $posts[0]->excerpt }}</p>

                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read more</a>

            </div>
        </div>

        {{-- section main contend --}}
        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3 mt-2">
                        <div class="card">
                            <div class="position-absolute px-3 py-2 text-white"
                                style="background-color: rgba(0,0,0,0.6);border-radius:0px 0px 15px 0px"><a
                                    href="/posts?category={{ $post->category->slug }}"
                                    class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}"
                                    alt="{{ $post->category->name }}"class="img-fluid">
                            @else
                                <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}"
                                    class="card-img-top" alt="{{ $post->category->name }}">
                            @endif

                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="mb-1">
                                    <small>
                                        By. <a href="/posts?author={{ $post->author->username }}"
                                            class="text-decoration-none">{{ $post->author->name }}</a>
                                        {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>

                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center">No Posts Found .....</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>

@endsection
