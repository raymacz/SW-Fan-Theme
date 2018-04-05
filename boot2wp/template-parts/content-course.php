
<?php
$post_id = 59; $key = 'prelaunch_price';

//Advanced Custom Fields

// Course Features Section
$features_section_image 				= get_field('features_section_image',$post_id);
$features_section_title 				= get_field('features_section_title',$post_id);
$features_section_body 					= get_field('features_section_body',$post_id);



//  Using WP Query -> course feature

$my_query = new WP_Query( array(
				'post_type'=>'course_feature',
				'orderby' => 'post_id',
				'order' => 'ASC',
			));
 ?>

<!-- COURSE FEATURES
============================================= -->
<section id="course-features">
	<div class="container clearfix">
		<div class="section-header">
			<img src="<?php print $features_section_image['url']; ?>" alt="<?php print $features_section_image['alt']; ?>">
			<h2><?php print $features_section_title; ?> </h2>
		</div>
		<?php $features_section_body=" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut luctus, libero ac mattis semper, justo sapien ultrices erat, congue fringilla orci erat in ipsum. Pellentesque felis tellus, dapibus sed tempor at, accumsan vitae quam. Nam consequat et ante eu lobortis. Mauris nec consectetur lectus. Nam nisl urna, bibendum non libero vitae, ullamcorper vestibulum dolor. Aliquam eleifend vestibulum risus a condimentum. Nulla sodales nunc vitae pretium bibendum. Vestibulum vitae rutrum enim, non accumsan eros. Nulla vulputate condimentum odio vitae hendrerit.  Let me know if you are interested.";
		if (!empty($features_section_body)): ?>
			<p class="lead" style="color: white; margin-bottom: 20px;" ><?php print $features_section_body; ?></p>
		<?php endif; ?>
		<?php // echo '<pre>'. 'testz ' . var_dump($my_query) . '</pre>'; ?>
		<div class="row">
			<?php while ($my_query->have_posts()) :	$my_query->the_post(); ?>
				<div class="col-sm-2">
					<i class="
					<?php
					//	the_field('course_feature_icon');
							the_field('course_feature_icon', $my_query->post->ID, true);
						 ?>"></i>
					<h4><?php
					 the_title(); //	echo "ID: ".$my_query->post->ID;
					// the_title( $before = 'ray ', $after = ' macz', $echo = true ); ?> </h4>
				</div>
			<?php	endwhile; wp_reset_query();?>
		</div>
	</div>
</section>
