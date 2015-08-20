<?php

/**
This file was not meant not to replace your functions.php file. 
Just copy and paste the codes below into your own functions.php file.
*/

/**
 * Slightly Modified Options Framework
 */
require_once ('admin/index.php');
require_once ('cmb.php');


add_theme_support( 'post-thumbnails', array( 'post' ) );
set_post_thumbnail_size( 130, 110, true );
add_image_size( 'post-image', 130, 110, true );

add_action( 'init', 'create_custom_post' );
function create_custom_post() {
	register_post_type( 'slider',
		array(
		'labels' => array(
			'name' => __( 'Slider' ),
			'singular_name' => __( 'Slider' ),
			'add_new' => __( 'Add New' ),
			'add_new_item' => __( 'Add New Slider' ),
			'edit_item' => __( 'Edit Slider' ),
			'new_item' => __( 'New Slider' ),
			'view_item' => __( 'View Slider' ),
			'not_found' => __( 'Sorry, we couldn\'t find the Slider you
			are looking for.' )
		),
		'public' => true,
		'publicly_queryable' => false,
		'exclude_from_search' => true,
		'menu_position' => 14,
		'has_archive' => false,
		'hierarchical' => false, 
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'slider' ),
		'supports' => array('title')
		)
	);
	
	register_post_type( 'news',
		array(
		'labels' => array(
			'name' => __( 'News Update' ),
			'singular_name' => __( 'News Update' ),
			'add_new' => __( 'Add New' ),
			'add_new_item' => __( 'Add New Update' ),
			'edit_item' => __( 'Edit News' ),
			'new_item' => __( 'New News' ),
			'view_item' => __( 'View News' ),
			'not_found' => __( 'Sorry, we couldn\'t find the News Update you
			are looking for.' )
		),
		'public' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'menu_position' => 14,
		'has_archive' => true,
		'hierarchical' => true, 
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'news-update' ),
		'supports' => array('title', 'editor')
		)
	);
	
	register_post_type( 'teachers',
		array(
		'labels' => array(
			'name' => __( 'Teachers' ),
			'singular_name' => __( 'Teacher' ),
			'add_new' => __( 'Add New' ),
			'add_new_item' => __( 'Add New Teacher' ),
			'edit_item' => __( 'Edit Teacher\'s info' ),
			'new_item' => __( 'New Teacher' ),
			'view_item' => __( 'View Teacher\'s info' ),
			'not_found' => __( 'Sorry, we couldn\'t find the Teacher\'s info you
			are looking for.' )
		),
		'public' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'menu_position' => 14,
		'has_archive' => true,
		'hierarchical' => true, 
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'teachers' ),
		'supports' => array('title')
		)
	);
	register_post_type( 'students',
		array(
		'labels' => array(
			'name' => __( 'Students' ),
			'singular_name' => __( 'Student' ),
			'add_new' => __( 'Add New' ),
			'add_new_item' => __( 'Add New Student' ),
			'edit_item' => __( 'Edit Student\'s info' ),
			'new_item' => __( 'New Student' ),
			'view_item' => __( 'View Student\'s info' ),
			'not_found' => __( 'Sorry, we couldn\'t find the Student\'s info you
			are looking for.' )
		),
		'public' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'menu_position' => 14,
		'has_archive' => true,
		'hierarchical' => true, 
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'students' ),
		'supports' => array('title')
		)
	);
	register_post_type( 'gallery',
		array(
		'labels' => array(
			'name' => __( 'Photo Gallery' ),
			'singular_name' => __( 'Photo Gallery' ),
			'add_new' => __( 'Add New' ),
			'add_new_item' => __( 'Add New Photo Gallery' ),
			'edit_item' => __( 'Edit Photo Gallery' ),
			'new_item' => __( 'New Photo Gallery' ),
			'view_item' => __( 'View Photo Gallery' ),
			'not_found' => __( 'Sorry, we couldn\'t find the Photo Gallery you
			are looking for.' )
		),
		'public' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'menu_position' => 14,
		'has_archive' => true,
		'hierarchical' => true, 
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'gallery' ),
		'supports' => array('title')
		)
	);
}

function themes_taxonomy() {  
    register_taxonomy(  
        'group',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
        'students',        //post type name
        array(  
            'hierarchical' => true,  
            'label' => 'Group',  //Display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'group', // This controls the base slug that will display before each term
                'with_front' => false // Don't display the category base before 
            )
        )  
    );  
}  
add_action( 'init', 'themes_taxonomy');

add_action('init', 'wpj_register_menu');
function wpj_register_menu() {
	if (function_exists('register_nav_menu')) {
		register_nav_menu( 'main-menu', __( 'Main Menu') );
	}
}

/*function comment_scripts(){
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'comment_scripts' );*/

