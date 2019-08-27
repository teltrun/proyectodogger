@extends('layouts.app')

@section('content')
<div class="bodyInicioSesion">
  <div class="container">
    <form class="usuario" method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}
      <div class="formulariosInicioSesion">
        <div class="col-xl-8 col-sm-12 informacionInicioSesion">
          <div class="tituloIniciarSesion">Iniciar Sesión</div>
              <!--Email de usuario-->
              <div class="subtitulos{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class= "subtiutlos" for="email">
                  <div class=subtitulos>
                    <input id="nombre" type="email" name="email" placeholder="email de usuario" value="{{ old('email') }}" required autofocus>
                      @if ($errors->has('email'))
                        <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                        </span>
                      @endif
                  </div>
                </label>
              </div>
                <!--Contraseña-->
                <div class="usuario{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label class="subtitulos" for="password">
                    <div class="subtitulos">
                      <input id="contraseña" type="password" placeholder="contraseña" name="password" required>
                        @if ($errors->has('password'))
                          <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                          </span>
                        @endif
                      </div>
                    </label>
                  </div>
                  <!--CheckBox-->
                  <div class="custom-control custom-checkbox recordarme">
                    <div>
                      <div class="checkbox">
                        <label class="preguntaContraseña">
                          <input id="recordarme" class="recordarme" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar mis datos para iniciar sesión
                        </label>
                        <a class="preguntaContraseña" href="{{ route('password.request') }}">Forgot Your Password?</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                   <!--Boton-->
              <div class="botones">
                <div>
                  <button type="submit" class="botonB">Iniciar Sesion</button>
                </div>
              </div>
          </form>
      </div>
    </div>
@endsection
