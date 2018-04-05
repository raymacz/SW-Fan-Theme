
<?php
$post_id = 59; $key = 'prelaunch_price';

//Advanced Custom Fields
// Boost Your Income Section
$income_feature_image						= get_field('income_feature_image',$post_id);
$income_section_title						= get_field('income_section_title',$post_id);
$income_section_description			= get_field('income_section_description',$post_id);
$reason_title_1									= get_post_meta( $post_id, 'reason_title_1' , true );
$reason_description_1						= get_post_meta( $post_id, 'reason_description_1' , true );
$reason_title_2									= get_post_meta( $post_id, 'reason_title_2' , true );
$reason_description_2						= get_post_meta( $post_id, 'reason_description_2' , true );
 ?>


<!--BOOST YOUR INCOME
============================================= -->
<section id="boost-income">
	<div class="container" clearfix>
		<div class="section-header">
			<?php //if user upload an image
			if (!empty($income_feature_image)) { ?>
				<img src="<?php print $income_feature_image['url'];?>" alt="<?php print $income_feature_image['alt'];?>">
			<?php } ?>
			<h2><?php print $income_section_title?></h2>
		</div>  <!--section-header-->

		<p class="lead"><?php print $income_section_description; ?></p>
		<div class="row">
			<div class="col-sm-6">
				<h3><?php print $reason_title_1; ?></h3>
				<p><?php print $reason_description_1; ?></p>
			</div> <!--col-->
			<div class="col-sm-6">
				<h3><?php print $reason_title_2; ?></h3>
				<p><?php print $reason_description_2; ?></p>
			</div> <!--col-->
		</div> <!--row-->
	</div>  <!--container-->
</section>  <!--boost income-->
