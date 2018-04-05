<?php
/**
 * Front Page Template
 *
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Boot_to_WP
 */



get_header();

get_template_part( 'template-parts/content', 'hero' );
get_template_part( 'template-parts/content', 'optin' );
get_template_part( 'template-parts/content', 'boost' );
get_template_part( 'template-parts/content', 'benefit' );
get_template_part( 'template-parts/content', 'course' );
get_template_part( 'template-parts/content', 'final' );

?>


<!--VIDEO FEATURETTE
============================================= -->
<section id="featurette">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2>Watch a Sample of My Video Editing Project</h2>
				<iframe width="100%" height="415" src="https://www.youtube.com/embed/0iku6bOYe6g" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>


<?php
get_template_part( 'template-parts/content', 'instructor' );
get_template_part( 'template-parts/content', 'testimonial' );  ?>



<?php
//get_sidebar();
get_footer();
