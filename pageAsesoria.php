<?php
/*Template Name: Page Asesoría*/
?>
<?php get_header();?>
<div class="container page-container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center page-title">Asesoría</h1>
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
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <p class="font-big">
        Industrias JEMAC a través del área de desarrollo e ingeniería se ofrecen los servicios de asesoramiento técnico para desarrollo de productos de clientes externos y garantizarles el proceso del desarrollo de sus piezas, ofreciendo asistencia a los siguientes servicios:
      </p>
    </div>
    <div class="col-md-1"></div>
    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-8 contenedorAsesoria">
        <ul class="asesorias-ul">
          <li>
            <p>
              <i class="fa fa-star iconoEstrella"style="color:#C44741;" aria-hidden="true"> </i>
              Asesoramiento de materiales adecuados para sus diseños.
            </p>
          </li>
          <li>
            <p>
              <i class="fa fa-star iconoEstrella"style="color:#C44741;" aria-hidden="true"> </i>
              Asesoramiento en procesos de corte de plasma, segueta y maquinado.
            </p>
          </li>
          <li>
            <p>
              <i class="fa fa-star iconoEstrella"style="color:#C44741;" aria-hidden="true"> </i>
              Asesoramiento en desarrollos de soldadura.
            </p>
          </li>
          <li>
            <p>
              <i class="fa fa-star iconoEstrella"style="color:#C44741;" aria-hidden="true"> </i>
              Asesoramiento en procesos de pintura.
            </p>
          </li>
          <li>
            <p>
              <i class="fa fa-star iconoEstrella"style="color:#C44741;" aria-hidden="true"> </i>
              Asesoramiento en diseño.
            </p>
          </li>
          <li>
            <p>
              <i class="fa fa-star iconoEstrella"style="color:#C44741;" aria-hidden="true"> </i>
              Asesoramiento en procesos de limpieza con granalla o sand blast.
            </p>
          </li>
        </ul>
      </div>
      <div class="col-md-2">
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>
