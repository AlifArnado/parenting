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
    set_post_thumbnail_size( 825, 510, true);

    add_theme_support('post-formats', array(
        'aside', 'image', 'video', 'qoute', 'link', 'gallery', 'status', 'audio', 'chat'
        ));
 
    /* Register Menu */
    register_nav_menus(array(
        'primary_menu' => 'Primary Menu',
    ));

    // untuk mengcostume logo
    add_theme_support( 'costume-logo', array(
            'height' => 248,
            'width' => 248,
            'flex-height' => true,
        ) );
}
add_action('after_setup_theme', 'theme_wp_setup');

/**
 *
 * fungsi untuk menambahkan widged
 *
 */
function parenting_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Widget Area', 'parenting' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'parenting' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'parenting_widgets_init' );

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
    // wp_enqueue_style(
    //     'fontawesome-style',
    //     '//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'
    // );
    
    // wp_enqueue_style(
    //     'font-lora-style',
    //     '//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic'
    // );
 
    // wp_enqueue_style(
    //     'font-open-sans',
    //     '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
    // );
 
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
require get_template_directory() . '/bootstrap-walker.php';

/**

    TODO:
    - pengaturan untuk forum
    - list bagian forum parenting

 */


// create vertical list subforum layout
function custom_bbp_sub_list() {
    $args['separator'] = '';
    return $args;
}
add_filter('bbp_after_list_forums_parse_args', 'costom_bbp_sub_forum_list');

function remove_counts() {
    $args['show_topic_count'] = false;
    $args['show_reply_count'] = false;
    $args['count_sep'] = '';
    return $args;
}
add_filter('bbp_before_list_forums_parse_args', 'remove_counts');

add_filter( 'bbp_no_breadcrumb', '__return_true' );
// untuk costume link breadcrumb link

function mycostom_breadcrumb_options()
{
    $args['include_home']   = true;
    $args['include_root']   = true;
    $args['include_current'] = true;
    return $args;
}
add_filter( 'bbp_before_get_breadcrumb_parse_args', 'mycostom_breadcrumb_options' );

// untuk meload theme bbpress
if(class_exists('bbpress')) {
    add_action('wp_print_styles', 'deregister_bbpress_style', 15);

    function deregister_bbpress_styles() {
        wp_deregister_style('bbp-default' );
    }
    wp_enqueue_style('bbpress_css', plugins_url().'/bbpress/templates/default/css/bbpress.min.css');
}

/**
 *
 * digunakan untuk mengedit profile user
 *
 */
add_filter('wp_nav_menu_items', 'my_nav_menu_profile_link');
function my_nav_menu_profile_link($menu) {
    if (!is_user_logged_in()) {
        return $menu;
    } else {
        $current_user = wp_get_current_user();
        $user = $current_user->user_nicename;
        $profilelink = '<li><a href="/forums/users/'.$user.'/edit">Edit Profile </a></li>';
        $menu = $menu . $profilelink;
        return $menu;
    }
}

// membuat pagination costume bootstrap
function wp_pagination() {
    global $wp_query;
    $big = 12345678;
    $pages = paginate_links(array(
            'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format'    => '?page=%#%',
            'current'   => max(1, get_query_var('paged')),
            'total'     => $wp_query->max_num_pages,
            'type'      => 'array',
            'prev_next' => TRUE,
            'prev_next' => '&larr; Pevious',
            'next_text' => 'NEXT PAGE &rarr',
        ));
    if(is_array($pages)) {
        $current_page = (get_query_var('paged') == 0) ? 1: get_query_var('paged');
        echo "<ul class='pagination'>";
        echo "<li><span>". $paged . 'of'. $wp_query->max_num_pages. '</span></li>';
        foreach ($page_format as $i => $page) {
            if ($current_page == 1 && $i == 0) {
                echo "<li class='active'>$page</li>";
            } else {
                if ($current_page != 1 && $current_page == $i) {
                    echo "<li class='active'>$page</li>";
                } else {
                    echo "<li>$page</li>";
                }
            }
        }
        echo "</ul>";
    }
}



?>