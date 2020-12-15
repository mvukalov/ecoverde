<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ecoverde - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>

  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Ecoverde</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
		  <ul class="navbar-nav ml-auto">
		  <li class="nav-item">
		
		  <?php
		  
          if(has_nav_menu('Main') ){
			   wp_nav_menu([
				   'theme_location'  => 'Main',
				   'container'      => false,
				   'falback_cb'    => false
			   ]);
		  }

		  ?>
	      </div>
	    </div>
	  </nav>
	  
	  <section class="hero-wrap" style="background-image: url('<?php echo esc_url (get_template_directory_uri()); ?>/assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-lg-7 col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text">
	            <h1 class="mb-4">
		<?php if ( is_active_sidebar( 'header-title' ) ) : ?>
		<?php dynamic_sidebar( 'header-title' ); ?>
	    <?php endif; ?>
				</h1>
	            <p style="font-size: 18px;">    
		<?php if ( is_active_sidebar( 'header-subtitle' ) ) : ?>	
		<?php dynamic_sidebar( 'header-subtitle' ); ?>
		<?php endif; ?>
					</p>
            </div>
          </div>
        </div>
      </div>
    </section>