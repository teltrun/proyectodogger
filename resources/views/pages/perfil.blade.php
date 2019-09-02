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

<div class="opciones_perfil">
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
  <ul>
    <li class="seguidores">Seguidores</li>
    <li class="publicaciones">Publicaciones</li>
    <li class="seguidos">Seguidos</li>
  </ul>
</div>
  <div class="publicaciones_perfil">
    @foreach ($posts as $post)
    <div class="publicaciones_imagen_perfil">
<<<<<<< HEAD
      <a href="" data-toggle="modal" data-target="#modalImagen">
      <img id="imagenPost" idImagen="{{ $post->id }}" src="{{ route('user.posts', ['user' => Auth::user()->nick, 'filename' => $post['image_path']]) }}" />      
      </a></li>
      <p>{{ $post['description'] }}</p>
    </div>
    @endforeach

    <div class="modal fade" id="modalImagen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content containerSubirFoto">
            <form method="post" action="{{ route('post.save') }}" enctype="multipart/form-data" id="uploadForm">
              {{ csrf_field() }}
              <div class="modal-header">
                <h5 class="textoSubirFoto" id="">Crear Publicación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body infoSubirFoto">
                  <div class="form-group avatarMenu">
                    @include('partials.avatar')
                  </div>
                <div class="infoCostadoSubirFoto">
                  <div class="form-group avatarMenu">
                    <p class="nombreUsuarioSubirFoto">{{ Auth::user()->name }}</p>
                  </div>
                  <div id="detalleImagen">
                    <img src="" alt="">
                  </div>
                  <div class="form-group comentarioSubirFoto">
                    <label for="message-text" class="col-form-label"></label>
                    <textarea class="form-control" id="message-text" name="description">Haz un comentario sobre esta foto o video...</textarea>
                  </div>
                  <hr>
                  <div id="comments">
                    
                  </div>
                  <div class="form-group" id="contenedor-foto">
                    <label for="subirFoto" class="col-form-label subirFoto">
                        Elegir foto/video
                    </label>
                    <input id="subirFoto" name='subirFoto' style="display:none;" type="file">
                  </div>
                </div>
              </div>
                <div class="modal-footer">
                <input type="hidden" id="postId" name="">
                  <button type="submit" class="btn btn-primary botonPublicar">Publicar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    
=======
      <img src="{{ route('user.posts', ['user' => Auth::user()->nick, 'filename' => $post['image_path']]) }}" />
      <!-- Styles <p>{{ $post['description'] }}</p> -->
    </div>
    @endforeach

>>>>>>> 9fc496ad9bd6e6ebe2eb89137bc89d429150113f
  <div class="texto_extra">
    <ul>
      <li class="fecha">10 de enero del 2019</li>
      <li class="nombre">Mariana se unió a dogger</li>
      <li class="logo"><img src="perros/logo.png" alt=""> </li>
    </ul>
  </div>
</div>
@endsection
