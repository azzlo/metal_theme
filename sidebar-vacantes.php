
<div class="container page-container">
<div class="row">
  <div class="col-md-12">
    <h1 class="text-center page-title">Ultimas Vacantes</h1>
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
  <div class="col-md-12">
    <?php
    $args = array('cat' => 3);
    $category_posts = new WP_Query($args);
    if($category_posts->have_posts()) :
      while ($category_posts->have_posts()):
        $category_posts->the_post();
        ?>
        <div class="container page-container">
          <div class="row">
            <div class="col-md-11 contVacante">
              <article class="articuloVacante">
                <h3><?php the_title(); ?></h3>
                <p>
                  <?php the_excerpt(); ?>
                </p>
                <footer>
                  <div class=""><b>  <?php the_date(); ?></b>
                  </div>
                  <div class="">
                    <small><?php the_author(); ?></small>
                  </div>
                  <a href="<?php the_permalink(); ?>">Leer mas</a>
                </footer>
              </article>
            </div>
          </div>
        </div>
        <?php
          endwhile;
          else :
        ?>
        <h3 class="text-center">¡Vaya!, en este momento no contamos con vacantes. Vuelve pronto.</h3>
        <?php
          endif;
        ?>
    </div>
  </div>
</div>
