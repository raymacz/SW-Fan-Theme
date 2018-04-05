<?php

//Custom Fields
$post_id = 59; $key = 'prelaunch_price';

//Advanced Custom Fields


// Final Project Features Section & Custom Post Types UI
$final_project_title 						= get_field('final_project_title',$post_id);
$final_project_description 			= get_field('final_project_description',$post_id);

// Using WP Query -> final project feature
$my_query2 = new WP_Query( array(
				'post_type'=>'project_feature',
				'orderby' => 'post_id',
				'order' => 'ASC',
			));
 ?>



<!--FINAL PROJECT FEATURES
============================================= -->

<section id="project-features">
	<div class="container clearfix">
		<div class="section-header">
			<h2><?php print $final_project_title; ?></h2>
			<p class="lead"><?php print $final_project_description; ?></p>
		</div>
		<div class="row">
			<?php while ($my_query2->have_posts()) : $my_query2->the_post(); ?>
				<div class="section-body col-sm-4">
					<?php
					if (has_post_thumbnail()) {
						the_post_thumbnail( $size = 'post-thumbnail', ['class' => 'img-default', 'title' => 'Feature image'] );
						//the_post_thumbnail();
					} else { ?>
						<!-- DEFAULT IMAGE -->
						 <img src="<?php  bloginfo('template_directory'); ?>/assets/img/icon-design.png" alt="Design">
					<?php }?>
				<!-- <img src="<?php// bloginfo('template_directory'); ?>/assets/img/icon-design.png" alt="Design"> -->
				<h3><?php the_title( $before = '', $after = '', $echo = true ); ?></h3>
				<p><?php the_content(); ?></p>
				</div>
			<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>
</section>
