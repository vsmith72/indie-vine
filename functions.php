<?php

if ( ! function_exists( 'indievine_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function indievine_setup() {

    /*--- define the theme directory */
    define("THEME_DIR", get_template_directory_uri());

    /*--- REMOVE GENERATOR META TAG ---*/
    remove_action('wp_head', 'wp_generator');

    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'indievine', get_template_directory() . '/languages' );

    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );

    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );

    /**
     * Add support for two custom navigation menus.
     */
    add_theme_support('menus');

    /** Enable suppor for cutom header
    */
    add_theme_support( 'custom-header', $args );

    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

    // html 5
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
}
endif; // universaltheme_setup
add_action( 'after_setup_theme', 'indievine_setup' );
// END THEME SETUP


// ENQUEUE STYLES
function enqueue_styles() {
    /** REGISTER css/stlye.css **/
    wp_register_style( 'style', THEME_DIR . '/style.css', array(), '1', 'all' );
    wp_enqueue_style( 'style' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );


// ENQUEUE SCRIPTS
function enqueue_scripts() {
    /** REGISTER HTML5 Shim **/
    wp_register_script( 'html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js', array( 'jquery' ), '1', false );
    wp_enqueue_script( 'html5-shim' );

    /** REGISTER HTML5 OtherScript.js **/
    wp_register_script( 'my-scripts', THEME_DIR . '/my-scripts.js', array( 'jquery' ), '1', false );
    wp_enqueue_script( 'my-scripts' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );


//ENABLE MENU OPTIONS
function set_menu_areas(){
    register_nav_menus( array(
        'primary'   => __('nav-main' , 'Primary Menu'),
        'footer' => __('nav-footer' , 'Footer Menu')
    ) );
}
add_action('init', 'set_menu_areas');





// SIDE BARS
if ( function_exists('register_sidebar')) {
register_sidebar(array(
	'id' => 'sb-right',
	'name' => 'Right Sidebar',
	'description' => 'Appears on pages and single posts',
	'before_widget' => '<div id="%1$s" class="widget %2$s sb-right">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
	));
}


// enable threaded comments
function enable_threaded_comments(){
if (!is_admin()) {
if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
wp_enqueue_script('comment-reply');
}
}
add_action('get_header', 'enable_threaded_comments');


//FEATURED IMAGES
if ( function_exists( 'add_theme_support' ) ) {
    set_post_thumbnail_size( 913, 9999 ); // default Post Thumbnail (featured image ) dimensions
}
// additional image sizes used in the theme
add_image_size( 'related-sb' , 356.81, 9999); // all images in the sidebar need to be 356.81px in width
add_image_size( 'front-feature-img' , 283.82, 9999); // all images on the front page feature section need to be 283.82px in width
add_image_size( 'in-post-related' , 267.23, 9999); // all images in the related in post and 404 need to be 380px in width


// CUSTOM EXCERPT LENGTH
function custom_excerpt_length() {
	return 50;
}
add_filter('excerpt_length','custom_excerpt_length');

function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'indievine') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


// add custom gravatar
    add_filter( 'avatar_defaults', 'newgravatar' );

    function newgravatar ($avatar_defaults) {
    $myavatar = THEME_DIR  . '/img/gravatar.gif';
    $avatar_defaults[$myavatar] = "Lovey";
    return $avatar_defaults;
    }

// Get the copyright info correct every time
    function indie_vine_copyright() {
    global $wpdb;
    $copyright_dates = $wpdb->get_results("
    SELECT
    YEAR(min(post_date_gmt)) AS firstdate,
    YEAR(max(post_date_gmt)) AS lastdate
    FROM
    $wpdb->posts
    WHERE
    post_status = 'publish'
    ");
    $output = '';
    if($copyright_dates) {
    $copyright = "&copy; " . $copyright_dates[0]->firstdate;
    if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
    $copyright .= '-' . $copyright_dates[0]->lastdate;
    }
    $output = $copyright;
    }
    return $output;
    }
?>
