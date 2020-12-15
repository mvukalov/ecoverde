<?php
function fu_enqueue() {
    
    $uri = get_template_directory_uri ();
    wp_enqueue_style( 'google', 'https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap',[] );
    wp_enqueue_style( 'cloud','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',[] );
    wp_enqueue_style( 'animate', $uri .'/assets/css/animate.css',[] );
    wp_enqueue_style( 'bootsrap', $uri .'/assets/css/bootstrap.min.css',[] );
    wp_enqueue_style( 'carousel', $uri .'/assets/css/owl.carousel.min.css',[] );
    wp_enqueue_style( 'owl', $uri .'/assets/css/owl.theme.default.min.css',[] );
    wp_enqueue_style( 'magnific', $uri .'/assets/css/magnific-popup.css',[] ); 
    wp_enqueue_style( 'flaticon', $uri .'/assets/css/flaticon.css',[] );
    wp_enqueue_style( 'style', $uri .'/style.css',[] );

  
    wp_enqueue_script( 'flaticon', $uri .'/assets/js/jquery.min.js',[],false,true );
    wp_enqueue_script( 'migrate', $uri .'/assets/js/jquery-migrate-3.0.1.min.js',[],false,true );
    wp_enqueue_script( 'bootstrap', $uri .'/assets/js/bootstrap.min.js',[],false,true );
    wp_enqueue_script( 'easy', $uri .'/assets/js/jquery.easing.1.3.js',[],false,true );
    wp_enqueue_script( 'way', $uri .'/assets/js/jquery.waypoints.min.js',[],false,true );   
    wp_enqueue_script( 'stelar', $uri .'/assets/js/jquery.stellar.min.js',[],false,true );
    wp_enqueue_script( 'car', $uri .'/assets/js/owl.carousel.min.js',[],false,true );
    wp_enqueue_script( 'mag', $uri .'/assets/js/jquery.magnific-popup.min.js',[],false,true );
    wp_enqueue_script( 'ani', $uri .'/assets/js/jquery.animateNumber.min.js',[],false,true );
    wp_enqueue_script( 'scroll', $uri .'/assets/js/scrollax.min.js',[],false,true );
    wp_enqueue_script( 'map', $uri .'/assets/js/google-map.js"',[],false,true );
    wp_enqueue_script( 'google','https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false',[],false,true );
    wp_enqueue_script( 'main', $uri .'/assets/js/main.js"',[],false,true );
    

}
?>