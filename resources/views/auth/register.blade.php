@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card2a">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div style="text-align:center" class="fw-600">{{ __('Register') }}</div><hr>

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control md:w-137 br-15 @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}" required autocomplete="off" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-2 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control md:w-137 br-15 @error('username') is-invalid @enderror" placeholder="{{ __('Username') }}" name="username" value="{{ old('username') }}" required autocomplete="off" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control md:w-137 br-15 @error('email') is-invalid @enderror" placeholder="{{ __('Email Address') }}" name="email" value="{{ old('email') }}" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control md:w-137 br-15 @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-2 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control md:w-137 br-15" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2 mb-4">
                                <button type="submit" class="btn btn-wi md:w-110">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
