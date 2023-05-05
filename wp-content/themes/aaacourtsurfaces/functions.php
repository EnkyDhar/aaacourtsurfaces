<?php



//** *Enable upload for webp image files.*/
function webp_upload_mimes($existing_mimes)
{
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');

if (!function_exists('aaacourtsurfaces_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function aaacourtsurfaces_setup()
    {

        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        //         load_theme_textdomain( 'shake-mediation', get_template_directory() . '/languages' );

        /**
         * Add default posts and comments RSS feed links to <head>.
         */
        add_theme_support('automatic-feed-links');

        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support('post-thumbnails');

        /**
         * Add support for two custom navigation menus.
         */
        register_nav_menus(array(
            'primary'   => __('Primary Menu', 'aaacourtsurfaces'),
            'footer' => __('Secondary Menu', 'aaacourtsurfaces')
        ));

        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
    }
endif; // aaacourtsurfaces_setup
add_action('after_setup_theme', 'aaacourtsurfaces_setup');


function my_login_logo()
{ ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: none;
            background-size: 0 0;
            height: 0;
            margin: 0 auto 0;
            width: 0;
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');


function custom_login_message()
{
    $message = "<h2 class='footer-logo'>AAACourtSurfaces</h2>";
    return $message;
}
add_filter('login_message', 'custom_login_message');


add_filter('acf/settings/remove_wp_meta_box', '__return_false');


function acf_wysiwyg_remove_wpautop()
{
    // remove p tags //
    remove_filter('acf_the_content', 'wpautop');
}

add_action('acf/init', 'acf_wysiwyg_remove_wpautop');
