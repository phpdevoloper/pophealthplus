<?php
	/**
	 * A unique identifier is defined to store the options in the database and reference them from the theme.
	 */
	function optionsframework_option_name() {

		// Change this to use your theme slug
		return 'options-framework-theme';
	}

	function addItem($name,$type,$id = NULL,$std = NULL,$option = NULL,$settings = NULL)
	{
		$Opts = array();
		$Opts = array(
			'name' => __($name, 'options_framework_theme'),
			'id' => $id,
			'type' => $type,
			'std' => $std,
			'options' => $option,
			'settings' =>$settings
		);
		return $Opts;
	}

function optionsframework_options() 
{

	/* Pull all the categories into an array */
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	/* Pull all tags into an array */
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	/* Pull all the pages into an array */
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	/* If using image radio buttons, define a directory path */
	$imagepath =  get_template_directory_uri() . '/inc/images/';

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
	);

	$options = array();	
	$options[] = addItem('General Settings','heading');
	$options[] = addItem('Logo','upload','theme_logo','Logo');
	$options[] = addItem('Prelims','upload','prelims','Prelims PDF');
	$options[] = addItem('Main','upload','main','Main PDF');
	$options[] = addItem('Interview','upload','interview','Interview PDF');
	$options[] = addItem('TNPSC','upload','tnpsc','Tnpsc PDF');
	$options[] = addItem('Daily Current Affairs','upload','daily_current_affairs','Daily Current Affairs PDF');
	$options[] = addItem('365 Days Aptitude Test Today','upload','aptitude_test_today','365 Days Aptitude Test PDF');
	$options[] = addItem('365 Days Aptitude Test Yesterday','upload','aptitude_test_yesterday','365 Days Aptitude Test PDF');
	$options[] = addItem('Facebook','text','theme_facebook','https://www.facebook.com');
	$options[] = addItem('Instagram','text','theme_instagram','https://www.instagram.com');
	$options[] = addItem('WhatsApp','text','theme_whatsapp','https://www.whatsapp.com/');
	$options[] = addItem('Youtube','text','theme_youtube','https://www.youtube.com/');
	// $options[] = addItem('News','text','theme_news','News Events');

			
	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

	/*
	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
	);

	$options[] = array(
		'name' => __('Default Text Editor', 'options_framework_theme'),
		'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'options_framework_theme' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'example_editor',
		'type' => 'editor',
		'settings' => $wp_editor_settings 
	);
	*/
	return $options;
}