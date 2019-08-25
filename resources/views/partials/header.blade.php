<header>
  <!-- Menú Lateral -->
  <?php
    $menuLateralDerecha=[
      "home" => "<i class='fas fa-paw'>",
      "timeline" => "<i class='fas fa-home'>",
      "perfil" => "<i class='fas fa-user'>",
      "FAQ" => "<i class='fas fa-question-circle'>",
    ];
  $usuario = "";

    $menuLateralIzquierda=[
      "Subir una Foto" => "<i class='fas fa-camera'>",
    ];
  $usuario = "";
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
    <div class="collapse navbar-collapse header_derecha" id="app-navbar-collapse">
      <!-- Left Side Of Navbar -->
      <ul class="nav navbar-nav">
          &nbsp;
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @if (Auth::guest())
              <li><a class="boton_perfil" href="{{ route('login') }}">Login</a></li>
              <li><a class="boton_registrarse" href="{{ route('register') }}">Register</a></li>
          @else
              <li class="dropdown">
                  <a class="boton_registrarse" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                    <li>
                    <a href="/config">
                        Modificar Perfil
                        </a>
                    </li>
                      <li>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Cerrar sesion
                          </a>

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
          <li><a href="<?= $key?>.php" title="<?=$key?>"><?=$valor?></i></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="menu_lateral_izquierda">
      <ul>
        <?php
        foreach($menuLateralIzquierda as $key => $valor): ?>
          <li><a href="<?= $key?>.php" title="<?=$key?>"><?=$valor?></i></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  @endif
</header>
