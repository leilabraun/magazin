<?php

    // --- navigation
    add_action('after_setup_theme', 'navigation_registrieren');
    function navigation_registrieren(){
        register_nav_menu('hauptnavigation', 'Hauptnavigation oben');
    };


    /* Add  script */
    function add_custom_script() {
        wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array(), null, true);
    }
    
    add_action('wp_enqueue_scripts', 'add_custom_script');
    

?>