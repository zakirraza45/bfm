<?php 
/**
 * Enqueue scripts and styles
 */
function Nepro_styles_scripts() { 
     
    wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css' ); 
     		$dependenciess = array('bootstrap-min');
		wp_enqueue_style( 'style', get_stylesheet_uri(), $dependenciess);
	
	wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.css' ); 

	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

}

function Nepro_scripts() {
$dependencies = array('jquery');
	wp_enqueue_script( 'jquery-slim', 'https://code.jquery.com/jquery-3.2.1.slim.min.js');
	wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), true );

	wp_enqueue_script( 'bootsstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), true);

	
	wp_enqueue_script( 'jquery-min', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js' );




}

add_action( 'wp_enqueue_scripts', 'Nepro_styles_scripts' );
add_action( 'wp_enqueue_scripts', 'Nepro_scripts' );

register_nav_menus (array(
  'primary' => 'Primary Menu',
));

function atg_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'primary') {
    $classes[] = 'nav-item p-2';
  }
  return $classes;
}
add_filter('nav_menu_css_class','atg_menu_classes',1,3);

add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );

function wpse156165_menu_add_class( $atts, $item, $args ) {
    $class = 'nav-link'; // or something based on $item
    $atts['class'] = $class;
    return $atts;
}

add_theme_support( 'post-thumbnails' ); 

		function slider_news() {
			$num = 1;
			$args = array(
		  'numberposts' => 3
		);
			$str = '<div id="carousel-slider" class="carousel slide" data-ride="carousel"><div class="carousel-inner" role="listbox">
		                     ';
		    $cap = "<div class=\"carousel-caption\">
		                           <a href=\"<?php the_permalink(); ?>\" >";
			$slide = addslashes($str);

			$latest_posts = get_posts( $args );
			$caption_slider = addslashes($cap);

			if ( $latest_posts ) {
		    foreach ( $latest_posts as $post ) :
		        setup_postdata( $post );
		        ?>
		            <?php if ($num=1) { ?>
		            	<div class="carousel-item active">
		        	<img src="<?php $featured_img_url = get_the_post_thumbnail_url($post->ID,'full'); echo $featured_img_url; ?>">
		            <?php echo "$cap <?php $nim = get_the_title( $post->ID ); echo $nim; ?> </a>"; ?>
		        </div>
		    </div>
		            <?php } ?> 
							<div class="carousel-item">
		        	<img src="<?php $featured_img_url = get_the_post_thumbnail_url($post->ID,'full'); echo $featured_img_url; ?>">
		            <?php echo "$cap <?php $nim = get_the_title( $post->ID ); echo $nim; ?> </a>"; ?>
		        </div>
		    </div>

		        
		       
		    <?php
		    endforeach; 
		    wp_reset_postdata();
		        }
		}

