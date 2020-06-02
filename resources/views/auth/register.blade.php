@extends('home.app')

@include('home.header')

@section('content')
<div class="auth_background">

<div class="auth_wrap">
    <h1 class="auth_title">登録</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="auth_contents">
            <label for="name" class="register_label">{{ __('Name') }}</label>
            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="auth_contents">
            <label for="email" class="register_label">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="auth_contents">
            <label for="password" class="register_label">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="auth_contents">
            <label for="password-confirm" class="register_label">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="auth_button">
            <button type="submit" class="btn btn-primary">
                {{ __('Regist') }}
            </button>
        </div>
    </form>
</div>
@endsection
