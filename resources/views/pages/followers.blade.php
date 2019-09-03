@extends('layouts/app')

@section('content')
  <div class="container_encabezado">
      @if(Auth::user()->image)
          <img class="tamaño_foto" src="{{ route('user.foto', ['user' => Auth::user()->nick, 'filename' => Auth::user()->image]) }}" />
      @else
          <img class="tamaño_foto" src="{{ route('user.foto', ['user' => 'default', 'filename' => '123.jpg']) }}" />
      @endif
    <div class="encabezado_informacion">
      <div class="datos_contacto">
        <div class="nombre_de_usuario">
          <p id="name">{{ Auth::user()->name." ". Auth::user()->surname }}</p>
          <p>{{  Auth::user()->nick }}</p>
        </div>
        <div class="descripcion">
          <p>{{ Auth::user()->description }}</p>
        </div>
        <div>
          <button class="boton_seguir" type="button" name="button">Seguir</button>
        </div>
      </div>
    </div>
    <div class="seguidores_numeros">
      <div class="seguidores_seguidos_publicaciones_blanco">
        <ul>
          <li class="primero">200</li>
          <li class="segundo">178</li>
          <li class="tercero">20</li>
        </ul>
      </div>
      <div class="seguidores_seguidos_publicaciones">
        <ul>
          <li>Seguidores</li>
          <li>Seguidos</li>
          <li>Publicaciones</li>
        </ul>
      </div>
    </div>
  </div>
