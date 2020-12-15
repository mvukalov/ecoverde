<?php
function header_title() {
        register_sidebar( array(
        'name' => 'Header Title',
        'id' => 'header-title',
        'before_widget' => '<div class="hw-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="hw-title">',
        'after_title' => '</h2>',
        ) );
        
        }
        function header_subtitle() {
            register_sidebar( array(
            'name' => 'Header Subtitle ',
            'id' => 'header-subtitle',
            'before_widget' => '<div class="hw-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="hw-title">',
            'after_title' => '</h2>',
            ) );
            
            }
?>