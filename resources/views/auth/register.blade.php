@extends('layouts.app')

@section('content')
<div class="bodyRegistro">
  <div class="container">
      <div class="col-xl-8 col-md-12 informacionRegistrarse">
        <div class=tituloRegistrarse>Registrarse</div>
          <div class="formulariosRegistro">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                  {{ csrf_field() }}
                <!-- Nombre -->
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <div>
                      <input id="nombreApellidoRegistro" type="text" placeholder="Nombre" name="name" value="{{ old('name') }}" required autofocus>
                      @if ($errors->has('name'))
                        <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                        </span>
                      @endif
                  </div>
                </div>
                <!-- Apellido -->

                <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                  <div>
                    <input id="nombreApellidoRegistro" type="text" placeholder="Apellido" name="surname" value="{{ old('surname') }}" required autofocus>
                    @if ($errors->has('surname'))
                      <span class="help-block">
                        <strong>{{ $errors->first('surname') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
                <!-- Nombre de usuario -->
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <div>
                      <input id="nombreUsuarioRegistro" type="text" placeholder="nombre de usuario" name="nick" value="{{ old('nick') }}" required>
                        @if ($errors->has('nick'))
                          <span class="help-block">
                            <strong>{{ $errors->first('nick') }}</strong>
                          </span>
                        @endif
                  </div>
                </div>
                <!-- Email -->
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div>
                      <input id="emailRegistro" type="email" placeholder="email" name="email" value="{{ old('email') }}" required>
                      @if ($errors->has('email'))
                        <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                        </span>
                      @endif
                  </div>
                </div>
                <!-- Contraseña -->
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div>
                      <input id= "contraseña" type="password" placeholder="contraseña" name="password" required>
                      @if ($errors->has('password'))
                        <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                <!-- Confirmar contraseña -->
                <div class="form-group">
                    <div>
                      <input id= "contraseñaRegistro"  type="password"  placeholder="confirmar contraseña"name="password_confirmation" required>
                    </div>
                  </div>
                      <!-- Boton Registrarse -->
                 <div class="botones">
                  <div>
                      <button type="submit" class="botonA">Registrar</button>
                   </div>
                </div>
              </form>
                 </div>
                
      </div>

  </div>
</div>
@endsection
