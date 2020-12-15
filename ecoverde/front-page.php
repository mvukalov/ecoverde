<?php get_header(); ?>


<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">What we offer</span>
            <h2 class="mb-2">Featured Properties</h2>
          </div>
        </div>
		<div class="row ftco-animate">
          <div class="col-md-4">
         
					
<?php            

$query = new WP_Query( 
    array( 
    'post_type' => 'nekretnine',
    'posts_per_page' => -1, 
    'paged' => $paged, 
    'meta_key'=>'post_views_count',
    'orderby'=>'meta_value_num',
	'order'=> 'DESC'));
	
   $count=0;
   if ( $query->have_posts() ) :
   while ( $query->have_posts() ) : $query->the_post(); 
   $count++;

   include( get_theme_file_path('/includes/front/front_page_content.php'));
   endwhile; 

   wp_reset_postdata();  
   else : 
   echo "error";
   endif; 

	
   switch ($count) :
   case 0:

     $query = new WP_Query( array( 
	'post_type' => 'nekretnine',
	'posts_per_page' => 5, ));

    if ( $query->have_posts() ) : 
    while ( $query->have_posts() ) : $query->the_post(); 
 
    include( get_theme_file_path('/includes/front/front_page_content.php'));
    endwhile; 

    wp_reset_postdata();  
    else : 
  
	endif;  break; 
	

	case 1:
	
	$query = new WP_Query( array( 'post_type' => 'nekretnine','posts_per_page' => 4,) );
	
	if ( $query->have_posts() ) : 
    while ( $query->have_posts() ) : $query->the_post(); 

	include( get_theme_file_path('/includes/front/front_page_content.php'));
	endwhile; 
		
	wp_reset_postdata(); 
	else : 

	endif;  break; 


	case 2:
	
	$query = new WP_Query( array( 'post_type' => 'nekretnine','posts_per_page' => 3,  ) );
	
	if ( $query->have_posts() ) : 
    while ( $query->have_posts() ) : $query->the_post(); 
	
	include( get_theme_file_path('/includes/front/front_page_content.php'));
	endwhile; 
	
	wp_reset_postdata(); 
	else : 
	endif; break; 


	case 3:
	
	$query = new WP_Query( array( 'post_type' => 'nekretnine','posts_per_page' => 2, ) );
	
	if ( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); 
	
	include( get_theme_file_path('/includes/front/front_page_content.php'));
	endwhile; 
	
	wp_reset_postdata();  
	else: 
	endif;  break; 


	case 4:
		
	$query = new WP_Query( array( 'post_type' => 'nekretnine','posts_per_page' => 1,) );

	if ( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post();
	
	include( get_theme_file_path('/includes/front/front_page_content.php'));
	endwhile; 
	
	wp_reset_postdata();  
	else : 
	endif;  endswitch; ?>

        </div>
        </div>
      </div>
    </section>

	<?php get_footer(); ?>