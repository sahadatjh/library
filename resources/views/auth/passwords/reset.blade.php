@extends('auth.frame')
@section('form')
    <form method="POST" action="{{ route('password.update') }}" class="login-form">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" placeholder="Enter Your Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            <i class="far fa-envelope"></i>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            <i class="fas fa-lock"></i>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">          
        </div>
        
        <div class="form-group">
            <button type="submit" class="login-btn">{{ __('Reset Password') }}</button>
        </div>
    </form>
    
@endsection