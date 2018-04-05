<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boot_to_WP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!--Bootstrap for CSS -->
	<!-- <link href="<?php// bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<!--FontAwesome Icons -->
	<!-- <link href="<?php// bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
	<!--Custom stylesheet delete and add to style.css -->
	<!-- <link href="assets/css/custom-exer1.css" rel="stylesheet">-->
	<!--Google Fonts note: this can be added on WP functions.php using  wp_enqueue_style-->
	<!-- <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" type="text/css">-->

	<?php wp_head(); ?>
	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- [if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>

<?php
/* get current page
// Get the queried object and sanitize it
$current_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
// Get the page slug
$slug3 = $current_page->post_name;
 $slugz = get_post_field( 'post_name', get_post() ); $slug=basename(get_permalink()); print $slug3.' '.$slugz.' '.$slug;  */
?>
 
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'boot2wp' ); ?></a>

		<!--HEADER
	============================================= -->
	<header class="site-header" role="banner">
		<!--NAVBAR
		============================================= -->
		<div class="navbar-wrapper">
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to WordPress"></a>
					</div> <!-- logo --->
					<!--navbar-header -->
					<div class="navbar-collapse collapse">
						<?php
						if ( has_nav_menu( 'menu-1' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'boot2wp' ); ?>">
							<?php
							wp_nav_menu( array(
						//		'menu'						 => 'Main Menu',
								'theme_location'	 => 'menu-1',
								'menu_id'          => 'primary-menu',
								'container'	 			 => 'ul',
								'menu_class'			 => 'nav navbar-nav navbar-right',
								/*	'items_wrap' => '<ul class="nav navbar-nav navbar-right">test</ul>', */
							));
							?>
							</nav><!-- .main-navigation -->
							<?php endif; ?>
					</div>
					<!--  <div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="index_exer1.html">Home</a></li>
							<li><a href="blog_exer1.html">Blog</a></li>
							<li><a href="resource_exer1.html">Resources</a></li>
							<li><a href="contact_exer1.html">Contact</a></li>
						</ul>
					</div> navbar-collapse // CONVERT INTO DYNAMIC MENU -->
				</div> <!--container -->
			</div> <!--navbar -->
		</div> <!--Navbar-wrapper -->
	</header>

	<!-- <div id="content_archive" class="site-content"> -->
