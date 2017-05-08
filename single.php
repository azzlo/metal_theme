<?php get_header();?>
<div class="container page-container">
  <?php
  if(have_posts()) :
    while (have_posts()):
      the_post();
      ?>
      <div class="row">
        <div class="col-md-12">
          <h1>
            <?php the_title(); ?> <br>
            <small><?php the_date(); ?></small>
          </h1>
        </div>
      </div>
      <div class="row contVacante">
        <h3>Requisitos:</h3>
      </div>

      <article>
        <div class="row">
          <div class="col-md-12 articuloVacante">
            <p>
              <?php the_content(); ?>
            </p>
          </div>
          <div class="col-md-12 text-right">
            <a href="contacto" class="btn-cta">Ponerme en contacto</a>
          </div>
        </div>
      </article>
  <?php
    endwhile;
    else :
  ?>
      <h3 class="text-center">¡Vaya!, en este momento no tenemos vacantes, pronto publicaremos en esta sección.</h3>
  <?php
    endif;
  ?>
</div>
<?php get_footer();?>
