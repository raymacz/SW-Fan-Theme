<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boot_to_WP
 */
?>


<!--SIGN UP SECTION
============================================= -->
	<section id="signmeup" >
            <!--<section id="signmeup"  data-type="background" data-speed="3">-->
		<div class="container center-block">
			<div class="col-sm-6 col-sm-offset-3">
				<h2>"Did you <strong>ENJOY</strong> our website content?" Feel free to contact me anytime...</h2>
				<p><a href="#" class="btn btn-lg btn-block btn-success" role="button">Yes, sign me up !!!</a></p>
			</div>
		</div>
	</section>
<!--FOOTER
============================================= -->
 <footer>
	 <div class="container clearfix">
		 <div class="row">
			 <div class="col-sm-3" >
				 <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="A Star Wars Fan Made Website">
			 </div>
			 <div class="col-sm-6">
						 <?php
							 wp_nav_menu( array(
						 //	 'menu'						 => 'Main Menu',
								 'theme_location'	 => 'menu-3',
								 'menu_id'         => 'footer-menu',
								 'container'	 		 => 'nav',
								 'menu_class'			 => 'list-unstyled list-inline',
								 'depth' => 1,
								 /*	'items_wrap' => '<ul class="nav navbar-nav navbar-right">test</ul>', */
							 ));
						  ?>
					<!-- <ul class="list-unstyled list-inline">
						 <li><a href="/"></a>Home</li>
						 <li><a href="blog_exer1.html"></a>Blog</li>
						 <li><a href="resource_exer1.html"></a>Resources</li>
						 <li><a href="contact_exer1.html"></a>Contact</li>
						 <li><a href="#"></a>Sign-up Now!</li>
					 </ul> -->
			 </div>
			 <div class="col-sm-3">
				 <p class="text-right"><?php bloginfo('name'); ?> Copyright &copy; <?php print date('Y').' '; the_author_link();?> </p>
			 </div>
		 </div>
	 </div>
	 <!-- <footer id="colophon" class="site-footer"> -->
	 <div class="site-info text-center">
		 <?php
		 /* translators: 1: Theme name, 2: Theme author. */
		 printf( esc_html__( 'Theme: %1$s by %2$s.', 'boot2wp' ), 'boot2wp', '<a href="http://mqassist.ml">MQ Assist</a>' );
		 ?>
	 </div><!-- .site-info -->
	 <!--- </footer> #colophon -->
	 <!-- </div> #page -->
 </footer>
<!--MODAL
============================================= -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
			</div> <!--modal-header-->

			<div class="modal-body">
				<p>Just enter your name and email! As a thank you for visiting our website, we're going to give you one of our graphic designs, <em>for free!</em></p>

				<form class="form-inline" role="form">
					<div class="form-group">
						<label class="sr-only" for="subscribe-name">Your first name</label>
						<input type="text" class="form control" id="subscribe-name" placeholder="Your first name">
					</div> <!--form-group-->

					<div class="form-group">
						<label class="sr-only" for="subscribe-email">and your email</label>
						<input type="text" class="form control" id="subscribe-email" placeholder="and your email">
					</div> <!--form-group-->
					<input type="submit" class="btn btn-danger" value="Subscribe!">
					<div class="modal-footer">
						<div class="alignme">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Maybe Later</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Nice Try</button>
							<button type="button" class="btn btn-warning" data-dismiss="modal">Nope!</button>
						</div>

					</div>
				</form>

				<hr>

				<p><small>By giving us your email you consent to receiving some promotional emails &amp; newsletters. <br>No Spam. Just the best stuff. We greatly respect your privacy &amp; you may unsubscribe at any time. Cheers! </small></p>
			</div> <!--modal-body-->
		</div> <!--modal content-->
	</div> <!--modal dialog-->
</div> <!--modal-->

<?php 
// Get the queried object and sanitize it
$current_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
// Get the page slug
$slug = $current_page->post_name;
// print $slug; ?>
<?php wp_footer(); ?>


<!--BOOTSTRAP CORE JAVASCRIPT
	Placed at the end of the document so the pages load faster!
============================================= -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!--  <script type="text/javascript" src="<?php // bloginfo('template_directory'); ?>/assets/js/jquery-2.2.0.min"></script> -->
<!-- <script type="text/javascript" src="<?php // bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script> -->
<!-- <script type="text/javascript"  src="<?php //bloginfo('template_directory'); ?>/assets/js/main.js"></script> -->
<!-- <script type="text/javascript"  src="<?php //bloginfo('template_directory'); ?>/assets/js/myjq.js"></script> -->



<?php   
if ($slug=="front-page") {
	$scriptme = '$("ul#primary-menu>li:nth-child(1)").addClass("active")'; 
} elseif ($slug=="blog") {
	$scriptme = '$("ul#primary-menu>li:nth-child(2)").addClass("active");'; 
} elseif ($slug=="resources") {
	$scriptme = '$("ul#primary-menu>li:nth-child(3)").addClass("active");'; 
} elseif ($slug=="contact") {
	$scriptme = '$("ul#primary-menu>li:nth-child(4)").addClass("active");'; 
}	
/* menu-item-121 menu-item-24 menu-item-107 menu-item-159*/
?>


<script type="text/javascript"> 
$(document).ready(function(){
  <?php print $scriptme; ?>
}); 
</script>

</body>
</html>
