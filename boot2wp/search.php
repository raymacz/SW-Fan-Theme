<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Boot_to_WP
 */

get_header(); ?>

<section class="feature-image feature-image-default-alt" data-type="background" data-speed="3">

	 <?php	 if ( have_posts() ) :	 ?>
	 <h1 class="page-title archives" style="padding-bottom: 90px;"><?php
	 /* translators: %s: search query. */
	 printf( esc_html__( 'Search Results: %s', 'boot2wp' ), '<span>' . get_search_query() . '</span>' );
	 ?></h1>
	 <?php
	//  else :
	// 	print '<h1 class="page-title archives"> Category </h1>';
 endif;
	//  ?>
</section>
<section id="primary">
		<div class="container">
			<div class="row">
			<!-- MAIN CONTENT
			================================================== -->
			<main id="content" class="col-sm-8" role="main">
				<?php
				if ( have_posts() ) :


				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					// get_template_part( 'template-parts/content', 'search' );
					get_template_part( 'template-parts/content', get_post_format() );
				endwhile;
				the_posts_navigation();
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif; ?>

			</main><!-- #main -->
			<?php
				if ( have_posts() ) :
		 				get_sidebar();
			  endif;
			?>
		</div>
	</div>
</section><!-- #primary -->

<?php
//get_sidebar();
get_footer();
