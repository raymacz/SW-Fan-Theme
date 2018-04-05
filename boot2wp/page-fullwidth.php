<?php
/**
 *
 * Template Name: Contact Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Boot_to_WP
 */
$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ;

get_header();
?>

<!--CONTACT SECTION
============================================= -->
<?php if (has_post_thumbnail()) : //check feature image ?>
<section class="feature-image-con feature-image feature-image-default-alt" style="background: white url('<?php print $thumbnail_url; ?>') bottom right no-repeat; background-size: cover;" data-type="background" data-speed="3">
	 <h1 class="page-title"><?php the_title(); ?></h1>
</section>
<?php else :  ?>
	<section class="feature-image-con feature-image feature-image-default-alt" data-type="background" data-speed="3">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</section>
<?php endif; ?>
<!-- MAIN CONTENT
================================================== -->
<div class="container clearfix">
	<section id="contactme">
		<div class="row">
			<section class="main-content">
				<?php while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
				<?php endwhile; ?>
			</section>
		</div>
	</div>
</div>

<?php
// get_sidebar();
get_footer();
