@extends('layouts.main')


@section('container')
    {{-- main section login --}}
    <div class="row justify-content-center">
        <div class="col-lg-4">
            {{-- ini buat meesage kalo registarion berhasil lgsg redirect kesini --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- ini messeage kalo loginnya salah --}}
            @if (session()->has('gagal'))
                <div class="alert alert-danger alert-dismissible fade show">
                    {{ session('gagal') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                <form action="/login" method="post">
                    @csrf
                    {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}

                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="name@example.com" name="email" value="{{ old('email') }}" required autofocus>
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password"
                            required>
                        <label for="password">Password</label>
                    </div>

                    {{-- <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div> --}}
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p> --}}
                </form>

                <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
            </main>
        </div>
    </div>
@endsection
