
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
          <figure>
            <img src="<?php bloginfo(stylesheet_directory)?>/img/baikal.JPG" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
            <figcaption>  PRENSA DE CORTINA  CNC
              DE 350 ton. Mesa de long. 3000mm</figcaption>
          </figure>

        </div>
        <div class="col-md-6">
          <h3>Durman</h3>
          <br>
          <figure><img src="<?php bloginfo(stylesheet_directory)?>/img/durman.jpg" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
          <figcaption>Dos prensas de cortina CNC de 400 Ton. En tandem 8.600 Mts. De longitud total</figcaption></figure>
        </div>
        <div class="col-md-6">
          <h3>Convencional</h3>
          <br>
          <figure><img src="<?php bloginfo(stylesheet_directory)?>/img/convencional.JPG" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
          <figcaption>Prensa de cortina de 80 ton.  mecánica 2 mts. Longitud bancada</figcaption></figure>
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



          <img src="<?php bloginfo(stylesheet_directory)?>/img/sierraCinta.JPG" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
          <figcaption>Abertura 15"</figcaption>
        </div>
        <div class="col-md-6">
          <h3>Durman</h3>

          <img src="<?php bloginfo(stylesheet_directory)?>/img/durman.jpg" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
          <figcaption>Dos prensas de cortina CNC de 400 Ton. En tandem 8.600 Mts. De longitud total</figcaption>
        </div>

        <div class="col-md-6">
          <h3>Pantografo</h3>

          <img src="<?php bloginfo(stylesheet_directory)?>/img/pantografo.JPG" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
          <figcaption>Alta definicion, corte plasma, capacidad de corte de 1/2" espesor, cama de 3.5 MT.X14MT.</figcaption>
        </div>
        <div class="col-md-6">

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
          <h3>MAZAK VTC</h3>

          <img src="<?php bloginfo(stylesheet_directory)?>/img/maquinado2.jpg" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
          <figcaption>1660X510X510 agregar velocidades maquinados en 3d Cambios de herramienta.</figcaption>
        </div>
        <div class="col-md-6">
          <h3>MVB-610</h3>

          <img src="<?php bloginfo(stylesheet_directory)?>/img/maquinado1.jpg" alt="" class="imgServicio" style="width:70%; height:auto; border-radius:5px;">
          <figcaption class="mvb">  450X500X1000 Agregar velocidades husillo</figcaption>
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

          <figure><img src="<?php bloginfo(stylesheet_directory)?>/img/fresa2.JPG" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
          <figcaption>1700x500x400 Hidraulica de alta produccion (copiadora)</figcaption></figure>
        </div>
        <div class="col-md-6">
          <h3 class="text-center">Fresadora Cabezal Universal</h3>

          <figure><img src="<?php bloginfo(stylesheet_directory)?>/img/fresa1.JPG" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
          <figcaption>Agregar movimientos automaticos y capacidades XYZ</figcaption></figure>
        </div>
      </div>
    </div>
    <div class="col-sm-12 service-container">
      <div class="row">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center service-title">Soldadura</h2>
          </div>
        </div>
        <div class="col-md-6">
          <h3 class="text-center">Soldadora arco sumergido</h3>

          <figure><img src="<?php bloginfo(stylesheet_directory)?>/img/soldadora.jpg" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
          </figure>
        </div>
        <div class="col-md-6">
          <h3 class="text-center">Maquinas Soldadoras</h3>

          <figure><img src="<?php bloginfo(stylesheet_directory)?>/img/maquinaSoldadora.jpg" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
          <figcaption>8 Maquinas soldadoras 1 maquina p/bicelado</figcaption></figure>
        </div>
      </div>
    </div>
    <div class="col-sm-12 service-container">
      <div class="row">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center service-title">Areas de trabajo</h2>
          </div>
        </div>
        <div class="col-md-6">
          <h3 class="text-center">Aréa de inspección</h3>

          <figure><img src="<?php bloginfo(stylesheet_directory)?>/img/area1.jpg" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
          <figcaption>Area de inspeccion con mesa de marmol e instrumentos de medicion</figcaption></figure>
        </div>
        <div class="col-md-6">
          <h3 class="text-center">Aréa de pintura</h3>

          <figure><img src="<?php bloginfo(stylesheet_directory)?>/img/pintura2.JPG" alt="" class="imgServicio" style="width:100%; height:auto; border-radius:5px;">
         </figure>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>
