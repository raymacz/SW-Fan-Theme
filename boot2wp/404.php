<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Boot_to_WP
 */

get_header(); ?>

	<section id="primary">
		<div class="container">
			<div class="row">
						<!-- MAIN CONTENT
						================================================== -->
	  			<main id="content" class="col-sm-8" role="main">

			  		<section class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title"><?php esc_html_e( 'Oops - 404! That page can&rsquo;t be found.', 'boot2wp' ); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">
									<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'boot2wp' ); ?></p>
									<?php
									// $pagename = get_query_var('pagename');
									// $id = get_queried_object_id();
									// if ( !$pagename && $id > 0 ) {
									//    echo '<pre>'.$post.' '.$pagename.'</pre>';
									// } else {
									// echo '<pre>'.' '.$pagename.'</pre>';
									// }
									?>

									<?php
										// get_search_form();
										//the_widget( 'WP_Widget_Recent_Posts' );
										/* translators: %1$s: smiley */
										$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'boot2wp' ), convert_smilies( ':)' ) ) . '</p>';
										$args = array(
										//	'before_widget' => '<div id="%1$s" class="widget %2$s">',
										//	'after_widget' => '</div>',
										    'before_title' => '<div class="widget-title" style="display:none;">',
										//	'before_title' => '<div class="widget-title" >',
											'after_title' => '</div>'.$archive_content
										);
										the_widget( 'WP_Widget_Archives', 'dropdown=1', $args );
										//the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
										//the_widget( 'WP_Widget_Tag_Cloud' );
									?>
							</div><!-- .page-content -->
						</section><!-- .error-404 -->
		  		</main><!-- #main -->
					<?php get_sidebar(); ?>
 			</div><!-- row -->
		</div><!-- container -->
	</section><!-- #primary -->

<?php
get_footer();
