<?php if (get_field('choice')) { 

$select = get_field('choice'); 

if ($select === 'rent') { ?>
<div class="col-md-12">
				<div class="property-wrap ftco-animate">
					<a href="<?php the_permalink(); ?>" class="img" style="background-image: url(<?php the_field('picture'); ?>);">
						<div class="rent-sale">
							<span class="rent"><?php the_field('choice');?></span>
						</div>
						<p class="price"><span class="orig-price"> <?php the_field('price'); ?> <small> / mo</small></span></p>
					</a>
					<div class="text">
						<ul class="property_list">
							<li>Bedrooms:<?php the_field('bedroom_number')?> </li>
							<li>Bathrooms: <?php the_field('bathroom_number'); ?></li>
							<li> <?php the_field('size'); ?> sqft</li>
						</ul>
						<h3><a href="<?php the_permalink(); ?>">
    <?php the_title(); ?> </a></h3>
						<span class="location"> <?php the_field('location'); ?></span>


					</div>
				</div>
        	</div>


<?php } elseif($select === 'sale') { ?>

	<div class="col-md-12">
				<div class="property-wrap ftco-animate">
					<a href="<?php the_permalink(); ?>" class="img" style="background-image: url(<?php the_field('picture'); ?>);">
						<div class="rent-sale">
							<span class="sale"><?php the_field('choice');?> </span>
						</div>
						<p class="price"><span class="orig-price"> <?php the_field('price'); ?> </span></p>
					</a>
					<div class="text">
						<ul class="property_list">
							<li>Bedrooms:<?php the_field('bedroom_number')?> </li>
							<li>Bathrooms: <?php the_field('bathroom_number'); ?></li>
							<li>  <?php the_field('size'); ?> sqft</li>
						</ul>
						<h3><a href="<?php the_permalink(); ?>">
    <?php the_title(); ?> </a></h3>
						<span class="location"> <?php the_field('location'); ?></span>


					</div>
				</div>
        	</div>



<?php }} ?>



