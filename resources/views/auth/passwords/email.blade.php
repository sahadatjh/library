@extends('auth.frame')
@section('form')
    <form method="POST" action="{{ route('password.email') }}" class="login-form">
        @csrf
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" placeholder="Enter Your Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <i class="far fa-envelope"></i>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="login-btn">{{ __('Send Password Reset Link') }}</button>
        </div>
    </form>
    
@endsection