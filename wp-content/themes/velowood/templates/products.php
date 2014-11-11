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

				<!-- START BICYCLES PRODUCTS SECTION -->
				<div class="row">
					<div class="column-full center">
						<h1><?php the_field('products_bicycles_header'); ?></h1>
					</div>
				</div>
					<!-- START OF BIKE MAKERS -->
				<div class="row">
					<div class="column-one-fourth">
					<div class="center">
						<h3><?php the_field('products_bicycles_subheader_1'); ?></h3>
					</div>
					<img src="<?php the_field('products_bicycles_image_1'); ?>" >
					<p><?php the_field('products_bicycles_text_1'); ?></p>
					</div>

					<div class="column-one-fourth">
					<div class="center">
						<h3><?php the_field('products_bicycles_subheader_2'); ?></h3>
					</div>
					<img src="<?php the_field('products_bicycles_image_2'); ?>" >
					<p><?php the_field('products_bicycles_text_2'); ?></p>
					</div>

					<div class="column-one-fourth">
					<div class="center">
						<h3><?php the_field('products_bicycles_subheader_3'); ?></h3>
					</div>
					<img src="<?php the_field('products_bicycles_image_3'); ?>" >
					<p><?php the_field('products_bicycles_text_3'); ?></p>
					</div>

					<div class="column-one-fourth">
					<div class="center">
						<h3><?php the_field('products_bicycles_subheader_4'); ?></h3>
					</div>
					<img src="<?php the_field('products_bicycles_image_4'); ?>" >
					<p><?php the_field('products_bicycles_text_4'); ?></p>
					</div>
				</div>
				
				<div class="row">
					<div class="column-full">
						
					</div>
				</div>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>