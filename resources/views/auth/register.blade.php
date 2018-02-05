@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Apellido</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName') }}" required autofocus>

                                @if ($errors->has('lastName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('userName') ? ' has-error' : '' }}">
                            <label for="userName" class="col-md-4 control-label">Nombre de usuario</label>

                            <div class="col-md-6">
                                <input id="userName" type="text" class="form-control" name="userName" value="{{ old('userName') }}" required autofocus>

                                @if ($errors->has('userName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('userName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ciudad') ? ' has-error' : '' }}">
                            <label for="ciudad" class="col-md-4 control-label">Ciudad</label>

                            <div class="col-md-6">
                                <input id="ciudad" type="text" class="form-control" name="ciudad" value="{{ old('ciudad') }}" required>

                                @if ($errors->has('ciudad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ciudad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('codigoPostal') ? ' has-error' : '' }}">
                            <label for="codigoPostal" class="col-md-4 control-label">Codigo Postal</label>

                            <div class="col-md-6">
                                <input id="codigoPostal" type="text" class="form-control" name="codigoPostal" value="{{ old('codigoPostal') }}" required>

                                @if ($errors->has('codigoPostal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('codigoPostal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('numeroTarjeta') ? ' has-error' : '' }}">
                            <label for="numeroTarjeta" class="col-md-4 control-label">Numero de Tarjeta</label>

                            <div class="col-md-6">
                                <input id="numeroTarjeta" type="text" class="form-control" name="numeroTarjeta" value="{{ old('numeroTarjeta') }}" required>

                                @if ($errors->has('numeroTarjeta'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numeroTarjeta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tipoTarjeta') ? ' has-error' : '' }}">
                            <label for="tipoTarjeta" class="col-md-4 control-label">Tipo de Tarjeta</label>

                            <div class="col-md-6">
                                <input id="tipoTarjeta" type="text" class="form-control" name="tipoTarjeta" value="{{ old('tipoTarjeta') }}" required>

                                @if ($errors->has('tipoTarjeta'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tipoTarjeta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tlfMovil') ? ' has-error' : '' }}">
                            <label for="tlfMovil" class="col-md-4 control-label">Telefono Movil</label>

                            <div class="col-md-6">
                                <input id="tlfMovil" type="text" class="form-control" name="tlfMovil" value="{{ old('tlfMovil') }}" required>

                                @if ($errors->has('tlfMovil'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tlfMovil') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                            <label for="website" class="col-md-4 control-label">Website</label>

                            <div class="col-md-6">
                                <input id="website" type="text" class="form-control" name="website" value="{{ old('website') }}" required>

                                @if ($errors->has('website'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('about') ? ' has-error' : '' }}">
                            <label for="about" class="col-md-4 control-label">About</label>

                            <div class="col-md-6">
                                <input id="about" type="text" class="form-control" name="about" value="{{ old('about') }}" required>

                                @if ($errors->has('about'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('about') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                            <label for="avatar" class="col-md-4 control-label">Avatar</label>

                            <div class="col-md-6">
                                <input id="avatar" type="text" class="form-control" name="avatar" value="{{ old('avatar') }}" required>

                                @if ($errors->has('avatar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
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
