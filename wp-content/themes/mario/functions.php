<?php
/**
 * Mario functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mario
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mario_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Mario, use a find and replace
		* to change 'mario' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'mario', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'mario' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'mario_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'mario_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mario_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mario_content_width', 640 );
}
add_action( 'after_setup_theme', 'mario_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mario_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mario' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mario' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mario_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mario_scripts() {
	// wp_enqueue_style( 'mario-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'mario-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'mario-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }

	$templateDirectory = get_template_directory_uri();
    $pathToTheme = get_template_directory();

    wp_enqueue_style('mario-style', $templateDirectory . '/assets/style.css', array(), filemtime($pathToTheme . '/assets/style.css'));
    wp_enqueue_script('mario-script', $templateDirectory . '/assets/script.js', array(), filemtime($pathToTheme . '/assets/script.js'), true);

    // remove unnecessary from head
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'global-styles' );


    wp_dequeue_style( 'wpml-tm-admin-bar' );
    wp_dequeue_style( 'classic-theme-styles' );
    wp_dequeue_script( 'jquery');
    wp_deregister_script( 'jquery');
}
add_action( 'wp_enqueue_scripts', 'mario_scripts' );

// remove unnecessary styles and scripts
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
remove_filter( 'wp_robots', 'wp_robots_max_image_preview_large' );


// Remove wpml meta generator tag
add_action('wp_head', '_remove_wpml_generator', 0);
function _remove_wpml_generator()
{
    if (!empty($GLOBALS['sitepress'])) {
        remove_action(current_filter(), array($GLOBALS['sitepress'], 'meta_generator_tag'));
    }
}
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// функция додасть в тег body клас з іменем шаблону
function get_template_name() {
    if ( empty( get_post_meta( get_the_ID(), '_wp_page_template', true ) ) ) {
        return '';
    }

    return str_replace( '.php', '', basename( get_page_template_slug( get_the_ID() ) ) );
}

// начало. Колонка "Шаблон" в списке страниц админки
function wph_columns_names_layout($defaults) {
    $defaults['page-layout'] = __('Template');
    return $defaults;
}

function wph_add_column_layout($column_name, $id) {
    if($column_name === 'page-layout') {
        $set_template = get_post_meta(get_the_ID(), '_wp_page_template', true);
        if ($set_template == 'default') {
            echo 'Default';
        }
        $templates = get_page_templates();
        ksort($templates);
        foreach (array_keys($templates) as $template) :
            if ($set_template == $templates[$template]) echo $template;
        endforeach;
    }
}
add_filter('manage_pages_columns', 'wph_columns_names_layout', 5);
add_action('manage_pages_custom_column', 'wph_add_column_layout', 5, 2);

function wph_css_for_column_layout() {
    echo '<style> .column-page-layout { width: 10%; } </style>';
}

add_action('admin_head', 'wph_css_for_column_layout');
// Конец. Колонка "Шаблон" в списке страниц админки

// Start. Hide the visual editor for pages and posts
function wph_hide_editor() {
    remove_post_type_support('page', 'editor');
    remove_post_type_support('post', 'editor');
}
add_action('admin_init', 'wph_hide_editor');
// End. Hide the visual editor for pages and posts