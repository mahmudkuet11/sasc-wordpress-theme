<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sasc_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sasc_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$meta_boxes['scac_metabox'] = array(
		'id'         => 'scac_metabox',
		'title'      => __( 'Scac Metabox', 'cmb' ),
		'pages'      => array( 'slider', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'fields'     => array(
			array(
				'name'       => __( 'Slider Caption Title', 'cmb' ),
				'desc'       => __( 'Enter a title for the caption. max 1 line', 'cmb' ),
				'id'         => $prefix . 'caption_title',
				'type'       => 'text',
			),
			array(
				'name'       => __( 'Slider Caption Description', 'cmb' ),
				'desc'       => __( 'Enter a description for the caption. max 2-3 lines', 'cmb' ),
				'id'         => $prefix . 'caption_desc',
				'type'       => 'textarea',
			),
			array(
				'name'       => __( 'Slider Image', 'cmb' ),
				'desc'       => __( 'Please Upload an image. Best Size is 710 X 320', 'cmb' ),
				'id'         => $prefix . 'slider_image',
				'type'       => 'file',
			),
		),
	);
	$meta_boxes['teachers_info'] = array(
		'id'         => 'teachers_info',
		'title'      => __( 'Teacher\'s Information', 'cmb' ),
		'pages'      => array( 'teachers'), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'fields'     => array(
			array(
				'name'       => __( 'শিক্ষকের নাম', 'cmb' ),
				'desc'       => __( '', 'cmb' ),
				'id'         => $prefix . 'teachers_name',
				'type'       => 'text',
			),
			array(
				'name'       => __( 'পদবী', 'cmb' ),
				'desc'       => __( '', 'cmb' ),
				'id'         => $prefix . 'teachers_post',
				'type'       => 'text',
			),
			array(
				'name'    => __( 'বিভাগ', 'cmb' ),
				'desc'    => __( '', 'cmb' ),
				'id'      => $prefix . 'teachers_group',
				'type'    => 'select',
				'options' => array(
					'science' => __( 'বিজ্ঞান', 'cmb' ),
					'commerce'   => __( 'বাণিজ্য', 'cmb' ),
					'arts'     => __( 'মানবিক', 'cmb' ),
					'others'     => __( 'অন্যান্য', 'cmb' ),
				),
			),
			array(
				'name'       => __( 'বিষয়', 'cmb' ),
				'desc'       => __( '', 'cmb' ),
				'id'         => $prefix . 'teachers_subject',
				'type'       => 'text',
			),
			array(
				'name'       => __( 'ইনডেক্স নম্বর', 'cmb' ),
				'desc'       => __( '', 'cmb' ),
				'id'         => $prefix . 'teachers_index',
				'type'       => 'text',
			),
			array(
				'name'       => __( 'জন্ম তারিখ', 'cmb' ),
				'desc'       => __( '', 'cmb' ),
				'id'         => $prefix . 'teachers_birthday',
				'type'       => 'text_date',
			),
			array(
				'name'       => __( 'শিক্ষাগত যোগ্যতার বিবরনণ ( বিভাগ ও সন সহ)', 'cmb' ),
				'desc'       => __( '', 'cmb' ),
				'id'         => $prefix . 'teachers_qualification',
				'type'       => 'textarea',
			),
			array(
				'name'       => __( 'মামলা', 'cmb' ),
				'desc'       => __( '', 'cmb' ),
				'id'         => $prefix . 'teachers_case',
				'type'       => 'text',
			),
		),
	);
	
	$meta_boxes['teachers_joining'] = array(
		'id'         => 'teachers_joining',
		'title'      => __( 'যোগদানের তারিখ', 'cmb' ),
		'pages'      => array( 'teachers'), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'fields'     => array(
			array(
				'name'       => __( 'বর্তমান প্রতিষ্ঠান', 'cmb' ),
				'desc'       => __( '', 'cmb' ),
				'id'         => $prefix . 'teachers_joining_present',
				'type'       => 'text',
			),
			array(
				'name'       => __( 'পূর্ববর্তী প্রতিষ্ঠান', 'cmb' ),
				'desc'       => __( '', 'cmb' ),
				'id'         => $prefix . 'teachers_joining_past',
				'type'       => 'text',
			),
		),
	);
	$meta_boxes['teachers_mpo'] = array(
		'id'         => 'teachers_mpo',
		'title'      => __( 'প্রথম এমপিও ভূক্তির তারিখ', 'cmb' ),
		'pages'      => array( 'teachers'), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'fields'     => array(
			array(
				'name'       => __( 'বর্তমান প্রতিষ্ঠান', 'cmb' ),
				'desc'       => __( '', 'cmb' ),
				'id'         => $prefix . 'teachers_mpo_present',
				'type'       => 'text',
			),
			array(
				'name'       => __( 'পূর্ববর্তী প্রতিষ্ঠান', 'cmb' ),
				'desc'       => __( '', 'cmb' ),
				'id'         => $prefix . 'teachers_mpo_past',
				'type'       => 'text',
			),
		),
	);

	$meta_boxes['photo_gallery'] = array(
		'id'         => 'photo_gallery',
		'title'      => __( 'ফটো গ্যালারি', 'cmb' ),
		'pages'      => array( 'gallery'), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'fields'     => array(
			array(
				'name'       => __( 'ফটো যুক্ত করুন', 'cmb' ),
				'desc'       => __( '', 'cmb' ),
				'id'         => $prefix . 'gallery_image',
				'type'       => 'file',
			),
		),
	);
	
	
	
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$meta_boxes['about_page_metabox'] = array(
		'id'         => 'about_page_metabox',
		'title'      => __( 'About Page Metabox', 'cmb' ),
		'pages'      => array( 'page', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
		'fields'     => array(
			array(
				'name' => __( 'Test Text', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . '_about_test_text',
				'type' => 'text',
			),
		)
	);


	/**
	 * Repeatable Field Groups
	 */
	$meta_boxes['field_group'] = array(
		'id'         => 'field_group',
		'title'      => __( 'Repeating Field Group', 'cmb' ),
		'pages'      => array( '' ),
		'fields'     => array(
			array(
				'id'          => $prefix . 'repeat_group',
				'type'        => 'group',
				'description' => __( 'Generates reusable form entries', 'cmb' ),
				'options'     => array(
					'group_title'   => __( 'Entry {#}', 'cmb' ), // {#} gets replaced by row number
					'add_button'    => __( 'Add Another Entry', 'cmb' ),
					'remove_button' => __( 'Remove Entry', 'cmb' ),
					'sortable'      => true, // beta
				),
				// Fields array works the same, except id's only need to be unique for this group. Prefix is not needed.
				'fields'      => array(
					array(
						'name' => 'Entry Title',
						'id'   => 'title',
						'type' => 'text',
						// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
					),
					array(
						'name' => 'Description',
						'description' => 'Write a short description for this entry',
						'id'   => 'description',
						'type' => 'textarea_small',
					),
					array(
						'name' => 'Entry Image',
						'id'   => 'image',
						'type' => 'file',
					),
					array(
						'name' => 'Image Caption',
						'id'   => 'image_caption',
						'type' => 'text',
					),
				),
			),
		),
	);

	/**
	 * Metabox for the user profile screen
	 */
	$meta_boxes['user_edit'] = array(
		'id'         => 'user_edit',
		'title'      => __( 'User Profile Metabox', 'cmb' ),
		'pages'      => array( 'user' ), // Tells CMB to use user_meta vs post_meta
		'show_names' => true,
		'cmb_styles' => false, // Show cmb bundled styles.. not needed on user profile page
		'fields'     => array(
			array(
				'name'     => __( 'Extra Info', 'cmb' ),
				'desc'     => __( 'field description (optional)', 'cmb' ),
				'id'       => $prefix . 'exta_info',
				'type'     => 'title',
				'on_front' => false,
			),
			array(
				'name'    => __( 'Avatar', 'cmb' ),
				'desc'    => __( 'field description (optional)', 'cmb' ),
				'id'      => $prefix . 'avatar',
				'type'    => 'file',
				'save_id' => true,
			),
			array(
				'name' => __( 'Facebook URL', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'facebookurl',
				'type' => 'text_url',
			),
			array(
				'name' => __( 'Twitter URL', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'twitterurl',
				'type' => 'text_url',
			),
			array(
				'name' => __( 'Google+ URL', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'googleplusurl',
				'type' => 'text_url',
			),
			array(
				'name' => __( 'Linkedin URL', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'linkedinurl',
				'type' => 'text_url',
			),
			array(
				'name' => __( 'User Field', 'cmb' ),
				'desc' => __( 'field description (optional)', 'cmb' ),
				'id'   => $prefix . 'user_text_field',
				'type' => 'text',
			),
		)
	);

	/**
	 * Metabox for an options page. Will not be added automatically, but needs to be called with
	 * the `cmb_metabox_form` helper function. See wiki for more info.
	 */
	$meta_boxes['options_page'] = array(
		'id'      => 'options_page',
		'title'   => __( 'Theme Options Metabox', 'cmb' ),
		'show_on' => array( 'key' => 'options-page', 'value' => array( $prefix . 'theme_options', ), ),
		'fields'  => array(
			array(
				'name'    => __( 'Site Background Color', 'cmb' ),
				'desc'    => __( 'field description (optional)', 'cmb' ),
				'id'      => $prefix . 'bg_color',
				'type'    => 'colorpicker',
				'default' => '#ffffff'
			),
		)
	);

	// Add other metaboxes as needed

	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'cmb/init.php';

}
