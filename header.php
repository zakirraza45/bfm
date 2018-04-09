<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>

      </head>
  <body <?php body_class(); ?>>
<!-- Top Navigation With Logo -->
      <div class="container-fluid bg-primary d-flex justify-content-center py-5"><a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/logo.png" class="img-fluid" alt="logo"></a></div>
      <!-- Main Navigation With Menu -->
      <nav class="navbar navbar-expand-lg navbar-dark p-0 bg-kochila border-0 m-0">
        <div class="container">
            <div class="navbar-brand px-2">        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
गृहपृष्ठ</a></div>
         <button class="navbar-toggler justify-content-center" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon float-right"></span>
         </button>
         <?php
            wp_nav_menu( array(
            'theme_location'  => 'primary',
            'menu_class'      => 'navbar-nav',
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarNav',
                        ));
            ?>
            
         
         </div>
      </nav>
      <!-- All Navigation Ends Here! -->
      <!-- Main Container starts here -->
      <div class="container">