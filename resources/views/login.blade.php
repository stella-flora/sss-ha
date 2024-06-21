@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <form method="POST" action="{{ route('login') }}" class="row">
            @csrf
            <div class="col col-12 col-md-6 col-lg-4 mb-3">
                <label for="email" class="form-label">Email: </label>
                <input type="email" name="email"
                       class="form-control @error('email') is-invalid @enderror" id="email"
                       placeholder="stella@japanauto.mt" required>
                @error('email')
                <span class="invalid-feedback">
                        {{ $message }}
                </span>
                @enderror
            </div>
            <div class="col col-12 col-md-6 col-lg-4 mb-3">
                <label for="password" class="form-label">Password: </label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                       id="password" placeholder="********" autocomplete="current-password" required>
                @error('password')
                <span class="invalid-feedback">
                        {{ $message }}
                </span>
                @enderror
            </div>

            <div class="col col-12 mb-4">
                <input class="form-check-input" type="checkbox" value="" id="remember_me" name="remember">
                <label for="remember_me" class="form-check-label">Remember me</label>
            </div>

            <div class="col col-12">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
            </div>
        </form>
    </div>
@endsection
