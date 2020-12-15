<?php
    include( get_theme_file_path('/includes/back/enqueue.php'));
    include( get_theme_file_path('/includes/back/page_menu.php'));
    include( get_theme_file_path('/includes/back/edit_header_picture.php'));
    include( get_theme_file_path('/includes/back/edit_header_text.php'));
    include( get_theme_file_path('/includes/back/custom_post.php'));
    include( get_theme_file_path('/includes/back/post_views.php'));
  
        
    add_action( 'wp_enqueue_scripts','fu_enqueue');
    add_action( 'after_setup_theme', 'fu_menu' );
    add_action( 'after_setup_theme', 'header_picture' );
    add_action( 'widgets_init', 'header_title' );
    add_action( 'widgets_init', 'header_subtitle' );
    add_action( 'init', 'custom_post' );
  
    ?>