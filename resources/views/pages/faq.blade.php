@extends('layouts.app')

@section('content')
<!-- Imagen-->
<div class="">

</div>

<!-- Acordion-->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-xl-10 col-sm-12">
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Uso de Dogger
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse show infoAcordion" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              Escribe el Dogg en el cuadro para doggear ubicado en la parte superior de la cronología de perfil, o haz clic en el botón Doggear ubicado en la barra de navegación lateral.
              Puedes incluir hasta 4 fotos, un archivo GIF o un video en tu Dogg.
              Haz clic en el botón Doggear para publicar el Tweet en tu perfil. <br>
              Las etiquetas de fuente del Dogg te ayudan a comprender mejor cómo se publicó. Esta información adicional ofrece más contexto sobre el Dogg y su autor. Si no reconoces la fuente, es posible que quieras obtener más información para decidir en qué medida confías en el contenido.
              Haz clic en un Dogg para ir a la página de detalles.
              En algunos casos, podrás ver el nombre de un cliente externo, lo que indica que el Dogg provino de una aplicación ajena a Dogger. A veces, los autores utilizan aplicaciones de clientes externos para administrar sus Doggs, administrar campañas de marketing, medir el resultado de la publicidad, proporcionar soporte al cliente y segmentar a ciertos grupos de personas para orientar los anuncios. En algunos casos, los Doggs y las campañas son creaciones directas de seres humanos, mientras que, en otras circunstancias, pueden ser el producto automático de una aplicación. Visita las páginas de nuestros socios para obtener una lista de fuentes externas comunes.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                ¿Cómo publicar?
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse infoAcordion" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              Escribe el Dogg en el cuadro "¿Que está pasando?" ubicado en la parte superior de la cronología o haz clic en el botón para Doggear.
              Haz clic en el botón de galería  para subir una foto o un GIF desde tu computadora.
              Para buscar y seleccionar un GIF de la biblioteca de GIF, haz clic en el ícono de GIF .
              Nota: No se pueden incluir GIF animados en Doggs con varias imágenes. Puedes publicar un solo GIF por Dogg.
              Una vez que selecciones la foto o el GIF, la imagen se adjuntará al Dogg en tamaño completo. Puedes seleccionar hasta 4 fotos paradoggear a la vez.
              Haz clic en Doggear para publicar el Dogg.
              Consejo: También puedes enviar fotos y GIF en Mensajes Directos.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                ¿Cómo buscar en DOGGER?
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse infoAcordion" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              Escribe tu consulta de búsqueda en el cuadro de búsqueda, en la parte superior de la página.
              Los resultados mostrarán una combinación de Doggs, fotos, cuentas, etc.
              Para filtrar los resultados, haz clic en Destacados, Más recientes, Personas, Fotos, Videos, Noticias (que se encuentran en la parte superior de tus resultados de búsqueda).
              Haz clic en el menú desplegable de Filtros de búsqueda para filtrar los resultados según De cualquier usuario o Personas que sigues, Raza y En cualquier lugar o Cerca de ti.
              Además, tienes la opción de desactivar el filtro de calidad, que mejora la calidad del contenido de tus resultados de búsqueda. También puedes seleccionar otro idioma o realizar una búsqueda avanzada.
              Haz clic en el ícono de contenido adicional  situado a la derecha de la página de resultados de búsqueda para ver más opciones:
              Haz clic en Configuración de la búsqueda para desactivar (o volver a activar) la búsqueda segura a fin de filtrar los resultados de búsqueda:
              La configuración de búsqueda segura incluye Ocultar contenido confidencial y Eliminar cuentas bloqueadas y silenciadas. Quita la marca de la casilla para desactivar cualquiera de las dos opciones; puedes reactivarlas en cualquier momento. Nota: Esta configuración puede tardar varios minutos en activarse.
              Haz clic en Guardar esta búsqueda para guardar el término de tu búsqueda.
              Haz clic en Insertar esta búsqueda para crear una herramienta de búsqueda para un sitio web. Si quieres más información sobre este tema, consulta la documentación para desarrolladores.
            </div>
          </div>
        </div>
      </div>
      <div class="preguntasfrecuentes">
        <h3 class="pftitulo">Preguntas frecuentes</h3>
          <div class="adentroPreguntasFrecuentes">
            <section>
              <article class="infoPreguntasFaq">
                <p class="pregunta">¿Como bloquear cuentas?</p>
                <ul class="listasFaq">
                  <li>El bloqueo es una característica que te ayuda a controlar la manera en la que interactúas con otras cuentas en Dogger. Esta característica ayuda a los usuarios a restringir la capacidad de otras cuentas de contactarlos, ver sus Doggs y seguirlos.</li>
                  <li>Nota: Obtén información sobre nuestras opciones avanzadas de bloqueo para obtener detalles sobre esta función.</li>
                  <li>Algunos puntos importantes que debes saber sobre el bloqueo:</li>
                  <li>Las cuentas que bloqueas no te pueden seguir y tú no puedes seguir una cuenta que hayas bloqueado.</li>
                  <li>Si bloqueas una cuenta que sigues actualmente, dejarás de seguirla (y dicha cuenta dejará de seguirte a ti). Si decides desbloquear la cuenta, deberás seguirla de nuevo.</li>
                  <li>Las cuentas bloqueadas no reciben una notificación que les informe que han sido bloqueadas. Sin embargo, si una cuenta bloqueada visita el perfil de la que la ha bloqueado, verá que ha sido bloqueada (en cambio, cuando se utiliza la característica silenciar, la cuenta silenciada no puede ver que fue silenciada).</li>
                  <li>Si bloqueas una cuenta y esta elige denunciarte, cualquiera de tus Doggs que directamente mencionen esa cuenta estarán a su disposición para que pueda verlos y adjuntarlos durante el proceso de la denuncia.</li>
                  <li>No recibirás notificaciones de las cuentas que bloquees ni de las cuentas que no sigas y que te mencionen en conversaciones iniciadas por las cuentas que bloqueaste. En cambio, sí verás las notificaciones de las cuentas que sigues y que te mencionan en una conversación iniciada por una cuenta que bloqueaste. Si deseas ver todas tus menciones, busca tu nombre de usuario.</li>
                </ul>
              </article>
              <article class="infoPreguntasFaq">
                <p class="pregunta">¿Como personalizar tu perfil?</p>
                <ol class="listasFaq">
                  <li>Inicia sesión en dogger.com.</li>
                  <li>Dirígete a tu perfil.</li>
                  <li>Pulsa o haz clic en el botón Editar perfil para poder editar los siguientes elementos de tu cuenta:</li>
                  <li>Imagen de encabezado (el tamaño recomendado es de 1500 x 500 píxeles)</li>
                  <li>Imagen de perfil (el tamaño recomendado es de 400 x 400 píxeles)</li>
                  <li>Nombre</li>
                  <li>Biografía (160 caracteres como máximo)</li>
                  <li>Ubicación</li>
                  <li>Sitio web</li>
                  <li>Color de motivo (solo se puede editar en twitter.com)</li>
                  <li>Fecha de nacimiento</li>
                  <li>Pulsa o haz clic en cualquiera de estas áreas para hacer cambios.</li>
                  <li>Si quieres cambiar una imagen de encabezado o de perfil, pulsa o haz clic en el ícono de la cámara y selecciona Cargar imagen o Eliminar.</li>
                  <li>Puedes elegir la opción Mostrar mi perfil de Periscope en tu perfil de Dogger (disponible si vinculaste tu cuenta de Dogger a tu cuenta de Periscope).</li>
                  <li>Pulsa o haz clic en Guardar cambios.</li>
                </ol>
              </article>
              <article class="infoPreguntasFaq">
                <p class="pregunta">¿Como cambiar la configruacion del país?</p>
                <ul class="listasFaq">
                  <li>Tu cuenta de Dogger está asociada al país donde vives. La información del país nos ayuda a personalizar tu experiencia en Dogger y puede influir en el tipo de contenido que se nos permite mostrar. Esta información también permite a Dogger a saber si tienes la edad mínima requerida para usar nuestros servicios en tu país. Para consultar y cambiar tu configuración de país, ingresa a la configuración de su cuenta en dogger.com, iOS y Android.
                    Según se estipula en la Política de privacidad de Dogger, el control de la información de los usuarios que residen en Estados Unidos está a cargo de Dogger, Inc., 1355 Market Street, Suite 900, San Francisco, CA 94103, EE. UU. Si reside fuera de Estados Unidos, el controlador de datos responsable de su información es Dogger International Company, una empresa irlandesa con oficina registrada en One Cumberland Place, Fenian Street, Dublin 2 D02 AX07, Irlanda. No obstante, y según se estipula en los Términos de servicio y en las Reglas de Dogger, la publicación de sus Doggs y demás contenidos que envíe a través de los servicios de Dogger es de su responsabilidad absoluta y solo usted la controla.</li>
                </ul>
              </article>
              <article class="infoPreguntasFaq">
                <p class="pregunta">¿Cuándo y mediante qué proceso mis Publicaciones no son visibles para todos los usuarios?</p>
                <ul class="listasFaq">
                  <li>Los usuarios pueden expresarse libremente en Twitter siempre y cuando no incumplan las Reglas de Twitter ni los Términos de servicio de Twitter. A menos que tus Tweets estén protegidos, cualquier usuario de Twitter podrá verlos.</li>
                  <li>No bloqueamos, limitamos ni eliminamos contenido sobre la base de las ideas u opiniones de una persona. En algunas situaciones, es posible que tu Tweet no pueda ser visto por todos. Por ejemplo:</li>
                  <li>Comportamiento abusivo y actividades de spam. Cuando se denuncian o detectan abusos o manipulación de nuestro servicio, es posible que tomemos medidas para limitar el alcance de los Tweets de una persona. Obtén más información sobre las medidas que tomamos, incluida la suspensión temporal o permanente de las cuentas o la limitación de su funcionalidad.</li>
                  <li>Herramientas y controles. Desarrollamos funciones de control (como silenciar, bloquear y el filtro de calidad) que les permiten a los usuarios controlar lo que ven y con quiénes interactúan en Twitter. En esos casos, las personas que te bloqueen o silencien no verán tus Tweets. Obtén más información sobre estos controles.</li>
                  <li>Experimentos. Siempre trabajamos para mejorar la experiencia de Twitter, que incluye la cronología de inicio, las conversaciones y la búsqueda. Mientras probamos maneras de limitar o eliminar el abuso en Twitter, es posible que algunos Tweets tengan un alcance limitado. Obtén más información sobre cómo buscamos el contenido más relevante para mostrarle a los usuarios.</li>
                  <li>Asuntos legales. Podemos limitar el alcance de un Tweet si este incumple alguna ley vigente.</li>
                  <li>Limitaciones técnicas. En algunas ocasiones, errores del producto pueden evitar que se muestre un Tweet. Además, cuando hay un volumen excesivo de respuestas a un Tweet, es posible que nuestra plataforma no pueda mostrarlas todas. Utilizamos la cuenta @TwitterSeguro para notificar a la comunidad cuando tenemos problemas técnicos. Obtén más información.</li>
                  <li>Si deseas obtener más información sobre las instancias específicas en las que podemos limitar el alcance de un Tweet, consulta esta página del Centro de ayuda.</li>
                </ul>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
