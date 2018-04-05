
<?php
//Custom Fields
$post_id = 59; $key = 'prelaunch_price';
$prelaunch_price					= get_post_meta( $post_id, $key , true );
$launch_price							= get_post_meta( $post_id, 'launch_price' , true );
$final_price							= get_post_meta( $post_id, 'final_price' , true );
$button_text							= get_post_meta( $post_id, 'button_text' , true );
$course_url								= get_post_meta( $post_id, 'course_url' , true );
 ?>


<!--HERO
============================================= -->
<section id="hero" data-type="background" data-speed="3">
	<article>
		<div class="container clearfix">
			<div class="row">

				<div class="col-sm-5 mylogo">
						<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to WordPress">
				</div>

				<div class="col-sm-7 hero-text">
					<h1><?php bloginfo('name');?></h1>
					<p class="lead"><?php bloginfo('description');?></p>




					<div id="price-timeline">
						<div class="price active">
							<h4>The Force Awakens <small>Acceptable!</small></h4>
							<span><?php print $prelaunch_price; ?></span>
						</div> <!--price -->
						<div class="price">
							<h4>The Last Jedi <small>Disaster!</small></h4>
							<span><?php print $launch_price; ?></span>
						</div> <!--price -->
						<div class="price">
							<h4>Who Knows??? <small>Fear!</small></h4>
							<span><?php print $final_price; ?></span>
						</div> <!--price -->
					</div> <!--price timeline -->
						<p><a href="<?php print $course_url; ?>" class="btn btn-lg btn-info" role="button" target="_blank"><?php print $button_text; ?></a></p>
				</div>
			</div>
		</div>
	</article>
</section>
