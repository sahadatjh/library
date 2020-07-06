@extends('auth.frame')
@section('form')
    <form method="POST" action="{{ route('login') }}" class="login-form">
        @csrf
        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" placeholder="Enter usrename" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            <i class="far fa-envelope"></i>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" placeholder="Enter password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <i class="fas fa-lock"></i>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group d-flex align-items-center justify-content-between">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember" class="form-check-label">Remember Me</label>
            </div>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="forgot-btn">Forgot Password?</a>
            @endif
        </div>
        <div class="form-group">
            <button type="submit" class="login-btn">Login</button>
        </div>
    </form>
@endsection