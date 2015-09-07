<?php
/**
 * customtheme functions and definitions
 *
 * @package customtheme
 */

/**
 * Include plugin.php
 */
require_once( ABSPATH . 'wp-admin/includes/plugin.php' );

/**
 * Include vafpress-framework
 * @url https://github.com/vafour/vafpress-framework
 */
// require_once TEMPLATEPATH . '/vafpress-framework/bootstrap.php';

// function customtheme_vafpress_options() {
// 	// initialize the object
// 	$theme_options = new VP_Option( array(
// 		// set it to TRUE if you don't want the option values to be saved (in your theme demo, perhaps)
// 		'is_dev_mode'           => false,
// 		// the name for the settings in the database
// 		'option_key'            => 'vpt_option',
// 		// the slug of your options page
// 		'page_slug'             => 'vpt_option',
// 		// path to the template file or the array
// 		'template'              => get_template_directory() . '/vafpress/options-template.php',
// 		// parent menu page
// 		'menu_page'             => 'themes.php',
// 		// decides whether to automatically name menus or not
// 		'use_auto_group_naming' => true,
// 		// show (by default) or hide the "Export/Import" page
// 		'use_exim_menu'         => true,
// 		// minimum user role to view the options panel
// 		'minimum_role'          => 'edit_theme_options',
// 		// type of the layout (fixed by default)
// 		'layout'                => 'fixed',
// 		// title of the options page
// 		'page_title'            => __( 'Theme Options', 'customtheme' ),
// 		// title of the main menu item
// 		'menu_label'            => __( 'Theme Options', 'customtheme' ),
// 	));
// }
// add_action( 'after_setup_theme', 'customtheme_vafpress_options' );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'customtheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function customtheme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on customtheme, use a find and replace
	 * to change 'customtheme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'customtheme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// Declare the dimensions of our Post Thumbnail.
	set_post_thumbnail_size( 215, 215, array( 'center', 'center') );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'customtheme' ),
	   ) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	   ) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	   ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'customtheme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	   ) ) );
}
endif; // customtheme_setup
add_action( 'after_setup_theme', 'customtheme_setup' );

/**
 * Register widget areas.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
add_action( 'widgets_init', 'customtheme_widgets_init' );
if ( ! function_exists( 'customtheme_widgets_init' ) ) :
	function customtheme_widgets_init() {
	   register_sidebar( array(
		  'name'          => __( 'Sidebar', 'customtheme' ),
		  'id'            => 'sidebar-1',
		  'description'   => '',
		  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		  'after_widget'  => '</aside>',
		  'before_title'  => '<h3 class="widget-title">',
		  'after_title'   => '</h3>',
		  ) );
	   register_sidebar( array(
		  'name' => 'Footer Left',
		  'id' => 'footer-sidebar-1',
		  'description' => 'Appears in the footer area',
		  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		  'after_widget' => '</aside>',
		  'before_title' => '<h3 class="widget-title">',
		  'after_title' => '</h3>',
		  ) );
	   register_sidebar( array(
		  'name' => 'Footer Center',
		  'id' => 'footer-sidebar-2',
		  'description' => 'Appears in the footer area',
		  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		  'after_widget' => '</aside>',
		  'before_title' => '<h3 class="widget-title">',
		  'after_title' => '</h3>',
		  ) );
	   register_sidebar( array(
		  'name' => 'Footer Right',
		  'id' => 'footer-sidebar-3',
		  'description' => 'Appears in the footer area',
		  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		  'after_widget' => '</aside>',
		  'before_title' => '<h3 class="widget-title">',
		  'after_title' => '</h3>',
		  ) );
	   register_sidebar( array(
		  'name' => 'Footer Full Width Above',
		  'id' => 'footer-sidebar-4',
		  'description' => 'Appears in the footer area',
		  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		  'after_widget' => '</aside>',
		  'before_title' => '<h3 class="widget-title">',
		  'after_title' => '</h3>',
		  ) );
	   register_sidebar( array(
		  'name' => 'Footer Full Width Below',
		  'id' => 'footer-sidebar-5',
		  'description' => 'Appears in the footer area',
		  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		  'after_widget' => '</aside>',
		  'before_title' => '<h3 class="widget-title">',
		  'after_title' => '</h3>',
		  ) );
   }
   endif;

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'customtheme_scripts' );
if ( ! function_exists( 'customtheme_scripts' ) ) :
	function customtheme_scripts() {
		$port_pos = strpos($_SERVER['HTTP_HOST'], ":");
		if($port_pos === false) {
			$host_parts = array($_SERVER['HTTP_HOST']);
		} else {
			$host_parts = explode(":", $_SERVER['HTTP_HOST']);
		}
		$current_host = $host_parts[0];
		$tld_list = array(
			'.localhost',
			'.local',
			'.dev'
		);
		$host_arr = explode('.', $current_host);
		$current_tld = '.' . $host_arr[count($host_arr) - 1];
		if ( $current_host == 'localhost' || in_array($current_tld, $tld_list) ) $hostname_match = true;
		else $hostname_match = false;

		// Add the theme stylesheet
		wp_enqueue_style( 'customtheme-style', get_stylesheet_uri() );

		// Add the navigation script
		wp_enqueue_script( 'customtheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

		// Add the skip link focus script
		wp_enqueue_script( 'customtheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

		// Add the comments script
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		// Add the bootstrap stylesheet.
		if($hostname_match) {
			wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array('customtheme-style'), '3.1.1' );
		} else {
			wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array('customtheme-style'), '3.1.1' );
		}

		// Add the bootstrap stylesheet.
		if($hostname_match) {
			wp_enqueue_style( 'colorbox-style', get_template_directory_uri() . '/css/colorbox.css', array('bootstrap-style'), '1.5.14' );
		} else {
			wp_enqueue_style( 'colorbox-style', get_template_directory_uri() . '/css/colorbox.min.css', array('bootstrap-style'), '1.5.14' );
		}

		// Add our font-awesome stylesheet.
		if($hostname_match) {
			wp_enqueue_style( 'font-awesome-style', get_template_directory_uri() . '/css/font-awesome.css', array('bootstrap-style'), '1.0' );
		} else {
			wp_enqueue_style( 'font-awesome-style', get_template_directory_uri() . '/css/font-awesome.min.css', array('bootstrap-style'), '1.0' );
		}

		// Add our main stylesheet.
		if($hostname_match) {
			wp_enqueue_style( 'customtheme-custom-style', get_template_directory_uri() . '/css/main.css', array('font-awesome-style'), '1.0' );
		} else {
			wp_enqueue_style( 'customtheme-custom-style', get_template_directory_uri() . '/css/main.min.css', array('font-awesome-style'), '1.0' );
		}

		// Add the default jquery script
		wp_enqueue_script('jquery');

		// Add the bootstrap script
		if($hostname_match) {
			wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.1.1', array( 'jquery' ) );
		} else {
			wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.1.1', array( 'jquery' ) );
		}

		// Add the colorbox script
		if($hostname_match) {
			wp_enqueue_script( 'colorbox', get_template_directory_uri() . '/js/jquery.colorbox-min.js', array(), '1.5.14', array( 'bootstrap' ) );
		} else {
			wp_enqueue_script( 'colorbox', get_template_directory_uri() . '/js/jquery.colorbox-min.js', array(), '1.5.14', array( 'bootstrap' ) );
		}

		// Add our main script
		if($hostname_match) {
			wp_enqueue_script( 'customtheme-script', get_template_directory_uri() . '/js/main.js', array(), '3.1.1', array( 'colorbox' ) );
		} else {
			wp_enqueue_script( 'customtheme-script', get_template_directory_uri() . '/js/main.min.js', array(), '3.1.1', array( 'colorbox' ) );
		}
	}
	endif;

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Hide the admin bar
 */
add_filter('show_admin_bar', '__return_false');

/**
 * remove _admin_bar_bump_cb() from wp_head()
 * removes the margin-top added to the html element
 */
add_action('get_header', 'my_filter_head');
if ( ! function_exists( 'my_filter_head' ) ) :
	function my_filter_head() {
		remove_action('wp_head', '_admin_bar_bump_cb');
	}
endif;

/**
 * Redirect to home page on logout
 */
add_action('wp_logout','go_home');
if ( ! function_exists( 'go_home' ) ) :
	function go_home() {
	  wp_redirect( home_url() );
	  exit();
	}
endif;

/**
 * Remove the excess markup from the <head> tag
 */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

/**
* Disable update notifications
*/
// add_filter('pre_site_transient_update_core','remove_core_updates');
// add_filter('pre_site_transient_update_plugins','remove_core_updates');
// add_filter('pre_site_transient_update_themes','remove_core_updates');
// if ( ! function_exists( 'remove_core_updates' ) ) :
//     function remove_core_updates(){
//       global $wp_version;
//       return(object) array(
//         'last_checked' => time(),
//         'version_checked'=> $wp_version,
//         );
//     }
// endif;

/**
* Media Library: File type sections
*/
add_filter( 'post_mime_types', 'modify_post_mime_types' );
if ( ! function_exists( 'modify_post_mime_types' ) ) :
	function modify_post_mime_types( $post_mime_types ) {
	  // select the mime type, here: 'application/pdf'
	  // then we define an array with the label values
	  $post_mime_types['application/pdf'] = array( __( 'PDFs', 'customtheme' ), __( 'Manage PDFs', 'customtheme' ), _n_noop( 'PDF <span class="count">(%s)</span>', 'PDFs <span class="count">(%s)</span>' ) );
	  // then we return the $post_mime_types variable
	  return $post_mime_types;
	}
endif;

/**
 * Fixing a style conflict between the Floating Publish Button plugin and Advanced Custom Fields
 */
if ( is_plugin_active('floating-publish-button/index.php') ) {
	if( is_plugin_active('advanced-custom-fields-pro/acf.php') || is_plugin_active('advanced-custom-fields/acf.php') ) {
		add_action( 'admin_head-post.php', 'edit_post_style' );
		function edit_post_style() {
			?>
			<style>
			   .metabox-holder .postbox-container .empty-container {
				  border: 0 !important;
			  }
		  </style>
		  <?php
	  }
  }
}

/*
 * Change the search URL to pretty format
 */
if ( ! function_exists( 'special_nav_class' ) ) :
	add_action( 'template_redirect', 'customtheme_change_search_url_rewrite' );
	function customtheme_change_search_url_rewrite() {
		if ( get_option('permalink_structure') != '' && is_search() && ! empty( $_GET['s'] ) ) {
			wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
			exit();
		}
	}
endif;

/*
 * Show no posts on empty search
 */
if ( ! function_exists( 'special_nav_class' ) ) :
	add_filter('pre_get_posts','customtheme_search_filter');
	function customtheme_search_filter($query) {
		// If 's' request variable is set but empty
		if (isset($_GET['s']) && empty($_GET['s']) && $query->is_main_query()){
			$query->is_search = true;
			$query->is_home = false;
		}
		return $query;
	}
endif;

/**
 * Set up the posts column in Users table to not be sortable
 */
// add_filter( 'manage_users_sortable_columns', 'customtheme_sortable_user_table_column' );
// function customtheme_sortable_user_table_column( $columns ) {
//  // To make a column 'un-sortable' remove it from the array
//  unset($columns['posts']);
//  return $columns;
// }

/**
 * Remove the automatic '<p>' tags around the content
 */
// remove_filter('the_content', 'wpautop');

/**
 * Remove the automatic '<p>' tags around the excerpt
 */
// remove_filter('the_excerpt', 'wpautop');

/* disable comments on pages, but not posts */
if ( ! function_exists( 'custometheme_disable_comments_on_pages' ) ) {
	function custometheme_disable_comments_on_pages( $file ) {
		return is_page() ? __FILE__ : $file;
	}
	add_filter( 'comments_template', 'custometheme_disable_comments_on_pages', 11 );
}

/* ******************************************************************** */
/*                   COMMENTS AND POSTS IN USERS TABLE                  */
/* ******************************************************************** */

/**
 * Add a comments column to the users table, and set both comments and posts
 * to be sortable
 */

/**
 * Display comments count in custom column of the Users table
 */
add_filter( 'manage_users_columns', 'customtheme_modify_user_table' );
if ( ! function_exists( 'customtheme_modify_user_table' ) ) :
	function customtheme_modify_user_table( $column ) {
		$column['comments'] = 'Comments';
		return $column;
	}
endif;

add_filter( 'manage_users_custom_column', 'customtheme_modify_user_table_row', 10, 3 );
if ( ! function_exists( 'customtheme_modify_user_table_row' ) ) :
	function customtheme_modify_user_table_row( $val, $column_name, $user_id ) {
		$user = get_userdata( $user_id );
		switch ($column_name) {
			case 'comments' :
		 global $wpdb;
		 $sql_query = 'SELECT COUNT(comment_ID) FROM ' . $wpdb->comments. ' WHERE user_id = "' . $user_id . '"';
		 $count = $wpdb->get_var($sql_query);
		 return $count;
		 break;
		 default:
	 }
	 return $return;
	}
endif;

add_action( 'admin_head-users.php', 'customtheme_users_table_style' );
if ( ! function_exists( 'customtheme_users_table_style' ) ) :
	function customtheme_users_table_style() {
		?><style>
	.fixed .column-comments {
		width: 7.5em;
	}
</style>
	<?php
	}
endif;

/**
 * Set up posts and comments columns in Users table to be sortable
 */
add_filter( 'manage_users_sortable_columns', 'customtheme_sortable_user_table_column' );
if ( ! function_exists( 'customtheme_sortable_user_table_column' ) ) :
	function customtheme_sortable_user_table_column( $columns ) {
		$columns['posts'] = 'posts';
		$columns['comments'] = 'comments';
		return $columns;
	}
endif;

/* ******************************************************************** */
/*                      BOOTSTRAP CUSTOMIZATIONS                        */
/* ******************************************************************** */

/**
 * Add the bootstrap menu navwalker
 */
require_once('wp_bootstrap_navwalker.php');

/**
 * Add 'active' class to active menu list item
 */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
if ( ! function_exists( 'special_nav_class' ) ) :
	function special_nav_class($classes, $item){
		if( in_array('current-menu-item', $classes) ){
			$classes[] = 'active ';
		}
		return $classes;
	}
endif;

/**
 * Remove the automatic '<p>' tags around '<button>' tags
 */
add_filter('the_content', 'filter_ptags_on_buttons');
if ( ! function_exists( 'filter_ptags_on_buttons' ) ) :
	function filter_ptags_on_buttons($content) {
		$content = str_ireplace('</button></p>', '</button>', $content);
		return str_ireplace('<p><button', '<button', $content);
	}
endif;

/**
 * Remove unwanted '<br>' tags from inside of '<form>' tags
 */
add_filter('the_content', 'remove_bad_br_tags');
if ( ! function_exists( 'remove_bad_br_tags' ) ) :
	function remove_bad_br_tags($content) {
		$content = str_ireplace("</label>\n<br />", "</label>", $content);
		$content = str_ireplace("</label><br />", "</label>", $content);
		$content = str_ireplace("</button>\n<br />", "</button>", $content);
		$content = str_ireplace("</button><br />", "</button>", $content);
		return $content;
	}
endif;

/* ******************************************************************** */
/*                     ADVANCED CUSTOM FIELDS PRO                       */
/* ******************************************************************** */

/**
 * Create field group for the Bootstrap Carousel page template
 */

if( is_plugin_active('advanced-custom-fields-pro/acf.php') ) {

  if( function_exists('register_field_group') ):

	  register_field_group(
		  array(
			  'key' => 'group_54e178c148666',
			  'title' => 'Slideshow',
			  'fields' => array (
				  array (
					  'key' => 'field_54e1799805d41',
					  'label' => 'Slideshow',
					  'name' => 'slideshow',
					  'prefix' => '',
					  'type' => 'repeater',
					  'instructions' => '',
					  'required' => 0,
					  'conditional_logic' => 0,
					  'wrapper' => array (
						  'width' => '',
						  'class' => '',
						  'id' => '',
					  ),
					  'min' => '',
					  'max' => '',
					  'layout' => 'table',
					  'button_label' => 'Add Row',
					  'sub_fields' => array (
						  array (
							  'key' => 'field_54e179ab05d42',
							  'label' => 'Image',
							  'name' => 'image',
							  'prefix' => '',
							  'type' => 'image',
							  'instructions' => '',
							  'required' => 0,
							  'conditional_logic' => 0,
							  'wrapper' => array (
								  'width' => '',
								  'class' => '',
								  'id' => '',
							  ),
							  'return_format' => 'url',
							  'preview_size' => 'thumbnail',
							  'library' => 'all',
						  ),
						  array (
							  'key' => 'field_54e179c405d43',
							  'label' => 'Title',
							  'name' => 'title',
							  'prefix' => '',
							  'type' => 'text',
							  'instructions' => '',
							  'required' => 0,
							  'conditional_logic' => 0,
							  'wrapper' => array (
								  'width' => '',
								  'class' => '',
								  'id' => '',
							  ),
							  'default_value' => '',
							  'placeholder' => 'Enter the title',
							  'prepend' => '',
							  'append' => '',
							  'maxlength' => '',
							  'readonly' => 0,
							  'disabled' => 0,
						  ),
						  array (
							  'key' => 'field_54e179cf05d44',
							  'label' => 'Description',
							  'name' => 'description',
							  'prefix' => '',
							  'type' => 'textarea',
							  'instructions' => '',
							  'required' => 0,
							  'conditional_logic' => 0,
							  'wrapper' => array (
								  'width' => '',
								  'class' => '',
								  'id' => '',
							  ),
							  'default_value' => '',
							  'placeholder' => 'Enter the description',
							  'maxlength' => '',
							  'rows' => '',
							  'new_lines' => 'wpautop',
							  'readonly' => 0,
							  'disabled' => 0,
						  ),
					  ),
				  ),
			  ),
			  'location' => array (
				  array (
					  array (
						 'param' => 'page',
						 'operator' => '==',
						 'value' => get_page_by_title( "Bootstrap Carousel" )->ID,
					  ),
				  ),
			  ),
			  'menu_order' => 0,
			  'position' => 'normal',
			  'style' => 'default',
			  'label_placement' => 'top',
			  'instruction_placement' => 'label',
			  'hide_on_screen' => array (
				  0 => 'the_content',
			  ),
		  )
	  );
  endif;

}

/* ******************************************************************** */
/*                             SPAM TRAP                                */
/* ******************************************************************** */

// /**
//  * Add a spam-trap to comment form and registration form
//  *
//  * Include hidden fields. If it receives an input, we have a bot!
//  * Add a unique number (changes daily) to all the fields to keep bots from learning what fields to ignore.
//  * Store spam entries as spam so that the bot is not aware the form failed.
//  */

// function get_decoy_fields() {
//     $decoys = array( 'firstname', 'lastname', 'email2', 'address', 'address2', 'city', 'state', 'zipcode', 'telephone', 'phone');
//     return $decoys;
// }

// function get_dailyID() {
//     //use daily ID instead of uniqid so that forms don't clear on refresh.
//     srand(date('Ymd'));
//     $number = rand(0,9999999);
//     $hash = substr(sha1($number),0,8);
//     return $hash;
// }

// add_filter('comment_form_defaults', 'customtheme_add_comment_spam_trap');
// function customtheme_add_comment_spam_trap($arg) {
//     $decoyFields = get_decoy_fields();
//     $arg['fields'] = array_reverse($arg['fields'], true); //reverse order to place decoys at front of form.

//     $hash = get_dailyID();

//     $spamtrap = '';
//     foreach ($decoyFields as $decoy) {
//         $spamtrap .= '<label style="visibility: hidden !important; display: none !important;" for="' . $decoy . $hash . '" >' . $decoy . ' *</label>';
//         $spamtrap .= '<input style="visibility: hidden !important; display: none !important;" id="' . $decoy . $hash . '" name="' . $decoy . $hash . '" type="text" autocomplete="off">';
//     }
//     $arg['fields']['spamtrap'] = $spamtrap;
//     $arg['fields'] = array_reverse($arg['fields'], true); //reverse back so fields are in regular order

//     // Add hashes to author and email
//     $arg['fields']['author'] = str_replace('name="author"', 'name="author' . $hash . '"', $arg['fields']['author'] );
//     $arg['fields']['email'] = str_replace('name="email"', 'name="email' . $hash . '"', $arg['fields']['email'] );
//     return $arg;
// }

// add_action('register_form', 'customtheme_add_register_spam_trap');
// function customtheme_add_register_spam_trap() {
//     $decoyFields = get_decoy_fields(); // List of names for decoy fields
//     $hash = get_dailyID(); // Get unique daily ID hash

//     $output = '';
//     foreach ($decoyFields as $decoy) {
//         $output .= '<p style="visibility: hidden !important; display: none !important;">';
//         $output .= '<label for="' . $decoy . $hash . '" >' . $decoy . ' *</label>';
//         $output .= '<input name="' . $decoy . $hash . '" type="text" autocomplete="off" style="visibility:hidden"></p>';
//     }
//     echo $output;
// }

// add_action('pre_comment_on_post', 'customtheme_fix_hashed_comment');
// function customtheme_fix_hashed_comment($commentdata) {
//     $hash = get_dailyID();

//     // fix hashed author & email fields
//     if(isset($_POST['author' . $hash])) {
//         $_POST['author'] = trim(strip_tags($_POST['author' . $hash]));
//     }
//     if(isset($_POST['email' . $hash])) {
//         $_POST['email'] = trim(strip_tags($_POST['email' . $hash]));
//     }
//     return $commentdata;
// }

// add_action('comment_post', 'customtheme_check_comment_spam_trap');
// function customtheme_check_comment_spam_trap($comment_id, $approved='null') {
//     // first check http_referer
//     $siteURL = str_ireplace('www.', '', parse_url(home_url(), PHP_URL_HOST));
//     if(!stripos($_SERVER['HTTP_REFERER'], $siteURL)) {
//         wp_die('There was an error.', 'Error');
//         exit;
//     }
//     if($approved != 'spam') { // No need to check twice
//         $decoyFields = get_decoy_fields();
//         $hash = get_dailyID();

//         foreach ($decoyFields as $decoy) {
//             if(isset($_POST[$decoy . $hash])) {
//                 if($_POST[$decoy . $hash] != '') {
//                     wp_spam_comment($comment_id);
//                 }
//             }
//         }
//     }
// }

// add_action('registration_errors', 'customtheme_check_register_spam_trap', 10, 3);
// function customtheme_check_register_spam_trap($errors, $sanitized_user_login, $user_email) {
//     // first check http_referer
//     $siteURL = str_ireplace('www.', '', parse_url(home_url(), PHP_URL_HOST));
//     if(!stripos($_SERVER['HTTP_REFERER'], $siteURL)) {
//         wp_die('There was an error.', 'Error');
//         exit;
//     }
//     if(!$errors->get_error_code()) { // Check to see if there are already errors
//         $decoyFields = get_decoy_fields(); // List of names for decoy fields
//         $hash = get_dailyID(); // Get unique daily ID hash

//         foreach ($decoyFields as $decoy) {
//             if(isset($_POST[$decoy . $hash])) {
//                 if($_POST[$decoy . $hash] != '') {
//                     wp_die('There was an error.', 'Error');
//                     exit;
//                 }
//             }
//         }
//     }
//     return $errors;
// }
