<?php
/*Template Name: contacto*/
?>
<?php get_header();?>
<div class="container page-container">
  <h1 class="text-center page-title">Contacto</h1>
  <div class="row">
    <div class="col-md-6 text-center">
        <h2>Escribenos directamente o utiliza el formulario de la derecha <i class="fa fa-hand-o-right"></i></h2>
        <br>
        <ul class="contact-list">
        <li>
          <strong>Ventas</strong>
          <address class="">
            <a href="mailto:ventas@industriajemac.com.mx">ventas@industriajemac.com.mx</a>
          </address>
        </li>
        <li>
          <strong>Recursos Humanos</strong>
          <address class="">
            <a href="mailto:sgc@industriajemac.com.mx">sgc@industriajemac.com.mx</a>
          </address>
        </li>
        <li>
          <strong>Producción</strong>
          <address class="">
            <a href="mailto:produccion@industriajemac.com.mx">produccion@industriajemac.com.mx</a>
          </address>
        </li>
        <li>
          <strong>Contabilidad</strong>
          <address class="">
            <a href="mailto:contabilidad@industrijemac.com.mx">contabilidad@industrijemac.com.mx</a>
          </address>
        </li>
        <li>
          <strong>Ingeniería</strong>
          <address class="">
            <a href="mailto:calidad.ingenieria@industriajemac.com.mx">calidad.ingenieria@industriajemac.com.mx</a>
          </address>
        </li>
      </ul>
    </div>
    <div class="col-md-6">
      <form class="formulario" action="http://industriajemac.com.mx/wp-content/themes/metal_theme%20%28copia%29/enviar.php" method="post">
        <br>
        <input class="inputFormulario"type="text" name="Nombre" value="" placeholder="Nombre" required="">
        <input class="inputFormulario"type="text" name="Correo" value="" placeholder="Correo" required="">
        <input class="inputFormulario"type="text" name="Telefono" value="" placeholder="Telefono" required="">
        <textarea class="inputFormulario textFormulario"name="Mensaje" rows="8" cols="40" placeholder="Dejenos su mensaje" required=""></textarea>
        <input class="inputFormulario"type="submit" name="enviar" value="Enviar Mensaje" id="botonn">
      </form>
    </div>
  </div>
  <div class="row map-container">
    <address>
      <strong>Nuestra ubicación: </strong>
       Lote 25-4, Zona Industrial, Cd. Sahagún, Hidalgo, C.P. 43998
    </address>
    <div class="row">
      <div class="col-md-12">
        <div id="map"></div>
      </div>
    </div>
  </div>
</div>
<script>
  var marker;

    function initMap() {
      var myLatLng = {lat: 19.757173, lng: -98.594086};

      // Create a map object and specify the DOM element for display.
      var map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        scrollwheel: false,
        zoom: 14
      });

      // Create a marker and set its position.
      marker = new google.maps.Marker({
        map: map,
        animation: google.maps.Animation.DROP,
        position: myLatLng,
        title: 'Industria JEMAC'
      });
      marker.addListener('click', toggleBounce);
    }

    function toggleBounce() {
if (marker.getAnimation() !== null) {
  marker.setAnimation(null);
} else {
  marker.setAnimation(google.maps.Animation.BOUNCE);
}
}

  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDR57huOHud4jtKwYKCNBUVSkJwweDHVn0&callback=initMap"
      async defer></script>
<?php get_footer();?>
