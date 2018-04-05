<?php
/**
 *
 * Template Name: Resources Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Boot_to_WP
 */
$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ) ;


//Advanced Custom Fields

//$resource_url =  get_field('resource_url',$post_id);
//$add_button =  get_field('add_button',$post_id);
//$button_text =  get_field('button_text',$post_id);

// Using WP Query -> Testimonials
$my_query4 = new WP_Query(array(
	'post_type'=>'resource',
	'orderby' => 'post_id',
	'orderby' => 'DESC',
));

get_header();
?>

<!--RESOURCE SECTION
============================================= -->
<?php if (has_post_thumbnail()) { //check feature image ?>
<section class="feature-image" style="background: white url('<?php print $thumbnail_url; ?>') bottom right no-repeat " data-type="background" data-speed="3">
	 <h1 class="page-title">Resources</h1>
</section>
<?php }; ?>

<!-- <section class="feature-image-res feature-image feature-image-default-alt" data-type="background" data-speed="3">
	 <h1 class="page-title">Resources</h1>
</section> -->
<!-- MAIN CONTENT
================================================== -->
<div class="container clearfix">
	<section id="main-content">
		<?php if (have_posts()) {  the_post();
			the_content();
					}
			?>

			<div class="row">
      <?php while ($my_query4->have_posts()) :  $my_query4->the_post(); ?>
				<div class="col-sm-4">
					<?php $resource_image =  get_field('resource_image'); ?>
					<img src="<?php print $resource_image['url']; ?>" alt="<?php print $resource_image['alt']; ?>">
					<!-- <pre>						 <?php//  print "yessss "; print_r (get_field('resource_image',$post->ID)); ?>					 </pre> -->
					<hr>
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
					<?php if ((get_field('add_button',$post->ID))) {?>
					<a class="btn btn-lg btn-success" href="<?php print get_field('resource_url', $post->ID); ?>"><?php print get_field('button_text', $post->ID); ?></a>
					<?php } ?>
				</div>
			<?php endwhile; wp_reset_query(); ?>

				<!-- <div class="col-sm-4">
					<img src="<?php // bloginfo( 'template_directory' ); ?>/assets/img/coda2-logo.jpg" alt="Coda 2 logo">
					<hr>
					<h3>Coda 2</h3>
					<p>If you’re serious about coding, or you want to start out with a solid tool to code with, I strongly recommend Coda 2 for Mac. A beautiful User Interface with tabbed navigation, a super sidebar, and a simple layout. The features are outrageous and extensive, with code folding, smart complete, auto indentation, GIT integration, a built-in terminal, iCloud support — to name a few. The features seem to be endless.</p>
					<p>I use Coda 2 for all of my courses &amp; tutorials, and if you decide to use Coda 2 as your editor of choice, it would greatly benefit you when taking my courses. The price of the editor weighs in at $75, but it’s worth every penny — in my honest opinion.</p>
					<a class="btn btn-lg btn-success" href="#">Check out Coda 2</a>
				</div> -->

		</div>
	</section>
</div>


<?php
// get_sidebar();
get_footer();
