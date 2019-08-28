@extends('layouts/app')

@section('content')
    <div class="publicaciones_timeline">

      
      @foreach ($imagenes as $imagen)
       
        {{ $imagen->users->name }}

        <div class="publicaciones_timeline">
            <img src="{{ route('user.posts', ['user' => $imagen->users->nick, 'filename' => $imagen->image_path]) }}" />
            <div class="parte_negra">
              <ul>
                <li class="comentar"><i class="material-icons">comment</i></li>
                <li class="likear"><i class="material-icons">thumb_up</i></li>
                <li class="compartir"><i class="material-icons">share</i></li>
              </ul>
            </div>
          </div>
      @endforeach
      
      
    </div>
@endsection
