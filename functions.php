<?php
/**
 * Bruno Antichità — functions and definitions
 *
 * @package Bruno_Antichita
 */

if ( ! defined( 'BRUNO_VERSION' ) ) {
	define( 'BRUNO_VERSION', '1.0.0' );
}

/* ------------------------------------------------------------------
   1. Theme Setup
   ------------------------------------------------------------------ */
function bruno_setup() {

	// Make theme available for translation
	load_theme_textdomain( 'bruno-antichita', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title
	add_theme_support( 'title-tag' );

	// Enable featured images
	add_theme_support( 'post-thumbnails' );

	// Custom image sizes
	add_image_size( 'bruno-card', 600, 450, true );
	add_image_size( 'bruno-hero', 1200, 800, true );

	// Register navigation menus
	register_nav_menus( array(
		'primary'      => __( 'Menu Principale', 'bruno-antichita' ),
		'footer-links' => __( 'Link Footer', 'bruno-antichita' ),
	) );

	// HTML5 markup support
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );

	// Custom logo
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
add_action( 'after_setup_theme', 'bruno_setup' );

/* ------------------------------------------------------------------
   2. Enqueue Styles & Scripts
   ------------------------------------------------------------------ */
function bruno_scripts() {

	// Google Fonts
	wp_enqueue_style(
		'bruno-google-fonts',
		'https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Lato:wght@300;400;700;900&display=swap',
		array(),
		null
	);

	// Main stylesheet
	wp_enqueue_style(
		'bruno-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'bruno-google-fonts' ),
		BRUNO_VERSION
	);

	// Theme stylesheet (required by WP)
	wp_enqueue_style(
		'bruno-style',
		get_stylesheet_uri(),
		array( 'bruno-main' ),
		BRUNO_VERSION
	);

	// Main JS
	wp_enqueue_script(
		'bruno-main-js',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		BRUNO_VERSION,
		true
	);

	// Comment reply script
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bruno_scripts' );

/* ------------------------------------------------------------------
   3. Widgets
   ------------------------------------------------------------------ */
function bruno_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'bruno-antichita' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Sidebar opzionale.', 'bruno-antichita' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget', 'bruno-antichita' ),
		'id'            => 'footer-1',
		'description'   => __( 'Area widget nel footer.', 'bruno-antichita' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-heading">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'bruno_widgets_init' );

/* ------------------------------------------------------------------
   4. Customizer — Contact Info & WhatsApp
   ------------------------------------------------------------------ */
function bruno_customize_register( $wp_customize ) {

	// --- Contact Info Section ---
	$wp_customize->add_section( 'bruno_contact', array(
		'title'    => __( 'Informazioni Contatto', 'bruno-antichita' ),
		'priority' => 30,
	) );

	// Phone
	$wp_customize->add_setting( 'bruno_phone', array(
		'default'           => '+39 055 1234567',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bruno_phone', array(
		'label'   => __( 'Numero di Telefono', 'bruno-antichita' ),
		'section' => 'bruno_contact',
		'type'    => 'text',
	) );

	// WhatsApp
	$wp_customize->add_setting( 'bruno_whatsapp', array(
		'default'           => '39055XXXXXXX',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bruno_whatsapp', array(
		'label'       => __( 'Numero WhatsApp (senza +)', 'bruno-antichita' ),
		'description' => __( 'Formato: 39XXXXXXXXXX', 'bruno-antichita' ),
		'section'     => 'bruno_contact',
		'type'        => 'text',
	) );

	// WhatsApp prefilled message
	$wp_customize->add_setting( 'bruno_whatsapp_msg', array(
		'default'           => 'Buongiorno, vorrei una valutazione per alcuni oggetti.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bruno_whatsapp_msg', array(
		'label'   => __( 'Messaggio WhatsApp precompilato', 'bruno-antichita' ),
		'section' => 'bruno_contact',
		'type'    => 'text',
	) );

	// Email
	$wp_customize->add_setting( 'bruno_email', array(
		'default'           => 'info@brunoantichita.it',
		'sanitize_callback' => 'sanitize_email',
	) );
	$wp_customize->add_control( 'bruno_email', array(
		'label'   => __( 'Indirizzo Email', 'bruno-antichita' ),
		'section' => 'bruno_contact',
		'type'    => 'email',
	) );

	// Address
	$wp_customize->add_setting( 'bruno_address', array(
		'default'           => 'Viale Don Giovanni Minzoni 60/R, Firenze',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bruno_address', array(
		'label'   => __( 'Indirizzo', 'bruno-antichita' ),
		'section' => 'bruno_contact',
		'type'    => 'text',
	) );

	// Opening Hours
	$wp_customize->add_setting( 'bruno_orari', array(
		'default'           => 'Lun – Ven: 9:00 – 13:00 / 15:00 – 19:00 | Sab: su appuntamento',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'bruno_orari', array(
		'label'   => __( 'Orari di Apertura', 'bruno-antichita' ),
		'section' => 'bruno_contact',
		'type'    => 'text',
	) );
}
add_action( 'customize_register', 'bruno_customize_register' );

/* ------------------------------------------------------------------
   5. Helper Functions
   ------------------------------------------------------------------ */

/**
 * Return the WhatsApp URL with prefilled message.
 */
function bruno_whatsapp_url() {
	$number  = get_theme_mod( 'bruno_whatsapp', '39055XXXXXXX' );
	$message = get_theme_mod( 'bruno_whatsapp_msg', 'Buongiorno, vorrei una valutazione per alcuni oggetti.' );
	return 'https://wa.me/' . esc_attr( $number ) . '?text=' . rawurlencode( $message );
}

/**
 * Return the click-to-call link.
 */
function bruno_phone_url() {
	$phone = get_theme_mod( 'bruno_phone', '+39 055 1234567' );
	return 'tel:' . preg_replace( '/[^0-9+]/', '', $phone );
}

/**
 * Excerpt length.
 */
function bruno_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'bruno_excerpt_length' );

/**
 * Excerpt more text.
 */
function bruno_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'bruno_excerpt_more' );

/* ------------------------------------------------------------------
   6. Include additional files
   ------------------------------------------------------------------ */
require get_template_directory() . '/inc/template-tags.php';
