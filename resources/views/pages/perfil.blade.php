@extends('layouts/app')


@section('content')
<div class="container_encabezado">
      <img src="{{ route('user.foto', ['user' => Auth::user()->nick, 'filename' => Auth::user()->image]) }}" />
  <div class="encabezado_informacion">
    <div class="datos_contacto">
      <div class="nombre_de_usuario">
        <p id="name">{{ Auth::user()->name." ". Auth::user()->surname }}</p>
        <p>{{  Auth::user()->nick }}</p>
      </div>
      <div class="descripcion">
        <p>{{ Auth::user()->description }}</p>
      </div>
      <div class="razas">
        <ul>
          <li>Labrador</li>
          <li>Pugg</li>
        </ul>
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
<div class="opciones_perfil">
  <ul>
    <li class="seguidores">Seguidores</li>
    <li class="publicaciones">Publicaciones</li>
    <li class="seguidos">Seguidos</li>
  </ul>
</div>
  <div class="publicaciones_perfil">

    @foreach ($posts as $post)
    <div class="publicaciones_imagen_perfil">
      <img src="{{ route('user.posts', ['user' => Auth::user()->nick, 'filename' => $post['image_path']]) }}" />
    </div>
    @endforeach
    
  <div class="texto_extra">
    <ul>
      <li class="fecha">10 de enero del 2019</li>
      <li class="nombre">Mariana se unió a dogger</li>
      <li class="logo"><img src="perros/logo.png" alt=""> </li>
    </ul>
  </div>
</div>
@endsection

