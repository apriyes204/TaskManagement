@extends('layouts.auth')
@section('title', 'Register')
@section('content')
    <div class="card-body register-card-body">
        <p class="register-box-msg">Register a new membership</p>
        <p class="login-box-msg">
            @if (session('status'))
                <div class="mb-4 text-green-600">
                    {{ session('status') }}
                </div>
            @endif
        </p>
        <form action="{{ route ('register') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name">
                <div class="input-group-text">
                    <span class="bi bi-person"></span>
                </div>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input type="email" value="{{old('email')}}" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                <div class="input-group-text">
                    <span class="bi bi-envelope"></span>
                </div>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input type="password" value="{{old('password')}}" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                <div class="input-group-text">
                    <span class="bi bi-lock-fill"></span>
                </div>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input type="password" value="{{old('password_confirmation')}}" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Password Confirmation">
                <div class="input-group-text">
                    <span class="bi bi-lock-fill"></span>
                </div>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <!--begin::Row-->
            <div class="row">
                {{-- <div class="col-8">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            I agree to the <a href="#">terms</a> </label>
                        </div>
                    </div>
                </div> --}}
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
                {{-- </div> <!-- /.col --> --}}
            </div>
            <!--end::Row-->
        </form> <!-- /.social-auth-links -->
        <p class="mb-0 mt-2">
            <a href="/login" class="text-center">
                I already have a membership
            </a>
        </p>
    </div>
@endsection
