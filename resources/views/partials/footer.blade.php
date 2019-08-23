<footer>
  <!-- Menú Inferior -->
  <?php
    $opciones=[
      "Información",
      "Asitencia",
      "Prensa",
      "Api",
      "Empleo",
      "Privacidad",
      "Condiciones",
      "Directorio",
      "Perfiles",
      "Hashtags"];
  ?>
  <div class="containerFooter">
    <ul class="listaOpcionesFooter">
      @foreach ($opciones as $opcion)
        <li class="cadaOpcionFooter">{{$opcion}}</li>
      @endforeach
    </ul>
  </div>
</footer>
