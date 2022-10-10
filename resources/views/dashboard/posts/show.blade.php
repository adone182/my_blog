@extends('dashboard.layouts.main')


@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-4">{{ $post->title }}</h1>

                {{-- button action --}}
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my
                    post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-primary"><span data-feather="edit"></span>
                    Edit
                    post</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure to delete this Post?')"><span
                            data-feather="x-circle"></span>
                        Delete</button>

                </form>
                {{-- kondisi jika gambar ada di ketika di upload ketika bikin postingan --}}
                @if ($post->image)
                    <div style="max-height:350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}"
                            alt="{{ $post->category->name }}"class="img-fluid mt-3" alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3"
                        alt="{{ $post->category->name }}">
                @endif

                <article class="my-3">
                    {!! $post->body !!}
                </article>

            </div>
        </div>
    </div>
@endsection
