<?php  get_header(); ?>

<section class="ftco-section goto-here">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">What we offer</span>
            <h2 class="mb-2">Properties</h2>
          </div>
        </div>
        <div class="row ">
       
          		
<?php

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$query = new WP_Query( array( 
  'post_type' => 'nekretnine',
  'posts_per_page' => 3,
  'paged' => $paged
   ) );

if ( $query->have_posts() ) : 
while ( $query->have_posts() ) : $query->the_post(); 

include( get_theme_file_path('/includes/front/page_content.php'));?>

<nav>
<?php

?>
<?php endwhile; 
wp_reset_postdata();  ?>
    <?php
    $big = 999999999; 
    echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $query->max_num_pages
) );
?>
<?php else : 
echo "error";
endif; ?>



        </div>
      </div>
    </section>


<?php get_footer(); ?>