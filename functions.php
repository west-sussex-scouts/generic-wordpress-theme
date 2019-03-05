<?php
add_theme_support( 'custom-logo', array(
	'height'      => 76,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

add_theme_support( 'post-formats', array( 'aside', 'quote' ) );
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

 $format = get_post_format();
 	if ( current_theme_supports( 'post-formats', $format ) ) {
 		printf( '<span class="entry-format">%1$s<a href="%2$s">%3$s</a></span>',
 			sprintf( '<span class="screen-reader-text">%s </span>', _x( 'Format', 'Used before post format.', 'twentysixteen' ) ),
 			esc_url( get_post_format_link( $format ) ),
 			get_post_format_string( $format )
 		);
 	}

?>
