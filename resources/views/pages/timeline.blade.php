@extends('layouts/app')

@section('content')
    <div class="publicaciones_timeline">

      
      @foreach ($imagenes as $imagen)
       
        

        <div class="publicaciones_timeline">
            <img src="{{ route('user.posts', ['user' => $imagen->users->nick, 'filename' => $imagen->image_path]) }}" />
            <div class="details">
              {{ $imagen->users->name }}
            </div>
            <div class="parte_negra">
              <ul>
                <li class="comentar"><a href=""><i class="material-icons">comment</i></a></li>
                <li class="likear"><i class="material-icons">thumb_up</i></li>
                <li class="compartir"><i class="material-icons">share</i></li>
              </ul>
            </div>
          </div>
      @endforeach
      
      
    </div>
@endsection
