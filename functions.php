<?php

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add custom body class to the head
add_filter( 'body_class', 'sp1_body_class' );
function sp1_body_class( $classes ) {
	if ( !is_front_page( ))
		$classes[] = 'body-custom-image';
		return $classes;
}

//* Add custom body class to the head
add_filter( 'body_class', 'sp2_body_class' );
function sp2_body_class( $classes ) {
	if ( is_page('contact' ))
		$classes[] = 'body-custom-image-contact';
		return $classes;
}

//* Add custom body class to the head
add_filter( 'body_class', 'sp3_body_class' );
function sp3_body_class( $classes ) {
	if ( is_page('services' ))
		$classes[] = 'body-custom-image-services';
		return $classes;
}

//* Add custom body class to the head
add_filter( 'body_class', 'sp4_body_class' );
function sp4_body_class( $classes ) {
	if ( is_page('gallery' ))
		$classes[] = 'body-custom-image-gallery';
		return $classes;
}

);
