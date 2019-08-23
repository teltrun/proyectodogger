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
      <img class="imagen_logo"src="img/logo@2x.png" alt="Logo Dogger">
    </div>
    <!-- Botones de registro y login -->
    <div class="header_derecha">
      <ul>
        <li><a class="boton_perfil" href= "{{ route ('login')}}">Iniciar Sesion</a></li>
        <li><a class="boton_registrarse" href= "{{ route ('register')}}">Registrarse</a></li>
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
