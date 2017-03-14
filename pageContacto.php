<?php
/*Template Name: contacto*/
 ?>
 <?php get_header();?>
  <div class="container">
  <div class="row">
    <div class="col-md-6 text-center">
      Av. Domingo Muñoz Chimalpain 92, Tadeo de Niza,
  43996 Cd Sahagún, Hgo.
      <div class="row">
        <div class="col-md-12">
          <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4464.870978211661!2d-98.57076241258046!3d19.776641561334856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDQ2JzM0LjYiTiA5OMKwMzQnMDMuNSJX!5e0!3m2!1ses!2smx!4v1487613407336" width="450" height="350" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
        </div>
      </div>
    </div>
      <div class="col-md-6">
        <form class="formulario" action="http://industriajemac.com.mx/wp-content/themes/metal_theme%20%28copia%29/enviar.php" method="post">
          <h2 class="tituloFormulario">contacto</h2>
          <input class="inputFormulario"type="text" name="Nombre" value="" placeholder="Nombre" required="">
          <input class="inputFormulario"type="text" name="Correo" value="" placeholder="Correo" required="">
          <input class="inputFormulario"type="text" name="Telefono" value="" placeholder="Telefono" required="">
          <textarea class="inputFormulario textFormulario"name="Mensaje" rows="8" cols="40" placeholder="Dejenos su mensaje" required=""></textarea>
          <input class="inputFormulario"type="submit" name="enviar" value="Enviar" id="botonn">

        </form>
      </div>
  </div>
</div>
<?php get_footer();?>
