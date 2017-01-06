<?php
/**
 * theme_wp_setup
 * setup dasar untuk konfigurasi theme
 */
function theme_wp_setup()
{
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));
    // pengganti tag <title></title>
    add_theme_support('title-tag');
 
    // mengaktifkan post thumbnail
    add_theme_support('post-thumbnails');
 
    /* Register Menu */
    register_nav_menus(array(
        'primary_menu' => 'Primary Menu',
    ));
}
add_action('after_setup_theme', 'theme_wp_setup');
 
/**
 * Menambahkan Scipts Javascript dan CSS
 */
function theme_wp_scripts()
{
    /*
     * Adds JavaScript to pages with the comment form to support
     * sites with threaded comments (when in use).
     */
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
 
    // url ke bootstrap.min.js yang berada css/bootstrap.min.css
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
    
    // url ke owl carusel yang berapa css/owl.carousel.css
    wp_enqueue_style('owlcarousel-style', get_template_directory_uri(). '/css/owl.carousel.css');
    wp_enqueue_style('owltheme-style', get_template_directory_uri(). '/css/owl.theme.css');
    wp_enqueue_style('owl.transition.css', get_template_directory_uri(). '/css/owl.transitions.css');
    
    /**
     * WARNING STYLE BERIKUT HANYA AKAN BEKERJA SAAT KOMPUTER ANDA TERKONEKSI INTERNET
     */
    wp_enqueue_style(
        'fontawesome-style',
        '//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'
    );
    
    wp_enqueue_style(
        'font-lora-style',
        '//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic'
    );
 
    wp_enqueue_style(
        'font-open-sans',
        '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
    );
 
    // style.css
    wp_enqueue_style('customize-style', get_stylesheet_uri());
    wp_enqueue_style('costomize-index-style', get_template_directory_uri(). '/css/index.css');
    
    /**
     * JAVASCRPIPT
     */
    // jquery di js/jquery
    wp_enqueue_script(
        'jquery-script', get_template_directory_uri() . '/js/jquery.min.js', array(), '', true);
    wp_enqueue_script(
        'bootstrap-script',
        get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true);
    wp_enqueue_script(
        'loadmore-script',
        get_template_directory_uri() . '/js/load-more.js', array(), '', true);
    wp_enqueue_script( 'masonry-script', get_template_directory_uri() . '/js/masonry.min.js', array(), '', true);
    wp_enqueue_script( 'masonry-pkgd-script', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), true);
    wp_enqueue_script( 'imagesloaded-pkgd-script', get_template_directory_uri() . '/js/imagesloaded.pkgd.js', array(), true);
    wp_enqueue_script( 'owl-carousel-script', get_template_directory_uri(). '/js/owl.carousel.min.js', array(), true);
    wp_enqueue_script( 'picture-fill-script', get_template_directory_uri(). '/js/picturefill.min.js', array(), true);
    wp_enqueue_script( 'moment-script', get_template_directory_uri(). '/js/moment.js', array(), true);
    
}
 
add_action('wp_enqueue_scripts', 'theme_wp_scripts');
 
/**
 * @param  $more from global variable
 * mengganti tanda '[...]' menjadi '....'
 */
function new_excerpt_more($more)
{
    return '....';
}
 
add_filter('excerpt_more', 'new_excerpt_more');
 
// custom wp_nav_menu untuk nav-bar bootstrap
require get_template_directory() . '/bootstrap-walker.php'

?>