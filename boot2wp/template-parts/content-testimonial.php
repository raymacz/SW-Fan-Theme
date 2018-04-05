<?php

//Custom Fields
$post_id = 59; $key = 'prelaunch_price';

//Advanced Custom Fields
// Using WP Query -> Testimonials
$my_query3 = new WP_Query(array(
				'post_type'=>'testimonial',
				'orderby' => 'post_id',
				'orderby' => 'DESC',
			));

//                echo '<pre>RBTM :'; print_r($my_query3);
//                echo '</pre>';
 ?>


 <!--TESTIMONIALS
 ============================================= -->

 	<section id="testimonial">
 		<div class="container clearfix">
 			<div class="row">
 			<div class="col-sm-10 col-sm-offset-2">
 					<div class="section-header">
 						<h2>The Power Siblings Behind this Fan Made Website</h2>
 					</div>
 					<?php while ($my_query3->have_posts()) : $my_query3->the_post(); ?>
 						<div class="row section-body">
 							<div class="col-sm-3">
 							<?php if (has_post_thumbnail()) :
 											the_post_thumbnail( array( 200, 200)); // height & width
 									 /*the_post_thumbnail( $size = 'post-thumbnail', [
 									'class' => 'img-default',
 									'title' => 'feature image',
 								]);*/
 								?>
 							<?php endif; ?>
 						  </div>
 							<div class="col-sm-6">
 								<blockquote> <?php the_content(); ?>
 								<cite>-- <?php the_title(); ?></cite>
 								</blockquote>
 							</div>
 						</div>
 					<?php endwhile; wp_reset_query(); ?>
 			</div>
 		</div>
 	</section>
