@extends('home.app')

@include('home.header')

@section('content')
<div class="auth_background">
<div class="auth_wrap">
    <h1 class="auth_title">LOGIN</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="auth_contents">
            <label for="email" class="login_label">{{ __('E-Mail') }}</label>
            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="auth_contents">
            <label for="password" class="login_label">{{ __('Password') }}</label>
            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="auth_button">
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
        </div>
    </form>
</div>
</div>
@endsection
