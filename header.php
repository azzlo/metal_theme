<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo(title);?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather|Lora:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo(stylesheet_url);?>">
    <script src="<?php bloginfo(stylesheet_directory);?>/js/bootstrap.min.js"></script>
  </head>
  <body>
    <header>
      <div class="divLogo container">
        <div class="row">
          <div class="col-md-4 col-xs-12">
            <div class="contenedorLogo">
              <a href="<?php bloginfo('url'); ?>"><img class="logoJemac"  src="<?php bloginfo(stylesheet_directory) ?>/img/logo.png"/></a>
            </div>
          </div>
          <div class="col-md-8 text-right  contactoHeaderContenedor">
            <div class="contactoHeader tel1">
              <p class="headerTelefono"><a href="tel:7919132313"><i class="fa fa-mobile" aria-hidden="true"> </i> (791) 913 2313</a></p>
            </div>
            <div class="contactoHeader">
              <p class="headerCorreo"><a href="mailto:ventas@industriajemac.com.mx"><i class="fa fa-envelope-o" aria-hidden="true"> </i> ventas@industriajemac.com.mx</a></p>
            </div>
          </div>
        </div>
      </div>
    </header>
<?php
  wp_nav_menu(
    array(
      'theme_location' => 'top-menu',
      'container' => 'nav',
      'menu_class' => 'nav_list'
    )
  )
 ?>
