<?php
/**
 * Template Name: Products
 *
 * 
 *
 * @package Velowood
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

					<!-- START OF BIKE MAKERS -->		
			<div class="parts" style="background: url(<?php the_field('products_parts_background'); ?>)">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-sm-offset-1">
						<div class="clear_text">
						<p><?php the_field('products_parts_text'); ?></p>
						</div>
					</div>
				</div>
			</div>
			</div>
			<!-- PAGE BREAK -->
			<div class="page_break">
			<div class="container-fluid">
			<div class="col-xs-12 center">
				<h3><?php the_field('products_featured'); ?></h3>
			</div>
			</div>
			</div>
			<!-- START OF BIKE MAKERS SECTION -->
			<div class="bikes">
			<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4">
				<div class="center">
					<h3><?php the_field('products_bicycles_subheader_1'); ?></h3>
				</div>
				<p><?php the_field('products_bicycles_text_1'); ?></p>
				</div>
				<div class="col-xs-12 col-sm-8">
				<img class="bike_maker" src="<?php the_field('products_bicycles_image_1'); ?>" >
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-8">
				<img class="bike_maker" src="<?php the_field('products_bicycles_image_2'); ?>" >
				</div>
				<div class="col-xs-12 col-sm-4">
				<div class="center">
					<h3><?php the_field('products_bicycles_subheader_2'); ?></h3>
				</div>
				<p><?php the_field('products_bicycles_text_2'); ?></p>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-4">
				<div class="center">
					<h3><?php the_field('products_bicycles_subheader_3'); ?></h3>
				</div>
				<p><?php the_field('products_bicycles_text_3'); ?></p>
				</div>
				<div class="col-xs-12 col-sm-8">
				<img class="bike_maker" src="<?php the_field('products_bicycles_image_3'); ?>" >
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-8">
				<img class="bike_maker" src="<?php the_field('products_bicycles_image_4'); ?>" >
				</div>
				<div class="col-xs-12 col-sm-4">
				<div class="center">
					<h3><?php the_field('products_bicycles_subheader_4'); ?></h3>
				</div>
				<p><?php the_field('products_bicycles_text_4'); ?></p>
				</div>
			</div>

			</div>					
			</div>
			<!-- END OF BIKE MAKERS SECTION -->
			<!-- PAGE BREAK -->
			<div class="page_break">
			<div class="container-fluid">
			<div class="col-xs-12 center">
				<h3><?php the_field('accessories_title'); ?></h3>
			</div>
			</div>
			</div>
			<!-- START OF ACCESSORIES SECTION -->
			<div class="accessories" style="background: url(<?php the_field('accessories_background'); ?>)">
			<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<div class="clear_text2">
				<p><?php the_field('accessories_text'); ?></p>
					
						<?php

// check if the repeater field has rows of data
if( have_rows('accessories_list') ):

 	// loop through the rows of data
    while ( have_rows('accessories_list') ) : the_row(); ?>

       <!--  // display a sub field value -->
       <div class="row">
		<div class="col-xs-6">
			<ul>
				<li><?php the_sub_field('accessories_list_item'); ?></li>
	        </ul>
        </div>
        <div class="col-xs-6">
		<ul>
        <li><?php the_sub_field('accessories_list_item2'); ?></li>
        </ul>
        </div>
		</div>
        <?php

    endwhile;

else :

    // no rows found

endif;

?>
						
			</div>
			</div>
			</div>
			</div>
			</div>
				<!-- END OF ACCESSORIES -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>