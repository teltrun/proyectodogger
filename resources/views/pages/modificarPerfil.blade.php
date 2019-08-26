@extends('layouts/app')

@section('content')
<div class="container">
    <div class="col-xl-8 col-md-12 modificarPerfil">
        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
      <div class="tituloRegistrarse">Configuración de perfil</div>
        <form class="form" method="POST" action="{{ route('user.update')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
               <!-- Subir foto de perfil -->
            <div class="cambiarFoto">
                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                    <div>
                        <label class="campoPerfil" for="campoPerfil">
                            @include('partials/avatar')
                            <br>
                            Cambiar foto
                        </label>
                        <br>
                        <input id="campoPerfil" style="display:none;" type="file" name="image">
                        @if ($errors->has('image'))
                            <span class="help-block">
                            <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="modificarDatos">
                <!-- Nombre -->
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <div>
                        <input id="nombreApellidoRegistro" type="text" placeholder="Nombre" name="name" value="{{ Auth::user()->name }}" required autofocus>
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
                        <input id="nombreApellidoRegistro" type="text" placeholder="Apellido" name="surname" value="{{ Auth::user()->surname }}" required autofocus>
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
                      <input id="nombreUsuarioRegistro" type="text" placeholder="nombre de usuario" name="nick" value="{{ Auth::user()->nick }}" required>
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
                      <input id="emailRegistro" type="email" placeholder="email" name="email" value="{{ Auth::user()->email }}" required>
                      @if ($errors->has('email'))
                        <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                        </span>
                      @endif
                  </div>
                </div>

                <!-- Descripcion -->
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div>
                        <input id="emailRegistro" type="text" placeholder="descripcion" name="description" value="{{ Auth::user()->description }}">
                        @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <!-- genero -->
                <div class="form-group{{ $errors->has('genre') ? ' has-error' : '' }}">
                    <div>
                        <input id="emailRegistro" type="text" placeholder="genero" name="genre" value="{{ Auth::user()->genre }}">
                        @if ($errors->has('genre'))
                        <span class="help-block">
                            <strong>{{ $errors->first('genre') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <!-- telefono -->
                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <div>
                        <input id="emailRegistro" type="text" placeholder="telefono" name="phone" value="{{ Auth::user()->phone }}" required>
                        @if ($errors->has('phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

            </div>
            <!-- Boton Registrarse -->
            <div class="botones">
                <div>
                    <button type="submit" class="botonA">Actualizar perfil</button>
                </div>
            </div>
        </form>
     </div>
</div>

@endsection