<?php

if (!function_exists('themewordpress_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function themewordpress_setup()
    {

        load_theme_textdomain('themewordpress', get_template_directory() . '/languages');
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }
endif;
add_action('after_setup_theme', 'themewordpress_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function themewordpress_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('themewordpress_content_width', 640);
}

add_action('after_setup_theme', 'themewordpress_content_width', 0);

/**
 * Enqueue scripts and styles.
 */
function themewordpress_scripts()
{
    //CSS
    wp_enqueue_style('themewordpress-style', get_stylesheet_uri());
    wp_enqueue_style('flexslidercss', get_template_directory_uri().'/assets/css/flexslider.css',array(),'1.0.1');

    //JS
        //JQUERY
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri().'/assets/js/vendor/jquery-1.9.1.min.js', array(), '1.0.1');
    wp_enqueue_script('jquery');
        //MAIN
    wp_register_script('main', get_template_directory_uri().'/assets/js/main.js', array(), '1.0.1');
    wp_enqueue_script('main');
        //PLUGINS
    wp_register_script('plugins', get_template_directory_uri().'/assets/js/plugins.js', array(), '1.0.1');
    wp_enqueue_script('plugins');
}

add_action('wp_enqueue_scripts', 'themewordpress_scripts');