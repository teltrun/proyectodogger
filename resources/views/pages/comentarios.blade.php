@extends('layouts/app')

@section('content')
    <div class="contenedor-comentario">
        @if(session('message'))
            <div id="mensaje" class="alert alert-success">
                
            </div>
        @endif
    <div id="detallePost">
            <div class="image">
                    <img src="{{ route('user.posts', ['user' => $posteador[0]->nick, 'filename' => $post[0]->image_path]) }}" />    
              </div>
              <hr>
              <div class="addcomentario">
              <form name="frmComentario" method="POST" action="{{ route('comment.save') }}">
                    {{ csrf_field() }}
                      <textarea name="content" id="" cols="50" rows="3"></textarea><br>
                      <input type="hidden" name="post" value="{{ $post[0]->id}}">
                      <input type="submit" value="Comentar">
                  </form>
              </div>
              <hr>
              <div class="comentarios col-sm-12">
                <h2>Comentarios ({{ count($comments) }})</h2>
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


   

@endsection