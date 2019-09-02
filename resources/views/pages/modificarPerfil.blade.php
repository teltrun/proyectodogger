@extends('layouts/app')

@section('content')
<div class="container">
    <div class="contenedor_modifPerfil">
        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
          <form class="contenedor_modifPerfil" method="POST" action="form-group{{ route('user.update')}}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <!-- Subir foto de perfil -->
              <div class="cambiarFoto">
                  <div class="{{ $errors->has('image') ? ' has-error' : '' }}">
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
                          <label id="modifFormato" for="">Nombre</label>
                          <input type="text" name="name" value="{{ Auth::user()->name }}" required autofocus>
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
                          <label id="modifFormato" for="">Apellido</label>
                          <input type="text" placeholder="Apellido" name="surname" value="{{ Auth::user()->surname }}" required autofocus>
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
                        <label id="modifFormato" for="">Nombre de usuario</label>
                        <input  type="text" name="nick" value="{{ Auth::user()->nick }}" required>
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
                        <label id="modifFormato" for="">E-mail</label>
                        <input type="email" name="email" value="{{ Auth::user()->email }}" required>
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
                          <label id="modifFormato" for="">Descripción</label>
                          <input type="text" name="description" value="{{ Auth::user()->description }}">
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
                          <label id="modifFormato" for="">Género</label>
                          <input type="text" name="genre" value="{{ Auth::user()->genre }}">
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
                          <label id="modifFormato" for="">Telefono</label>
                          <input type="text"  name="phone" value="{{ Auth::user()->phone }}" required>
                          @if ($errors->has('phone'))
                          <span class="help-block">
                              <strong>{{ $errors->first('phone') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>
              </div>
              <!-- Boton Registrarse -->

              <button class="botonC" type="submit" class="">Actualizar perfil</button>

          </form>

     </div>
</div>

@endsection
