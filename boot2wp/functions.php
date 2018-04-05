<?php
/**
 * Boot to WP functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Boot_to_WP
 */

if ( ! function_exists( 'boot2wp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function boot2wp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Boot to WP, use a find and replace
		 * to change 'boot2wp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'boot2wp', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'boot2wp' ),
			'menu-2' => esc_html__( 'Secondary', 'boot2wp' ),
			'menu-3' => esc_html__( 'Footer', 'boot2wp' ),
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
		add_theme_support( 'custom-background', apply_filters( 'boot2wp_custom_background_args', array(
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
add_action( 'after_setup_theme', 'boot2wp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function boot2wp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'boot2wp_content_width', 640 );
}
add_action( 'after_setup_theme', 'boot2wp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function boot2wp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'boot2wp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'boot2wp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array( // registered 2nd extra sidebar *rbtm*
		'name'          => esc_html__( 'Extra Sidebar', 'boot2wp' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here for extra sidebar.', 'boot2wp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'boot2wp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function boot2wp_scripts() {
	wp_enqueue_style( 'boot2wp-style', get_stylesheet_uri() ); // style.css rbtm
	// wp_enqueue_style('boot2wp-style', get_template_directory_uri() . '/css/style.css', array(), filemtime(get_template_directory() . '/css/style.css'), false);
	wp_enqueue_style( 'boot2wp-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:400,700' );  // custom google fonts rbtm
	
	wp_enqueue_style( 'boot2wp-style-bootstrap', get_template_directory_uri()  . '/assets/css/bootstrap.min.css');
	
	wp_enqueue_style( 'boot2wp-style-font-awesome', get_template_directory_uri()  . '/assets/css/font-awesome/css/font-awesome.min.css');

	wp_enqueue_script( 'boot2wp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'boot2wp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	wp_enqueue_script( 'boot2wp-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '20151215', true );
	
    wp_enqueue_script( 'boot2wp-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );
	
	wp_enqueue_script( 'boot2wp-myjq-js', get_template_directory_uri() . '/assets/js/myjq.js', array(), '20151215', true ); 
	
	
	
}
add_action( 'wp_enqueue_scripts', 'boot2wp_scripts' );

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

/* two options for excerpt
function new_excerpt_more($more) {
	global $post;
	return '... <a class="moretag" href="'.get_permalink($post->ID).'"> Continue Reading &raquo; </a>';
} */

function new_excerpt_moretwo( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More >>', 'your-text-domain') . '</a>';
}

add_filter( 'excerpt_more', 'new_excerpt_moretwo');

// customize the_archive_title function
add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( 'Category >>', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        }

    return $title;

});

//customized search form using a hook rbtm

function wpdocs_my_search_form( $form2 ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Find :' ) .'" />
    </div>
    </form>';


		$form2 = '<div id="search-blog" class="widget panel panel-default">
<div class="panel-body">
 <form role="search" method="get" class="search-form" action="'. home_url( '/' ) .'" >
                <label for="sidebar-search"><span class="glyphicon glyphicon-search"> </span> Search</label>
                <input class="form-control search-field" id="sidebar-search" type="text" placeholder="Find..." value="" name="s">
                    </form></div>
              </div>';

		return $form2;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );









