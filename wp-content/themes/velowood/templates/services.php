<?php
/**
 * Template Name: Services
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

				<!-- START OF SERVICES -->
	<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 center">
			<h2><?php the_field ('services_header'); ?></h2>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 center">
		<h5><?php the_field('services_subheader'); ?></h5>
		</div>
	</div>

	<div class="row">
	<div class="col-xs-12 col-sm-4">
		<img class="service_image" src="<?php the_field('services_image_1'); ?>" >
		<p><?php the_field('services_text_1'); ?></p>
	</div>

	<div class="col-xs-12 col-sm-4">
		<img class="service_image" src="<?php the_field('services_image_2'); ?>" >
		<p><?php the_field('services_text_2'); ?></p>
	</div>

	<div class="col-xs-12 col-sm-4">
		<img class="service_image" src="<?php the_field('services_image_3'); ?>" >
		<p><?php the_field('services_text_3'); ?></p>
	</div>
	</div>
	
	

	</div>
				<!-- END OF SERVICES		 -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
