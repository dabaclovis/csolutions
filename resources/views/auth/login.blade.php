@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header w3-text-blue w3-padding-24 w3-xxlarge">{{ __('Login') }}</div>

                <div class="card-body w3-card-4 mt-2 w3-text-blue w3-light-gray w3-container">
                    <form method="POST" action="{{ route('logination') }}">
                        @csrf

                        <div class="w3-row mb-1">
                            <div class="w3-col w3-center w3-xlarge" id="mands">
                                <i class="fa fa-envelope-o mt-2" aria-hidden="true"></i>
                            </div>

                            <div class="w3-rest">
                                <input id="email"
                                     placeholder="Email Address"
                                     type="email"
                                     class="form-control @error('email') is-invalid @enderror"
                                     name="email" value="{{ old('email') }}"
                                     required
                                     autocomplete="email"
                                     autofocus />

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="w3-row mb-1">
                            <div class="w3-col w3-center w3-xlarge" id="mands">
                                <i class="fa fa-lock mt-2" aria-hidden="true"></i>
                            </div>

                            <div class="w3-rest">
                                <input id="password"
                                     type="password"
                                     class="form-control @error('password') is-invalid @enderror"
                                     name="password"
                                     required
                                     placeholder="Password"
                                     autocomplete="current-password"/>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 mx-5">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0 mx-5">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
@endsection
