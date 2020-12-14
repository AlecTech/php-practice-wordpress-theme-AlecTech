<?php

/**
 * 
 * Register a nav
 * 
 * 
 */
register_nav_menus(
    array(
        'main_menu' => 'Main Menu (Header)',
        'footer_menu' => 'Footer Menu',
        
    )
);


/**
 * 
 * 
 * 
 */

 add_action( 'wp_enqueue_scripts', function() 
 { // this is jave script not php
    wp_enqueue_script(
        //an ID for the script
        'tech-theme-script',
        get_theme_file_uri('/assets/js/scripts.js'),
        //Dependencies (jQuery, bootstrap)
        array(),
        //version number of the file (fight browser cache)
        strftime(get_theme_file_uri('/assets/js/scripts.js')),
        // this will look for footer function wp_footer()?
        FALSE
    );
    // Enqueue our Stylesheet
    wp_enqueue_style(
        'tech-theme-main-styles',
        get_theme_file_uri('/assets/css/main.css'),
        strftime( get_theme_file_uri('/assets/css/main.css')),
        'all'
    );
 } );