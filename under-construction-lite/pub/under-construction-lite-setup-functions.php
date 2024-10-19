<?php

if (!function_exists('under_construction_lite_setup')) :

    function under_construction_lite_setup() {
        add_theme_support('automatic-feed-links');
        add_theme_support('woocommerce');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-header');
        add_theme_support('title-tag');
        add_theme_support('custom-background', array(
            'default-color' => '000000'
        ));

        $defaults = array(
            'default-image'      => '',
            'default-text-color' => '0065b3',
            'width'              => 1400,
            'height'             => 500,
            'uploads'            => true,
            'wp-head-callback'   => 'under_construction_lite_header_style',
        );
        add_theme_support('custom-header', $defaults);

        //custom logo
        $under_construction_lite_custom_logo = array(
            'height'      => 56,
            'width'       => 224,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array('site-title', 'site-description'),
        );
        add_theme_support('custom-logo', $under_construction_lite_custom_logo);
        add_image_size('under-construction-lite-home-box-size', 400, 250, true);
        
        /**
         * Add post-formats support.
         */
        add_theme_support(
                'post-formats',
                array(
                    'link',
                    'aside',
                    'gallery',
                    'image',
                    'quote',
                    'status',
                    'video',
                    'audio',
                    'chat',
                )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
                'html5',
                array(
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption',
                    'style',
                    'script',
                    'navigation-widgets',
                )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        // Add support for Block Styles.
        add_theme_support('wp-block-styles');

        // Add support for full and wide align images.
        add_theme_support('align-wide');

        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');

        // Add support for custom line height controls.
        add_theme_support('custom-line-height');

        // Add support for experimental link color control.
        add_theme_support('experimental-link-color');

        // Add support for experimental cover block spacing.
        add_theme_support('custom-spacing');

        // Add support for custom units.
        // This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
        add_theme_support('custom-units');

        add_theme_support('jetpack-content-options', array(
            'blog-display'       => 'content', // the default setting of the theme: 'content', 'excerpt' or array( 'content', 'excerpt' ) for themes mixing both display.
            'author-bio'         => true, // display or not the author bio: true or false.
            'author-bio-default' => false, // the default setting of the author bio, if it's being displayed or not: true or false (only required if false).
            'masonry'            => '.site-main', // a CSS selector matching the elements that triggers a masonry refresh if the theme is using a masonry layout.
            'post-details'       => array(
                'stylesheet' => 'themeslug-style', // name of the theme's stylesheet.
                'date'       => '.posted-on', // a CSS selector matching the elements that display the post date.
                'categories' => '.cat-links', // a CSS selector matching the elements that display the post categories.
                'tags'       => '.tags-links', // a CSS selector matching the elements that display the post tags.
                'author'     => '.byline', // a CSS selector matching the elements that display the post author.
                'comment'    => '.comments-link', // a CSS selector matching the elements that display the comment link.
            ),
            'featured-images'    => array(
                'archive'         => true, // enable or not the featured image check for archive pages: true or false.
                'archive-default' => false, // the default setting of the featured image on archive pages, if it's being displayed or not: true or false (only required if false).
                'post'            => true, // enable or not the featured image check for single posts: true or false.
                'post-default'    => false, // the default setting of the featured image on single posts, if it's being displayed or not: true or false (only required if false).
                'page'            => true, // enable or not the featured image check for single pages: true or false.
                'page-default'    => false, // the default setting of the featured image on single pages, if it's being displayed or not: true or false (only required if false).
            ),
        ));

        add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
   
    }

endif; // under_construction_lite_setup
add_action('after_setup_theme', 'under_construction_lite_setup');

if (!function_exists('under_construction_lite_the_custom_logo')) :

    function under_construction_lite_the_custom_logo() {
        the_custom_logo();
    }


endif;