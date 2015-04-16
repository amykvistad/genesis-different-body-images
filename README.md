# genesis-different-body-images
Show different background images on pages and posts on StudioPress Genesis themes.


Add the following code to your functions.php file:

/* Adds custom body class to the head - the body-custom-image class background image will appear on every page or post that is not the front page
add_filter( 'body_class', 'sp1_body_class' );
function sp1_body_class( $classes ) {
	if ( !is_front_page( ))
		$classes[] = 'body-custom-image';
		return $classes;
}

//* Adds custom body class to the head - the body-custom-image-contact class background image will appear on the contact page
add_filter( 'body_class', 'sp2_body_class' );
function sp2_body_class( $classes ) {
	if ( is_page('contact' ))
		$classes[] = 'body-custom-image-contact';
		return $classes;
}

Add the following code to your style.css file:

.body-custom-image {
	background: url(images/image-name.jpg) top center no-repeat!important;
	}
	
.body-custom-image-contact {
	background: url(images/image-name-2.jpg) top center no-repeat!important;
}

Add the custom body class to your page or post:

When editing the page, go to Layout Settings-Custom Body Settings and add your custom body class.

