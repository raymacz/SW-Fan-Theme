<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Boot_to_WP
 */

get_header(); ?>

<section id="primary" class="singlepage">
	<div class="container">
	 		<div class="row">
		<!-- MAIN CONTENT
		================================================== -->
				<main id="content" class="col-sm-8" role="main">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'single');

						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</main><!-- #primary -->
				<!-- SIDEBAR
				================================================== -->
				<?php get_sidebar();  ?>
	   </div><!-- #primary -->
	</div><!-- #primary -->
</section>
<?php
get_footer();
