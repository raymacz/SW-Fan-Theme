<?php
//Custom Fields
$post_id = 59; $key = 'prelaunch_price';
$optin_text								= get_post_meta( $post_id, 'optin_text' , true );
$button_optin_text				= get_post_meta( $post_id, 'button_optin_text' , true );

?>

<!--OPT IN SECTION
============================================= -->
<section id="optin">
	<div class="container clearfix">
		<div class="row">
			<div class="col-sm-8">
				<p class="lead"><?php print $optin_text; ?></p>
			</div> <!--col-->
			<div class="col-sm-4">
				<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php print $button_optin_text; ?></button>
			</div> <!--col-->
		</div> <!--row-->
	</div> <!--container-->
</section> <!--optin--> 
