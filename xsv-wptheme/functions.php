<?php
/**
 * BSoJ functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BSoJ
 * @since BSoJ 1.0
 */


if ( ! function_exists( 'bsoj_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since BSoJ 1.0
	 *
	 * @return void
	 */
	function bsoj_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'bsoj' );
	}

endif;

add_action( 'after_setup_theme', 'bsoj_support' );

if ( ! function_exists( 'bsoj_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since BSoJ 1.0
	 *
	 * @return void
	 */
	function bsoj_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'bsoj-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'bsoj-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'bsoj_styles' );


// updater for WordPress.com themes
if ( is_admin() )
	include dirname( __FILE__ ) . '/inc/updater.php';

function add_favicon() {
	echo '<link rel="apple-touch-icon" href="' . get_template_directory_uri() . '/assets/favicon.ico">';
    echo '<link rel="shortcut icon" href="' . get_template_directory_uri() . '/assets/favicon.ico">';
    echo '<link rel="icon" href="' . get_template_directory_uri() . '/assets/favicon.ico">';
	echo '<!-- Primary Meta Tags -->
	<title>XSValley - Fulfill your full potential!</title>
	<meta name="title" content="XSValley - Fulfill your full potential!" />
	<meta name="description" content="XSValley is an exclusive program designed to connect the brightest minds in Finland to the vibrant startup ecosystem of Silicon Valley! Embark on a life-changing journey to Silicon Valley, where innovation meets opportunity." />
	<meta property="og:image" content="' . get_template_directory_uri() . '/assets/favicon.png">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://xsvalley.com/" />
	<meta property="og:title" content="XSValley - Fulfill your full potential!" />
	<meta property="og:description" content="XSValley is an exclusive program designed to connect the brightest minds in Finland to the vibrant startup ecosystem of Silicon Valley! Embark on a life-changing journey to Silicon Valley, where innovation meets opportunity." />
	
	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image" />
	<meta property="twitter:url" content="https://xsvalley.com/" />
	<meta property="twitter:title" content="XSValley - Fulfill your full potential!" />
	<meta property="twitter:description" content="XSValley is an exclusive program designed to connect the brightest minds in Finland to the vibrant startup ecosystem of Silicon Valley! Embark on a life-changing journey to Silicon Valley, where innovation meets opportunity." />
	<meta property="twitter:image" content="https://metatags.io/images/meta-tags.png" />';
}
add_action('wp_head', 'add_favicon');

add_filter( 'show_admin_bar', '__return_false' );

function custom_login_logo() {
    echo '<style type="text/css">
        .login h1 a {
          background-image: url(' . get_template_directory_uri() . '/assets/images/xsv-logo-big.png) ;
          background-position: center center;
		  background-size: contain;
	      width: 100%;
        }
    </style>';
}
add_action('login_head', 'custom_login_logo');