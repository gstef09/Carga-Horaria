@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<<<<<<< HEAD

<div class="fondo-uleam">
    <!-- <div class="row">
        <div class="col-md-8 col-md-offset-2"> -->
            <div class="panel panel-default login">
                <div class="panel-heading">Login</div>
=======
=======
>>>>>>> 52f3871a0fcb1c009588dca3c17d1d2edfdbbf15
    <div class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Inicia Sesión</div>
<<<<<<< HEAD
>>>>>>> 52f3871a0fcb1c009588dca3c17d1d2edfdbbf15
=======
>>>>>>> 52f3871a0fcb1c009588dca3c17d1d2edfdbbf15

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Correo Electrónico</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Contraseña</label>

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
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Ingresar
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
        <!-- </div>
    </div> -->
</div>
=======
        </div>
    </div>
<<<<<<< HEAD
>>>>>>> 52f3871a0fcb1c009588dca3c17d1d2edfdbbf15
=======
>>>>>>> 52f3871a0fcb1c009588dca3c17d1d2edfdbbf15
@endsection
