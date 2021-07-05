@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="mb-3 text-center">
                    <h1 class="fs-2">Register</h1>
                    <h3 class="mb-0 fs-6 fw-normal text-black-200">Already have an account? <a href="{{ route('login') }}" class="text-black-100">{{ __('Login') }}</a></h3>
                </div>

                <div class="d-flex bg-light p-5 justify-content-center align-items-center flex-column rounded-3 border">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="col-form-label text-md-right @error('name') text-danger @enderror">{{ __('Name') }}</label>

                            <div>
                                <input id="name" type="text" class="bg-light form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-form-label text-md-right @error('email') text-danger @enderror">{{ __('E-Mail') }}</label>

                            <div>
                                <input id="email" type="email" class="bg-light form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label text-md-right @error('password') text-danger @enderror">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="bg-light form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <input id="password-confirm" type="password" class="bg-light form-control" name="password_confirmation" autocomplete="new-password">
                        </div>

                        <div class="form-group mt-3 mb-0">
                            <button type="submit" class="btn btn-warning w-100">
                                <span>{{ __('Register') }}</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
