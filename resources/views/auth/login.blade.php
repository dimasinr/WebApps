@extends('layouts.app')
@section('content')
<div class="mt-4">
<div class="container md:container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card2a">

                <div class="card-body">
                    <div style="text-align:center" class="fw-600">{{ __('Sign Your Account') }}</div><hr>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-2 col-form-label text-md-right"></label>

                            <div class="col-md-6" style="align-items: center">
                                <input id="username" type="username" class="form-control md:w-137 br-15 @error('username') is-invalid @enderror" placeholder="{{ __('Username') }}" name="username" value="{{ old('username') }}" required autocomplete="off" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control md:w-137 br-15 @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" name="password" required autocomplete="off">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-wi">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

{{-- <div class="form-group row">
    <div class="col-md-6 offset-md-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
    </div>
</div> --}}