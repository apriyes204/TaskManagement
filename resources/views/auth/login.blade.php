@extends('layouts.auth')
@section('title', 'Login')
@section('content')

    <div class="card-body login-card-body">
        <p class="login-box-msg">Login membership</p>
        <p class="login-box-msg">
            @if (session('status'))
                <div class="mb-4 text-green-600">
                    {{ session('status') }}
                </div>
            @endif
        </p>
        <form action="{{ route ('login') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    placeholder="Email" value="{{old('email')}}" required autocomplete="email" autofocus>
                <div class="input-group-text">
                    <span class="bi bi-envelope"></span>
                </div>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password" id="password"
                    class="form-control @error('password') is-invalid @enderror" placeholder="Password" required
                    autocomplete="current-password">
                <div class="input-group-text">
                    <span class="bi bi-lock-fill"></span>
                </div>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!--begin::Row-->
            <div class="row">
                <div class="col-8">
                    <p class="">
                        <a href="{{route('register')}}" class="text-center">
                            Register a new membership
                        </a>
                    </p>
                    {{-- <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember Me
                        </label>
                    </div> --}}
                </div> <!-- /.col -->
                <div class="col-4">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                    </div>
                </div> <!-- /.col -->
            </div>
            <!--end::Row-->
        </form>
        <!-- /.social-auth-links -->
        {{-- <p class="mb-1">
            @if (Route::has('password.request'))
                <a href="{{route('password.request')}}">
                    I forgot my password
                </a>
            @endif
        </p> --}}
        {{-- <p class="mb-0 mt-2">
            <a href="{{route('register')}}" class="text-center">
                Register a new membership
            </a>
        </p> --}}
    </div>
@endsection
