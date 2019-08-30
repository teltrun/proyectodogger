<header class="main-header">
  <!-- Menú Lateral -->
  <?php
    $menuLateralDerecha=[
      "home" => "<i class='fas fa-paw'>",
      "timeline" => "<i class='fas fa-home'>",
      "perfil" => "<i class='fas fa-user'>",
      "FAQ" => "<i class='fas fa-question-circle'>",
    ];

  ?>

  <!-- Barra Gris Header -->
  <div class="contenedor_header">
    <!-- Lupa y hamburguesa-->
    @if (Auth::check())
      <div class="header_hamburguesa">
        <i class="material-icons hamburguesa">menu</i>
      </div>
    @endif

    <div class="header_izquierda">
      <i class="material-icons lupa">search</i>
    </div>

    <!-- Logo -->
    <div class="header_medio">
      <img class="imagen_logo"src="{{ asset('img/logo@2x.png') }}" alt="Logo Dogger">
    </div>

    <!-- Botones de registro y login -->
    <div class="reg-log-nav ">
      <!-- Right Side Of Navbar -->
      <ul>
          <!-- Authentication Links -->
          @if (Auth::guest())
              <li><a class="boton_perfil" href="{{ route('login') }}">Iniciar Sesión</a></li>
              <li><a class="boton_registrarse" href="{{ route('register') }}">Registrarse</a></li>
          @else

          <li class="user-avatar">@include('partials.avatar')</li>

          <li>
              <a class="boton_registrarse" href="#">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="drop-nav-reg-log">
                <li><a id="linkHeader" href="/config">Modificar Perfil</a></li>
                <li>
                    <a id="linkHeader" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesion</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                  </li>
              </ul>
              </li>
          @endif
      </ul>
  </div>
  </div>
  @if (Auth::check())
    <div class="menu_lateral_derecha">
      <ul>
        <?php
        foreach($menuLateralDerecha as $key => $valor): ?>
          <li><a href="" title="<?=$key?>"><?=$valor?></i></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="menu_lateral_izquierda">
      <ul>
        <li><a href="" data-toggle="modal" data-target="#exampleModal"><i class='fas fa-camera'></i> </a></li>
      </ul>
    </div>

    <!-- Modal de subir imagenes -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <div class="form-group comentarioSubirFoto">
                  <label for="message-text" class="col-form-label"></label>
                  <textarea class="form-control" id="message-text" name="description">Haz un comentario sobre esta foto o video...</textarea>
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
                <button type="submit" class="btn btn-primary botonPublicar">Publicar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
  @endif
</header>
