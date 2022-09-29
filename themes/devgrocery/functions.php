<?php
/**
 * devgrocery functions and definitions
 * @package devgrocery
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function wp_add_google_fonts()
{
   wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Montserrat&display=swap', false);
}
add_action('wp_enqueue_scripts', 'wp_add_google_fonts');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function devgrocery_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on devgrocery, use a find and replace
		* to change 'devgrocery' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'devgrocery', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
	*/

	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'devgrocery' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'devgrocery_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'devgrocery_setup' );

/*
 * @global int $content_width
 */
function devgrocery_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'devgrocery_content_width', 640 );
}
add_action( 'after_setup_theme', 'devgrocery_content_width', 0 );

/**
 * Register widget area.
 */
function devgrocery_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'devgrocery' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'devgrocery' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'devgrocery_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function devgrocery_scripts() {
	wp_enqueue_style( 'devgrocery-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'devgrocery-main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css');
	wp_style_add_data( 'devgrocery-style', 'rtl', 'replace' );

	wp_enqueue_script( 'devgrocery-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', array('jquery') );
	wp_enqueue_script( 'devgrocery-script', get_template_directory_uri() . '/js/script.js', array('jquery') );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'devgrocery_scripts' );


function random_number_function()
{
    echo rand(2, 10);
}

add_action('random_number', 'random_number_function');


add_filter('wc_product_sku_enabled', 'woocustomizer_remove_product_sku');

function woocustomizer_remove_product_sku($sku)
{
    return false;
}
// hook in 
add_filter('wooecommerce_checkout_fields', 'custom_override_checkout_fields');

function custom_override_checkout_fields($fields)
{

    $fields['billing']['billing_company']['label'] = "Company Name or Last Name";

    return $fields;
}

// coupon 

add_action('woocommerce_before_cart', 'add_coupon_notice');
function add_coupon_notice()
{
    $cart_total = WC()->cart->get_subtotal();
    $minimum_amount = 1000;

    $coupon_code = 'Godevfood2022';
    global $woocommerce;
    $c = new WC_Coupon($coupon_code);

    $minimum_amount = $c->get_minimum_amount();

    wc_clear_notices();

    if ($cart_total < $minimum_amount) {
        WC()->cart->remove_coupon('Godevfood2022');
        wc_print_notice("Shopping for" . $minimum_amount - $cart_total . "because it gets 25% discount!");
    } else {
        WC()->cart->apply_coupon('Godevfood2022');
        wc_print_notice("You got 25% discounts");
    }

    wc_clear_notices();
}

add_action('woocommerce_before_single_product_summary', 'add_product_designer', 1);
function add_product_designer()
{
  //  echo "<h3>";
  echo get_field('designer');
}


/*  WooCommerce
 */

 add_theme_support('woocommerce');

// Remove WooCommerce Styles
function remove_woocommerce_styles($enqueue_styles) {
	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	// unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	// unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}

add_filter( 'woocommerce_enqueue_styles',  'remove_woocommerce_styles');


