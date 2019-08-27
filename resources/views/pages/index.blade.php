@extends('layouts/app')

@section('content')
</head>
  <body>
    <div class="carusel">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="perros/img_carrusel_1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="perros/img_carrusel_2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="perros/img_carrusel_4.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="contenedor_publicaciones">
      <div class="publicacion1" >
        <div class="info_publicacion">
          <i id="patita" class="material-icons">pets</i>
          <p class= invitacion_publicacion>¡Sumate a nosotros y subí fotos de tus perros!</p>
          <form class="" action="register" method="get">
            <button class= "boton_publicacion" type="submit" name="button">Registrarse</button>
          </form>
        </div>
      </div>
      <div class="publicacion">
        <img src="perros/imagen_4.jpg" alt="">
        <div class="texto_publicacion">
          <p class= usuario_publicacion>@nombredeusuario</p>
          <p class= bajada_publicacion>Max sediento despues de una caminata por la playa</p>
          <div class="etiquetas">
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
          </div>
        </div>
      </div>
      <div class="publicacion">
        <img src="perros/imagen_5.jpg" alt="">
        <div class="texto_publicacion">
          <p class= usuario_publicacion>@nombredeusuario</p>
          <p class= bajada_publicacion>Max sediento despues de una caminata por la playa</p>
          <div class="etiquetas">
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
          </div>
        </div>
      </div>
      <div class="publicacion">
        <img src="perros/imagen_6.jpg" alt="">
        <div class="texto_publicacion">
          <p class= usuario_publicacion>@nombredeusuario</p>
          <p class= bajada_publicacion>Max sediento despues de una caminata por la playa</p>
          <div class="etiquetas">
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
          </div>
        </div>
      </div>
      <div class="publicacion">
        <img src="perros/imagen_7.jpg" alt="">
        <div class="texto_publicacion">
          <p class= usuario_publicacion>@nombredeusuario</p>
          <p class= bajada_publicacion>Max sediento despues de una caminata por la playa</p>
          <div class="etiquetas">
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
          </div>
        </div>
      </div>
      <div class="publicacion">
        <img src="perros/imagen_15.jpg" alt="">
        <div class="texto_publicacion">
          <p class= usuario_publicacion>@nombredeusuario</p>
          <p class= bajada_publicacion>Max sediento despues de una caminata por la playa</p>
          <div class="etiquetas">
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
          </div>
        </div>
      </div>
      <div class="publicacion">
        <img src="perros/imagen_9.jpg" alt="">
        <div class="texto_publicacion">
          <p class= usuario_publicacion>@nombredeusuario</p>
          <p class= bajada_publicacion>Max sediento despues de una caminata por la playa</p>
          <div class="etiquetas">
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
          </div>
        </div>
      </div>
      <div class="publicacion">
        <img src="perros/imagen_10.jpg" alt="">
        <div class="texto_publicacion">
          <p class= usuario_publicacion>@nombredeusuario</p>
          <p class= bajada_publicacion>Max sediento despues de una caminata por la playa</p>
          <div class="etiquetas">
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
          </div>
        </div>
      </div>
      <div class="publicacion">
        <img src="perros/imagen_11.jpg" alt="">
        <div class="texto_publicacion">
          <p class= usuario_publicacion>@nombredeusuario</p>
          <p class= bajada_publicacion>Max sediento despues de una caminata por la playa</p>
          <div class="etiquetas">
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
          </div>
        </div>
      </div>
      <div class="publicacion">
        <img src="perros/imagen_5.jpg" alt="">
        <div class="texto_publicacion">
          <p class= usuario_publicacion>@nombredeusuario</p>
          <p class= bajada_publicacion>Max sediento despues de una caminata por la playa</p>
          <div class="etiquetas">
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
          </div>
        </div>
      </div>
      <div class="publicacion">
        <img src="perros/imagen_13.jpg" alt="">
        <div class="texto_publicacion">
          <p class= usuario_publicacion>@nombredeusuario</p>
          <p class= bajada_publicacion>Max sediento despues de una caminata por la playa</p>
          <div class="etiquetas">
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
          </div>
        </div>
      </div>
      <div class="publicacion">
        <img src="perros/imagen_9.jpg" alt="">
        <div class="texto_publicacion">
          <p class= usuario_publicacion>@nombredeusuario</p>
          <p class= bajada_publicacion>Max sediento despues de una caminata por la playa</p>
          <div class="etiquetas">
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
          </div>
        </div>
      </div>
      <div class="publicacion">
        <img src="perros/imagen_10.jpg" alt="">
        <div class="texto_publicacion">
          <p class= usuario_publicacion>@nombredeusuario</p>
          <p class= bajada_publicacion>Max sediento despues de una caminata por la playa</p>
          <div class="etiquetas">
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
          </div>
        </div>
      </div>
      <div class="publicacion">
        <img src="perros/imagen_11.jpg" alt="">
        <div class="texto_publicacion">
          <p class= usuario_publicacion>@nombredeusuario</p>
          <p class= bajada_publicacion>Max sediento despues de una caminata por la playa</p>
          <div class="etiquetas">
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
          </div>
        </div>
      </div>
      <div class="publicacion">
        <img src="perros/imagen_12.jpg" alt="">
        <div class="texto_publicacion">
          <p class= usuario_publicacion>@nombredeusuario</p>
          <p class= bajada_publicacion>Max sediento despues de una caminata por la playa</p>
          <div class="etiquetas">
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
          </div>
        </div>
      </div>
      <div class="publicacion">
        <img src="perros/imagen_13.jpg" alt="">
        <div class="texto_publicacion">
          <p class= usuario_publicacion>@nombredeusuario</p>
          <p class= bajada_publicacion>Max sediento despues de una caminata por la playa</p>
          <div class="etiquetas">
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
          </div>
        </div>
      </div>
      <div class="publicacion">
        <img src="perros/imagen_14.jpg" alt="">
        <div class="texto_publicacion">
          <p class= usuario_publicacion>@nombredeusuario</p>
          <p class= bajada_publicacion>Max sediento despues de una caminata por la playa</p>
          <div class="etiquetas">
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta2
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta3
            </p>
          </div>
        </div>
      </div>
      <div class="publicacion">
        <img src="perros/imagen_6.jpg" alt="">
        <div class="texto_publicacion">
          <p class= usuario_publicacion>@nombredeusuario</p>
          <p class= bajada_publicacion>Max sediento despues de una caminata por la playa</p>
          <div class="etiquetas">
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta1
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta2
            </p>
            <p class= etiquetas_publicacion>
              <i id="etiquetita" class="material-icons">label</i>etiqueta3
            </p>
          </div>
        </div>
      </div>
     </div>
   </div>
  </body>
</html>

@endsection
