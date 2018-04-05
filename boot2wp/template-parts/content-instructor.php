<?php

//Custom Fields
$post_id = 59; $key = 'prelaunch_price';

// The Instructor
$instructor_section_title 			= get_field('instructor_section_title',$post_id);
$instructor_name			 					= get_field('instructor_name',$post_id);
$bio_excerpt							 			= get_field('bio_excerpt',$post_id);
$full_bio									 			= get_field('full_bio',$post_id);
$twitter_username 							= get_field('twitter_username',$post_id);
$facebook_username 							= get_field('facebook_username',$post_id);
$google_plus_username						= get_field('google_plus_username',$post_id);
$num_students										= get_field('num_students',$post_id);
$num_reviews										= get_field('num_reviews',$post_id);
$num_courses										= get_field('num_courses',$post_id);



 ?>

 <!-- INSTRUCTOR
 ============================================= -->
 <section id="instructor">
 	<div class="container">
 		<div class="row">
 		<div class="  col-md-6 col-sm-8">
 				<div class="row">
 					<div class="col-lg-8">
 						<h2><?php print $instructor_section_title; ?><small><?php print $instructor_name; ?></small></h2>
 					</div>
 					<div class="col-lg-4">
 						<?php  if (!empty($twitter_username)) { ?>
 							<a href="https://twitter.com/<?php // print $twitter_username; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
 						<?php } ?>
 						<?php  if (!empty($facebook_username)) { ?>
 							<a href="https://facebook.com/<?php // print $facebook_username; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
 						<?php } ?>
 						<?php  if (!empty($google_plus_username)) { ?>
 							<a href="https://plus.google.com/<?php // print $google_plus_username; ?>" class="badge social google-plus" target="_blank"><i class="fa fa-google-plus"></i></a>
 					  <?php } ?>
 					</div>
 				</div>


 				<p class="lead">A talented & skilled working student, Nicomacz is a passionate graphic designer, video editor, and digital guy.</p>
 				<p>Morbi rutrum tellus ac laoreet faucibus. Curabitur gravida libero nec purus pulvinar, id tempus felis venenatis. Aliquam suscipit mollis hendrerit. Pellentesque volutpat ligula blandit luctus pulvinar. Donec vel nunc nec neque interdum lobortis. Nullam a feugiat lorem. Aliquam non suscipit magna. </p>
 				<p>Etiam ut lectus imperdiet, tempus eros et, convallis tellus. Maecenas commodo, dui non efficitur porttitor, felis odio mattis eros, vitae dignissim urna nunc non nisl. Vestibulum cursus volutpat eros et suscipit. Suspendisse velit arcu, bibendum id est at, facilisis ornare diam. Sed dolor nulla, interdum ac lacus et, suscipit condimentum nibh. Suspendisse bibendum eros eros, sit amet faucibus erat facilisis at. </p>
 				<p>Phasellus porta ut lacus at venenatis. Integer eu arcu ut nisl congue posuere. Pellentesque aliquet ipsum quis ultricies ornare. Suspendisse facilisis lacus ante, sit amet vehicula elit euismod quis. Morbi felis sapien, fringilla quis justo eget, luctus sagittis erat. Curabitur vel congue diam. Quisque suscipit mattis vehicula. Phasellus sodales sit amet tellus eget ultricies. </p>
 				<hr>

 				<h3>Oh yeah! <small>My hobby and passion is to explore & learn new technologies. A Geek by heart!. My principles:</small></h3>
 				<div class="row">
 					<div class="col-xs-4">
 						<div class="num"> <div class="circlediv"><p><?php print $num_students; ?><span>Hard</span></p></div></div>
 					</div>
 					<div class="col-xs-4">
 						<div class="num"><div class="circlediv"><p><?php print $num_reviews; ?><span>Hard</span></p></div></div>
 					</div>
 					<div class="col-xs-4">
 						<div class="num"><div class="circlediv"><p>Play <?php //print $num_courses; ?><span>Hard</span></p></div></div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>
