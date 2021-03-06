@extends('layouts.auth')

@section('image')
    <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
@endsection

@section('title')
    {{ __('Reset Password') }}
@endsection

@section('info')
    <p class="mb-4">
        We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!
    </p>
    @if(session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
@endsection

@section('form')
    <form class="user" method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group">
            <input id="email" type="email" class="form-control form-control-user form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail Address">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">
            {{ __('Send Password Reset Link') }}
        </button>
    </form>
@endsection