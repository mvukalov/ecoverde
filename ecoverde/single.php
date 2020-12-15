<?php  get_header(); ?>


<?php  while ( have_posts() ) : the_post(); ?>

    <section class="ftco-section ftco-property-details">
      <div class="container">
      	<div class="row justify-content-center">
      		<div class="col-md-12">
      			<div class="property-details">
      				<div class="img" style="background-image: url(<?php the_field('picture'); ?>);">
      				</div>
      				<div class="text">
      					<span class="subheading"><?php the_field('location');?></span>
      					<h2><?php the_title();?></h2>
      				</div>
      			</div>
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-md-12 pills">
						<div class="bd-example bd-example-tabs">
							<div class="d-flex">
							  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

							    <li class="nav-item">
							      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description: <?php the_field('description');?></a>
							    </li>

							  </ul>
							</div>

						  <div class="tab-content" id="pills-tabContent">
						    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
						    	<div class="row">
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="fa fa-check-circle"></span>Lot Area: <?php the_field('size');?> sq ft</li>
											<li class="check"><span class="fa fa-check-circle"></span>Price:  <?php the_field('price');?>
											
											<?php if (get_field('choice')) : 
											 
											$select = get_field('choice'); 

                                            if ($select === 'rent') :  ?>  / month</li>
										    <?php endif;
										    elseif($select === 'sale') : ?> </li>
										    <?php endif; ?>


						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
											<li class="check"><span class="fa fa-check-circle"></span>Bedrooms: <?php the_field('room_number');?></li>
											<li class="check"><span class="fa fa-check-circle"></span>Type: <?php the_field('choice');?></li>

								

						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
											<li class="check"><span class="fa fa-check-circle"></span>Bathrooms: <?php the_field('bathroom_number');?> </li>
											<li class="check"><span class="fa fa-check-circle"></span>Garages: <?php the_field('garage_number');?></li>
											<li class="check"><span class="fa fa-check-circle"></span>Views: <?php if(function_exists('post_views')) { echo post_views(get_the_ID());  }?></li>
									

						    			</ul>
						    		</div>
						    	</div>
						    </div>

						    <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
						      <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
									<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
						    </div>


						  </div>
						</div>
		      </div>
				</div>
      </div>
	</section>
	
<?php endwhile; ?>
<?php  get_footer(); ?>
