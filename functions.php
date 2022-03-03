<?php
/**
 * Deb Sheppard functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Deb_Sheppard
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'debsheppard_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function debsheppard_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Deb Sheppard, use a find and replace
		 * to change 'debsheppard' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'debsheppard', get_template_directory() . '/languages' );

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
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'debsheppard' ),
                'menu-2' => esc_html__( 'Mobile', 'debsheppard'),
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
				'debsheppard_custom_background_args',
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
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
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
endif;
add_action( 'after_setup_theme', 'debsheppard_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function debsheppard_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'debsheppard_content_width', 640 );
}
add_action( 'after_setup_theme', 'debsheppard_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function debsheppard_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'debsheppard' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'debsheppard' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'WooCommerce Sidebar', 'debsheppard' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'debsheppard' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'debsheppard' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'debsheppard' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'debsheppard_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function debsheppard_scripts() {
	$css_file = get_template_directory() . '/sass/style.scss';
    wp_enqueue_style( 'debsheppard-style', get_stylesheet_uri(), array(), filemtime($css_file) );
	wp_style_add_data( 'debsheppard-style', 'rtl', 'replace' );

	wp_enqueue_script( 'debsheppard-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'js-script', '/wp-content/themes/debsheppard-2021/js/custom.js', array(), _S_VERSION, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'debsheppard_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
// if ( class_exists( 'WooCommerce' ) ) {
// 	require get_template_directory() . '/inc/woocommerce.php';
// }

add_theme_support('woocommerce');

// Add continue shopping button to cart page

add_action('woocommerce_cart_coupon', 'madcow_continue_shopping');
function madcow_continue_shopping()
{
    echo '<a href="https://www.debsheppard.com/shop/" class="checkout-button button">Continue Shopping</a>';
}

// add_filter('woocommerce_add_to_cart_redirect', 'madcow_custom_add_to_cart_redirect');

// function madcow_custom_add_to_cart_redirect()
// {
//     global $woocommerce;
//     //Get product ID
//     $product_id = (int) apply_filters('woocommerce_add_to_cart_product_id', $_POST['add-to-cart']);

//     //Check if current product is the 30 day workshop
//     if ($product_id == 40526) {
//         $checkout_url = $woocommerce->cart->get_checkout_url();
//         return $checkout_url;
//         exit;
//     } else {
//         $cart_url = $woocommerce->cart->get_cart_url();
//         return $cart_url;
//         exit;
//     }
// }

add_action('woocommerce_before_cart_totals', 'madcow_custom_cart_message');
function madcow_custom_cart_message()
{
    $product_id      = 40526;
    $product_cart_id = WC()->cart->generate_cart_id($product_id);
    $in_cart         = WC()->cart->find_product_in_cart($product_cart_id);

    if ($in_cart) {

        echo '</p>Turn setbacks into triumphs in the 30-Day Energy Shift!<br/><br/>

        Weekly transformational video trainings: <strong>$200 value</strong><br/>
        Weekly Group Coaching with ME: <strong>$200 value</strong><br/>
        Daily energy shifting insights and exercises: <strong>$150 value</strong><br/>
        Private Community with like-minded souls: <strong>Priceless</strong><br/><br/>

        Total Value: <strong>$550</strong><br/>
        Today Only: <strong>$147</strong> <br/><br/>

        Course officially starts June 15!';

    }
}

// PODCASTS CUSTOM POST TYPE
add_action( 'init', 'madcowweb_register_podcast_cpt' );
function madcowweb_register_podcast_cpt() {
	$labels = [
		"name" => __( "Podcasts", "deb-sheppard" ),
		"singular_name" => __( "Podcast", "deb-sheppard" ),
	];

	$args = [
		"label" => __( "Podcasts", "deb-sheppard" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "podcast", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "thumbnail" ],
	];
	register_post_type( "podcast", $args );
}


add_action( 'init', 'register_podcast_shortcode');
function register_podcast_shortcode(){
	add_shortcode('podcast-posts', 'podcast_posts_function');
 }

 function podcast_posts_function() {
// Set the arguments for the query
$args = array(
	'numberposts'		=> -1,
	'post_type'		=> 'podcast',
	'orderby' 		=> 'date',
	'order' 		=> 'DESC',
	);

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<div class="podcast-container">
		<div>
			<a href="<?php the_permalink() ?>" rel="bookmark" >
				<?php if (get_field('podcast_image')): ?>
					<img src="<?php the_field('podcast_image'); ?>">

					<?php else: ?>
					<img src="https://www.debsheppard.com/wp-content/uploads/2020/12/podcast-fallback.jpg">
				<?php endif; ?>
			</a>
			<p class="date"><?php the_date(); ?></p>
			<h5><?php the_title(); ?></h5>
			<p class="excerpt"><?php the_field('excerpt'); ?></p>
			<a class="pod-link" href="<?php the_permalink() ?>" rel="bookmark" >Listen to Podcast</a>
		</div>
	</div>
<?php endwhile;

wp_reset_postdata();
}
