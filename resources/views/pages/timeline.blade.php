@extends('layouts/app')

@section('content')
    <div class="contenedor_publicaciones">
      @foreach ($imagenes as $imagen)
        <div class="publicacion">
            <img src="{{ route('user.posts', ['user' => $imagen->users->nick, 'filename' => $imagen->image_path]) }}" />
            <!-- <div class="details">
              {{ $imagen->users->name }}
            </div>
             Link para iconos
            <div class="parte_negra">
              <ul>
                <li class="comentar"><a href=""><i class="material-icons">comment</i></a></li>
                <li class="likear"><i class="material-icons">thumb_up</i></li>
                <li class="compartir"><i class="material-icons">share</i></li>
              </ul>
            </div>
             -->
             <div class="texto_publicacion">
               <p class= usuario_publicacion>{{ $imagen->users->name }}</p>
               <p class= bajada_publicacion>Max sediento despues de una caminata por la playa</p>
               <div class="parte_negra">
                 <ul>
                   <li class="comentar"><i class="material-icons">comment</i></li>
                   <li class="likear"><i class="material-icons">thumb_up</i></li>
                   <li class="compartir"><i class="material-icons">share</i></li>
                 </ul>
               </div>
             </div>
          </div>
      @endforeach


    </div>
@endsection
