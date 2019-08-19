@extends('layouts/app')

@section('content')
<div class="container_encabezado">
    <img src="perros/foto_perfil.jpg" alt="Foto de perfil del usuario">
    <div class="encabezado_informacion">
      <div class="datos_contacto">
        <div class="nombre_de_usuario">
          <p>@mariana_marlo</p>
        </div>
        <div class="descripcion">
          <p>Amo los perros, son mi pasión, desde chica que los tengo como mascotas y no hay manera de que me los saquen de mi casa, disfruto con ellos todos los dias</p>
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
    <div class="publicaciones_imagen_perfil">
      <img src="perros/imagen_4.jpg" alt="Foto numero uno">
    </div>
    <div class="publicaciones_imagen_perfil">
      <img src="perros/imagen_5.jpg" alt="Foto numero dos">
    </div>
    <div class="publicaciones_imagen_perfil">
      <img src="perros/imagen_6.jpg" alt="Foto numero tres">
    </div>
    <div class="publicaciones_imagen_perfil">
      <img src="perros/imagen_7.jpg" alt="Foto numero cuatro">
    </div>
    <div class="publicaciones_imagen_perfil">
        <img src="perros/imagen_9.jpg" alt="Foto numero cinco">
    </div>
    <div class="publicaciones_imagen_perfil">
        <img src="perros/imagen_10.jpg" alt="Foto numero seis">
    </div>
    <div class="publicaciones_imagen_perfil">
        <img src="perros/imagen_11.jpg" alt="Foto numero siete">
    </div>
    <div class="publicaciones_imagen_perfil">
        <img src="perros/imagen_12.jpg" alt="Foto numero ocho">
    </div>
    <div class="publicaciones_imagen_perfil">
        <img src="perros/imagen_13.jpg" alt="Foto numero nueve">
    </div>
    <div class="publicaciones_imagen_perfil">
        <img src="perros/imagen_14.jpg" alt="Foto numero diez">
    </div>
    <div class="publicaciones_imagen_perfil">
        <img src="perros/imagen_15.jpg" alt="Foto numero once">
    </div>
    <div class="publicaciones_imagen_perfil">
        <img src="perros/imagen_4.jpg" alt="Foto numero doce">
    </div>
  </div>
  <div class="texto_extra">
    <ul>
      <li class="fecha">10 de enero del 2019</li>
      <li class="nombre">Mariana se unió a dogger</li>
      <li class="logo"><img src="perros/logo.png" alt=""> </li>
    </ul>
  </div>
@endsection

