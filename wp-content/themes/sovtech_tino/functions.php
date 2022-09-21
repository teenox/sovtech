<?php

add_theme_support( 'post-thumbnails' );
add_image_size( '140x140', 140, 140, true );
add_image_size( '624x323', 624, 323, true );
add_image_size( '231x150', 231, 150, true );
add_image_size( '475x200', 475, 200, true );
add_image_size( '230x200', 230, 200, true );


function register_sar_menus() {
    register_nav_menus(
        array(
            'header-nav' => __( 'Header Nav' ),
            'footer-nav' => __( 'Footer Nav' ),
        )
    );
}
add_action( 'init', 'register_sar_menus' );


add_filter('show_admin_bar', '__return_false');








    
    

     
    
    


