@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register</div>
                <div class="card-body">
                    <form role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group row">
                            <label for="name" class="col-lg-4 col-form-label text-lg-right">Nombre</label>

                            <div class="col-lg-6">
                                <input
                                        id="name"
                                        type="text"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        name="name"
                                        value="{{ old('name') }}"
                                        required
                                >
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastName" class="col-lg-4 col-form-label text-lg-right">Apellidos </label>

                            <div class="col-lg-6">
                                <input
                                        id="lastName"
                                        type="text"
                                        class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}"
                                        name="lasName"
                                        value="{{ old('lastName') }}"
                                        required
                                >
                                @if ($errors->has('lastName'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="userName" class="col-lg-4 col-form-label text-lg-right">Nombre de usuario </label>

                            <div class="col-lg-6">
                                <input
                                        id="userName"
                                        type="text"
                                        class="form-control{{ $errors->has('userName') ? ' is-invalid' : '' }}"
                                        name="userame"
                                        value="{{ old('userName') }}"
                                        required
                                >
                                @if ($errors->has('userName'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('userName') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-lg-4 col-form-label text-lg-right">E-Mail Address</label>

                            <div class="col-lg-6">
                                <input
                                        id="email"
                                        type="email"
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                >

                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-lg-4 col-form-label text-lg-right">Password</label>

                            <div class="col-lg-6">
                                <input
                                        id="password"
                                        type="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password"
                                        required
                                >
                                @if ($errors->has('password'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password_confirmation" class="col-lg-4 col-form-label text-lg-right">Confirm Password</label>

                            <div class="col-lg-6">
                                <input
                                        id="password_confirmation"
                                        type="password"
                                        class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                        name="password_confirmation"
                                        required
                                >
                                @if ($errors->has('password_confirmation'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-6 offset-lg-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
