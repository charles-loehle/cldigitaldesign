<?php
/**
 * cldigitaldesign-no-frameworks functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cldigitaldesign-no-frameworks
 */

if ( ! function_exists( 'cldigitaldesign_no_frameworks_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cldigitaldesign_no_frameworks_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on cldigitaldesign-no-frameworks, use a find and replace
		 * to change 'cldigitaldesign-no-frameworks' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cldigitaldesign-no-frameworks', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'cldigitaldesign-no-frameworks' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'cldigitaldesign_no_frameworks_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'cldigitaldesign_no_frameworks_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cldigitaldesign_no_frameworks_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cldigitaldesign_no_frameworks_content_width', 640 );
}
add_action( 'after_setup_theme', 'cldigitaldesign_no_frameworks_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cldigitaldesign_no_frameworks_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cldigitaldesign-no-frameworks' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cldigitaldesign-no-frameworks' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cldigitaldesign_no_frameworks_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cldigitaldesign_no_frameworks_scripts() {
	wp_enqueue_style( 'cldigitaldesign-no-frameworks-style', get_stylesheet_uri() );
	
	//wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.min.css' );
	
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/main.css' );
	
	wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/assets/css/normalize.css' );

	wp_enqueue_style( 'contact-form-style', get_template_directory_uri() . '/assets/css/contact-form.css' );
	
	wp_enqueue_style( 'responsive-style', get_template_directory_uri() . '/assets/css/responsive.css' );
	
	wp_enqueue_style( 'google-fonts-style', 'https://fonts.googleapis.com/css?family=Varela+Round' );
	
	wp_enqueue_style( 'font-awesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css' );
	
	wp_enqueue_script( 'cldigitaldesign-no-frameworks-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'cldigitaldesign-no-frameworks-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '', true );
	
	wp_enqueue_script( 'contact-form-js', get_template_directory_uri() . '/assets/js/contact-form.js', array('jquery'), '', true );
	
	wp_localize_script('contact-form-js', 'my_ajax_url',
		array( 
			'ajaxurl' 	 => admin_url( 'admin-ajax.php' ),
			'ajax_nonce' => wp_create_nonce('ajax_nonce'),
			) 
		);
	
	//wp_enqueue_script( 'min-js', get_template_directory_uri() . '/assets/js/script.min.js', array('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cldigitaldesign_no_frameworks_scripts' );

add_action( 'wp_ajax_my_action', 'my_action' );
add_action( 'wp_ajax_nopriv_my_action', 'my_action' );

function my_action() {
	$name = strip_tags(htmlspecialchars($_POST['name']));
	$email_address = strip_tags(htmlspecialchars($_POST['email']));
	$message = strip_tags(htmlspecialchars($_POST['message']));

   // Create the email and send the message
	$to = 'charlesloehle@gmail.com'; 
	$email_subject = "Website Contact From:  $name";
	$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
	$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
	$headers .= "Reply-To: $email_address";  

   // send the email
   
   if(wp_mail($to, $email_subject, $email_body, $headers)){
	   wp_send_json_success("Your message has been sent.");
   } else {
	  wp_send_json_error("There was a problem sending your message. Please try again."); 
   }  
}







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

