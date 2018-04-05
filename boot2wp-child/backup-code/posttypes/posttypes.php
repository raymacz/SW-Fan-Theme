<?php
/**
* Plugin Name: Posttypes
* Description: Creating posttypes for taxonomies
* Version: 0.1.0
* Author: Raymacz
* Author URI: http:mqassist.com
* Text Domain: psst
* License: GPL2+
*
*/

/*

Copyright 2017 Raymacz

{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see the Free Software Fondation, Inc.,
51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

*/

function pstt_posttypes() {
	/**
	 * Post Type: Teztimonials.  04_03-Building out an advanced custom post type
	 */

	$labels = array(
		"name" => __( "Teztimonials", "boot2wp" ),
		"singular_name" => __( "Teztimonial", "boot2wp" ),
		"menu_name" => __( "Teztimonials", "boot2wp" ),
		"name_admin_bar" => __( "Teztimonial", "boot2wp" ),
		"add_new" => __( "Add New" ),
		"add_new_item" => __( "Add New Teztimonial"),
		"new_item" => __( "New Teztimonial" ),
		"edit_item" => __( "Edit Teztimonial" ),
		"view_item" => __( "View Teztimonial" ),
		"all_items" => __( "All Teztimonials" ),
		"search_items" => __( "Search Teztimonials" ),
		"parent_item_colon" => __( "Parent Teztimonials:" ),
		"not_found" => __( "No Teztimonials Found." ),
		"not_found_in_trash" => __( "New Teztimonials found in Trash." ),
	);

	$args = array(
		"label" => __( "Testimonials", "boot2wp" ),
		"labels" => $labels,
		"description" => "What people say...",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "teztimonial", "with_front" => true ),
		"query_var" => true,
		// "menu_icon" => "http://127.0.0.1/wordpress/wp-content/uploads/2017/09/icon-features.png",
		"menu_icon" => "dashicons-format-quote",
		"menu_position" => 5,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "teztimonial", $args );
	
	/**
	 * Post Type: review.  
	 */

	$labels = array(
        'name'               => 'Reviews',
        'singular_name'      => 'Review',
        'menu_name'          => 'Reviews',
        'name_admin_bar'     => 'Review',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Review',
        'new_item'           => 'New Review',
        'edit_item'          => 'Edit Review',
        'view_item'          => 'View Review',
        'all_items'          => 'All Reviews',
        'search_items'       => 'Search Reviews',
        'parent_item_colon'  => 'Parent Reviews:',
        'not_found'          => 'No reviews found.',
        'not_found_in_trash' => 'No reviews found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'reviews' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-star-half',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'taxonomies'         => array( 'category', 'post_tag' )
    );
    register_post_type( 'review', $args );
}

add_action('init', 'pstt_posttypes');	


function my_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry, 
    // when you add a post of this CPT.
    pstt_posttypes(); // my_cpt_init(); // rbtm
    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );


function pstt_mycustom_taxonomies() {  
	// Type of Product/Service taxonomy (hierarchical)
	 $labels = array(
        'name'              => 'Type of Products/Services',
        'singular_name'     => 'Type of Product/Service',
        'search_items'      => 'Search Types of Products/Services',
        'all_items'         => 'All Types of Products/Services',
        'parent_item'       => 'Parent Type of Product/Service',
        'parent_item_colon' => 'Parent Type of Product/Service:',
        'edit_item'         => 'Edit Type of Product/Service',
        'update_item'       => 'Update Type of Product/Service',
        'add_new_item'      => 'Add New Type of Product/Service',
        'new_item_name'     => 'New Type of Product/Service Name',
        'menu_name'         => 'Type of Product/Service',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'product-types' ),
    );

    register_taxonomy( 'product-type', array( 'review' ), $args );
	
	// Mood taxonomy (non-hierarchical)
	$labels = array(
        'name'                       => 'Moods',
        'singular_name'              => 'Mood',
        'search_items'               => 'Search Moods',
        'popular_items'              => 'Popular Moods',
        'all_items'                  => 'All Moods',
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => 'Edit Mood',
        'update_item'                => 'Update Mood',
        'add_new_item'               => 'Add New Mood',
        'new_item_name'              => 'New Mood Name',
        'separate_items_with_commas' => 'Separate moods with commas',
        'add_or_remove_items'        => 'Add or remove moods',
        'choose_from_most_used'      => 'Choose from the most used moods',
        'not_found'                  => 'No moods found.',
        'menu_name'                  => 'Moods',
    );

    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'moods' ),
    );

    register_taxonomy( 'mood', array( 'review', 'post' ), $args );	
	
	
	// Price Range taxonomy (hierarchical)
    $labels = array(
        'name'              => 'Price Ranges',
        'singular_name'     => 'Price Range',
        'search_items'      => 'Search Price Ranges',
        'all_items'         => 'All Price Ranges',
        'parent_item'       => 'Parent Price Range',
        'parent_item_colon' => 'Parent Price Range:',
        'edit_item'         => 'Edit Price Range',
        'update_item'       => 'Update Price Range',
        'add_new_item'      => 'Add New Price Range',
        'new_item_name'     => 'New Price Range Name',
        'menu_name'         => 'Price Range',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'prices' ),
    );

    register_taxonomy( 'price', array( 'review' ), $args );
	
}

// 05_01-Creating basic custom taxonomies
add_action('init', 'pstt_mycustom_taxonomies');





?>