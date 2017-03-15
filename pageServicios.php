<?php
/*Template Name: Page Servicios*/
?>

<?php get_header();?>
<div class="container page-container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center page-title">Nuestros Servicios</h1>
    </div>
    <div class="col-md-12">
      <div class="page-thumbnail">
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
          <div id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')">

          </div>
        <?php endif; ?>
      </div>
    </div>

    <div class="col-sm-12 service-container">
      <div class="row">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center service-title">Conformado</h2>
          </div>
        </div>
        <div class="col-md-6">
          <h3>Baikal</h3>
          <br>
          <p>
            PRENSA DE CORTINA  CNC
            DE 350 ton. Mesa de long. 3000mm
          </p>
          <img src="<?php bloginfo(stylesheet_directory)?>/img/baikal.JPG" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
        </div>
        <div class="col-md-6">
          <h3>Durman</h3>
          <p>
            Dos prensas de cortina CNC de 400 Ton. En tandem 8.600 Mts. De longitud total
          </p>
          <img src="<?php bloginfo(stylesheet_directory)?>/img/durman.jpg" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
        </div>
      </div>
    </div>



    <div class="col-sm-12 service-container">
      <div class="row">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center service-title">Corte</h2>
          </div>
        </div>
        <div class="col-md-6">
          <h3>Sierra cinta</h3>
          <p>
            Abertura 15"
          </p>
          <img src="<?php bloginfo(stylesheet_directory)?>/img/sierraCinta.JPG" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
        </div>
        <div class="col-md-6">
          <h3>Durman</h3>
          <p>
            Dos prensas de cortina CNC de 400 Ton. En tandem 8.600 Mts. De longitud total
          </p>
          <img src="<?php bloginfo(stylesheet_directory)?>/img/durman.jpg" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
        </div>
        <div class="col-md-6">
          <h3>Cizalla</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          </p>
          <img src="<?php bloginfo(stylesheet_directory)?>/img/jemac.jpg" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
        </div>
        <div class="col-md-6">
          <h3>Pantografo</h3>
          <p>
            Alta definicion, corte plasma, capacidad de corte de 1/2" espesor, cama de 3.5 MT.X14MT.
          </p>
          <img src="<?php bloginfo(stylesheet_directory)?>/img/pantografo.JPG" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
        </div>
      </div>
    </div>


    <div class="col-sm-12 service-container">
      <div class="row">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center service-title">Maquinado CNC</h2>
          </div>
        </div>
        <div class="col-md-6">
          <h3>????</h3>
          <p>
            1660X510X510 agregar velocidades maquinados en 3d Cambios de herramienta.
          </p>
          <img src="<?php bloginfo(stylesheet_directory)?>/img/maquinado2.jpg" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
        </div>
        <div class="col-md-6">
          <h3>????</h3>
          <p>
            450X500X1000 Agregar velocidades husillo
          </p>
          <img src="<?php bloginfo(stylesheet_directory)?>/img/maquinado1.jpg" alt="" class="imgServicio" style="width:70%; height:auto; border-radius:5px;">
        </div>
      </div>
    </div>


    <div class="col-sm-12 service-container">
      <div class="row">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center service-title">Maquinado</h2>
          </div>
        </div>
        <div class="col-md-6">
          <h3 class="text-center">Fresadora Vertical</h3>
          <p>????</p>
          <img src="<?php bloginfo(stylesheet_directory)?>/img/fresa2.JPG" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
        </div>
        <div class="col-md-6">



        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>
