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
      Av. Domingo Muñoz Chimalpain 92, Tadeo de Niza,
      43996 Cd Sahagún, Hgo.
    </address>
    <div class="row">
      <div class="col-md-12">
        <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4464.870978211661!2d-98.57076241258046!3d19.776641561334856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDQ2JzM0LjYiTiA5OMKwMzQnMDMuNSJX!5e0!3m2!1ses!2smx!4v1487613407336" width="100%" height="350" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>
