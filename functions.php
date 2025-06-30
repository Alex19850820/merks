<?php
/**
 * merck functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package merck
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
function merck_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on merck, use a find and replace
		* to change 'merck' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'merck', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'merck' ),
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
			'merck_custom_background_args',
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
add_action( 'after_setup_theme', 'merck_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function merck_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'merck_content_width', 640 );
}
add_action( 'after_setup_theme', 'merck_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function merck_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'merck' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'merck' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'merck_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function merck_scripts() {
	wp_enqueue_style( 'merck-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'merck-style', 'rtl', 'replace' );
    /*
    * Подключаем стили:
    * Аргументы:
    * 1) название стиля (может быть любым)
    * 2) путь к файлу
    */
    // для локальных стилей

    wp_enqueue_script( 'merck-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

    wp_enqueue_style( 'merck-css-modal', get_template_directory_uri() . '/assets/css/modal.css' );

    wp_enqueue_style( 'merck-libs_min_css', get_template_directory_uri() . '/css/libs.min.css', array(), '' );

    wp_enqueue_style( 'merck-font-roboto-styles', get_template_directory_uri() . '/assets/css/font/roboto.css' );
	
	wp_enqueue_style( 'merck-font-proxima-styles', get_template_directory_uri() . '/assets/css/font/Proxima/stylesheet.css' );

    wp_enqueue_style( 'merck-bootstrap-css-mini', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );

    wp_enqueue_style( 'merck-css-slick', get_template_directory_uri() . '/assets/css/slick.css' );

    wp_enqueue_style( 'merck-css-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css' );

    wp_enqueue_style( 'merck-css-styles-my', get_template_directory_uri() . '/assets/css/style.css' );

    wp_enqueue_style( 'merck-css-fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css' );

//    wp_enqueue_style( 'merck-fancy-css', get_template_directory_uri() . '/css/fancybox.css', array(), '' );



//    wp_enqueue_style( 'merck-css-buttons-fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox-buttons.css' );

//    wp_enqueue_style( 'merck-css-thumbs-fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox-thumbs.css' );



    wp_enqueue_script( 'merck-js-jequery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', [], '20151215', true );

//    wp_enqueue_script( 'merck-fan-jq', get_template_directory_uri() . '/js/fancybox.umd.js', array(), '', true );

//    wp_enqueue_script( 'merck-js-fancybox-jq', get_template_directory_uri() . '/js/jquery.fancybox.js', array(), '', true );

    wp_enqueue_script( 'merck-js-anim-number', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', [], '', true );

    wp_enqueue_script( 'merck-js-inputmask', get_template_directory_uri() . '/js/jquery.inputmask.bundle.js', [], '', true );

//    wp_enqueue_script( 'merck-js_fancybox-lib-jq', get_template_directory_uri() . '/js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js', [], '', true );

//    wp_enqueue_script( 'merck-js_fancybox-source-jq', get_template_directory_uri() . '/js/fancybox/source/jquery.fancybox.pack.js', [], '', true );



//    wp_enqueue_script( 'merck-js_fancybox-source-helpers-jq', get_template_directory_uri() . '/js/fancybox/source/helpers/jquery.fancybox-buttons.js', [], '', true );

//    wp_enqueue_script( 'merck-js_fancybox-source-helpers-media-jq', get_template_directory_uri() . '/js/fancybox/source/helpers/jquery.fancybox-media.js', [], '', true );

//    wp_enqueue_script( 'merck-js_fancybox-source-helpers-thumbs-jq', get_template_directory_uri() . '/js/fancybox/source/helpers/jquery.fancybox-thumbs.js', [], '', true );

    wp_enqueue_script( 'merck-js_phone', get_template_directory_uri() . '/js/phone.js', [], '', true );

    wp_enqueue_script( 'merck-js_phone_ru', get_template_directory_uri() . '/js/phone-ru.js', [], '', true );

    wp_enqueue_script( 'merck_scripts-slick', get_template_directory_uri() . '/js/slick.min.js', [], '', true );

//    wp_enqueue_script( 'merck_scripts-default', get_template_directory_uri() . '/js/default.js', [], '', true );


    wp_enqueue_script( 'merck_script_form', get_template_directory_uri() . '/js/script_form.js', [], '', true );
    /*
  * Добавляем возможность отправлять AJAX-запросы к скриптам
  * Аргументы:
  * 1) название скрипта, в котором будем писать ajax
  * 2) название объекта, к которому будем обращаться в файле скрипта
  * 3) элементы объекта, которые нам нужны (путь к обработчику аякса, путь к папке темы)
  */
    wp_localize_script( 'merck_script_form', 'myajax',
        [
            'url' => admin_url( 'admin-ajax.php' ),
            'template' => get_template_directory_uri()
        ]
    );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'merck_scripts' );

/*my functions*/
require get_template_directory() . '/inc/custom-functions.php';

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

