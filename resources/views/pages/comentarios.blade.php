@extends('layouts/app')

@section('content')
  <div class="todo-comentario">
    <div class="contenedor-comentario">
        @if(session('message'))
            <div id="mensaje" class="alert alert-success">

            </div>
        @endif
    <div id="detallePost">
      <div class="comentar">
        <p class="textoSubirFoto" id="comentar-titulo">Comentar</p>
      </div>
      <div class="image">
        <img class="fotoComentario" src="{{ route('user.posts', ['user' => $posteador[0]->nick, 'filename' => $post[0]->image_path]) }}" />
      </div>
      <br>
        @if(Auth::user()->id == $posteador[0]->id)
          <a href="/deletePost/{{$post[0]->id}}" class="botonC">Eliminar post</a>
        @endif
      <hr>
     
      <div class="addcomentario">
      <form name="frmComentario" method="POST" action="{{ route('comment.save') }}">
            {{ csrf_field() }}
            <textarea name="content" id="" cols="50" rows="3"></textarea><br>
            <input type="hidden" name="post" value="{{ $post[0]->id}}">
            <input class="botonC" type="submit" value="Comentar">
      </form>
      </div>
        <hr>
        <div class="">
          <h2 id="comentarios-titulo">Comentarios ({{ count($comments) }})</h2>
              @foreach ($comments as $comment)
              @if($comment->users->image)
                <img class="tamaño_foto" src="{{ route('user.foto', ['user' => $comment->users->nick, 'filename' => $comment->users->image]) }}" />
              @else
                <img class="tamaño_foto" src="{{ route('user.foto', ['user' => 'default', 'filename' => '123.jpg']) }}" />
              @endif
                {{ $comment->users->nick }}
                <br>
                {{ $comment->content }}
                <hr>
        </div>
              @endforeach
      </div>
    </div>
  </div>
@endsection
