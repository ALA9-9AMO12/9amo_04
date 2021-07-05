@extends('layouts.dashboard')

@section('title')
    <h1 class="fs-2">Create Admin</h1>
@endsection

@section('description')
    <h3 class="mb-0 fs-6 fw-normal text-black-200">Create an administrator</h3>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="d-flex bg-light p-3 flex-column rounded-3 border">
                <form method="POST" action="{{ route('dashboard.admins.store') }}">
                    @csrf

                    <div class="row">
                        <div class="col-12 col-md-6">
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
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="roles" class="col-form-label text-md-right @error('role_id') text-danger is-invalid @enderror">{{ __('Role') }}</label>

                                <select class="bg-light form-select" id="roles" name="role_id" aria-label="Roles">
                                    <option disabled selected>Select Role</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>

                                @error('role_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-3 mb-0">
                        <button type="submit" class="btn btn-warning">
                            <span>Create</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
