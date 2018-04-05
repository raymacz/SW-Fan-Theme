<?php
$post_id = 59; $key = 'prelaunch_price';

//Advanced Custom Fields
// Who Should Take This Course Section
$who_feature_image							= get_field('who_feature_image',$post_id);
$who_feature_title							= get_field('who_feature_title',$post_id);
$who_section_body 							= get_field('who_section_body',$post_id); ?>


<!--WHO BENEFITS
============================================= -->
<section id="who-benefits">
	<div class="container clearfix">
		<div class="section-header">
			<img src="<?php print $who_feature_image['url'];?>" alt="<?php print $who_feature_image['url'];?>">
			<h2><?php print $who_feature_title; ?></h2>
		</div>
		<div class="row">
			<div class="section-body col-sm-8 col-sm-offset-2 clearfix">
				<?php print $who_section_body; ?>
			</div>
		</div>
	</div>
</section>
