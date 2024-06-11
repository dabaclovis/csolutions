@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header w3-padding-24 w3-text-blue w3-xxlarge">{{ __('Register') }}</div>

                <div class="card-body mt-2 w3-container w3-light-gray w3-text-blue w3-card-4">
                    <form method="POST" action="{{ route('regination') }}">
                        @csrf

                        <div class="w3-row mb-1">
                            <div id="mands" class="w3-col w3-xlarge w3-center">
                                <i class="fa fa-user pt-2" aria-hidden="true"></i>
                            </div>
                            <div class="w3-rest">
                                <input id="name"
                                    type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                    autocomplete="name"
                                    placeholder="Your name"
                                    autofocus/>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="w3-row mb-1">
                            <div id="mands" class="w3-col w3-xlarge w3-center">
                                <i class="fa fa-envelope-o pt-2" aria-hidden="true"></i>
                            </div>
                            <div class="w3-rest">
                                <input id="email"
                                    placeholder="Email Address"
                                    type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email"/>

                                @error('email')

                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="w3-row mb-1">
                            <div id="mands" class="w3-col w3-xlarge w3-center">
                                <i class="fa fa-key pt-2" aria-hidden="true"></i>
                            </div>
                            <div class="w3-rest">
                                <input id="password"
                                    placeholder="Enter your password"
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password"
                                    required
                                    autocomplete="new-password" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="w3-row">
                            <div id="mands" class="w3-col w3-xlarge w3-center">
                                <i class="fa fa-key pt-2" aria-hidden="true"></i>
                            </div>
                            <div class="w3-rest">
                                <input id="password-confirm"
                                        placeholder="Retype password"
                                        type="password"
                                        class="form-control"
                                        name="password_confirmation"
                                        required
                                        autocomplete="new-password" />
                            </div>
                        </div>

                        <div class="w3-row w3-section mb-0 d-flex justify-content-end">
                            <div class="offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
