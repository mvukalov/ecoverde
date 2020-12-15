<?php
function header_picture() {
    $args = array(
        'default-image'      => get_template_directory_uri() . '/assets/images/bg_1.jpg',
        'default-text-color' =>'000',
        'width'              => 850,
        'height'             => 524,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );  
}    




?>