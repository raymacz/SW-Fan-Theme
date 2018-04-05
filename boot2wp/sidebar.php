<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boot_to_WP
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
//id="secondary" class="widget-area"

?>
<aside  id="secondary"  class=" col-sm-4 widget-area">
	 <?php
	 global $pg_name;
	 $pg_name = get_query_var('pagename');
	 $pg_id = get_queried_object_id();
	 //echo '<pre>TESTER'.' '.$pg_name.' '.$pg_id.'</pre>';
	 dynamic_sidebar( 'sidebar-1' ); ?>
	 <?php
	 if (empty($pg_name) && $pg_id<1) : ?>
		 <div id="category-most" class="widget panel panel-default">
				<div class="panel-heading"><h4><?php esc_html_e( 'Most Used Categories', 'boot2wp' ); ?></h4></div>
				<div class="panel-body">
					 <ul>
						 <?php wp_list_categories( array(
							 'orderby'    => 'name',
							 'show_count' => 1,
							 'order'      => DESC,
							 'number'=>10,
							 'title_li'  => '',
					 ) ); ?>
					 </ul>
				</div>
			</div>
		 <div  id="tag-blog" class="widget panel panel-default">
				<div class="panel-heading"><h4><?php esc_html_e( 'Tags', 'boot2wp' ); ?></h4></div>
				<div class="panel-body">
					 <?php //the_widget( 'WP_Widget_Tag_Cloud' );
					 $instance = array(
					     'dropdown' => 1,
					     'count'    => 0,
					 );
					 $args = array(
					     'before_widget' => '<div id="%1$s" class="widget %2$s">',
					     'after_widget' => '</div>',
					     'before_title' => '<div class="widget-title" style="display:none;">',
					     'after_title' => '</div>'
					 );
					 the_widget( 'WP_Widget_Tag_Cloud', $instance, $args );
					 ?>
				</div>
			</div>
	<?php	endif; ?>
</aside><!-- #secondary -->
