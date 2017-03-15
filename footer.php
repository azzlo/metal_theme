<footer id="containerPie">
    <section id="footer1">
      <div class="container" >
        <div class="row" style="height:auto;">
          <div class="col-md-6">
            <p class=""><i class="fa fa-volume-control-phone" aria-hidden="true"> </i> (791) 913 2313</p>
            <p class=""><i class="fa fa-map-marker" aria-hidden="true"> </i>  Lote 25-4, Zona Industrial, Cd. Sahagún, Hidalgo, C.P. 43998</p>
            <ul class="contact-list">
            <li>
              <address class="">
                <a href="mailto:ventas@industriajemac.com.mx"><i class="fa fa-envelope" aria-hidden="true"> </i> ventas@industriajemac.com.mx</a>
              </address>
            </li>
            <li>
              <a href="http://www.facebook.com"><i class="fa fa-facebook-official" aria-hidden="true"> </i> Siguenos en Facebook</a>
            </li>
          </ul>
          </div>
          <div class="col-md-6">
            <div id="mapFooter"></div>
          </div>
        </div>
      </div>
    </section>
    <section id="footer2">
      <div class="pieCopy">
        <div class="container">
          <small>Copyright. 2017, Industria JEMAC S. DE R.L. DE C.V. Todos los derechos reservados.</small><br>
          <small class="by-azzlo">Website by <a href="http://azzlo.co"><strong>azzlo</strong></a></small>
        </div>
      </div>
    </section>
  </footer>
  <script>
    var marker;

      function initMap() {
        var myLatLng = {lat: 19.757173, lng: -98.594086};

        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('mapFooter'), {
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


        if (document.getElementById('map') != null){
          var mapContact = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            scrollwheel: false,
            zoom: 14
          });

          markerc = new google.maps.Marker({
            map: mapContact,
            animation: google.maps.Animation.DROP,
            position: myLatLng,
            title: 'Industria JEMAC'
          });
          markerc.addListener('click', toggleBounce);
        }

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
   <?php wp_footer(); ?>
</body>
</html>
