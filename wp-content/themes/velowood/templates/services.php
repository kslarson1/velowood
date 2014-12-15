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
	<div id="services">
	<div class="container">
	<div class="row">
		<div class="col-xs-12 center">
			<h2><?php the_field ('services_header'); ?></h2>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2">
		<p><?php the_field('services_subheader'); ?></p>
		</div>
	</div>
	</div>

	<!-- BREAK -->	
	<div class="page_break">
	<div class="container-fluid">
	<div class="col-xs-12 center">
		<h3><?php the_field('services_tune_header'); ?></h3>
	</div>
	</div>
	</div>

	<!-- START OF SERVICES EXPLAINED -->
	<!-- START OF BIKE CHECK SECTION -->
	<div class="services_area">
	<div class="container">
	<div class="row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2">
		<h3><?php the_field('services_bikecheck_header'); ?></h3>
	</div>
	</div>
	<div class="row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2">
		<p><?php the_field('services_bikecheck_text'); ?></p>
	</div>
	</div>
	<div class="row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2">
	<ul class="services_list">

	<!-- START REPEATER -->
	<?php

	// check if the repeater field has rows of data
	if( have_rows('services_bikecheck_list') ):

	 	// loop through the rows of data
	    while ( have_rows('services_bikecheck_list') ) : the_row(); ?>
			
			<li>
	        <!-- // display a sub field value -->
	        <?php the_sub_field('services_bikecheck_item'); ?>
			</li>
	    <?php endwhile;

	else :

	    // no rows found

	endif;

	?>
	<!-- END REPEATER		 -->
	</ul>
	</div>
	</div>
	<!-- END OF BIKE CHECK SECTION -->

<!-- START OF BASIC TUNE SECTION -->
	<div class="row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2">
		<h3><?php the_field('services_basictune_header'); ?></h3>
	</div>
	</div>
	<div class="row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2">
		<p><?php the_field('services_basictune_text'); ?></p>
	</div>
	</div>

	<div class="row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2">
	<ul class="services_list">
	<!-- START REPEATER -->
	<?php

	// check if the repeater field has rows of data
	if( have_rows('services_basictune_list') ):

	 	// loop through the rows of data
	    while ( have_rows('services_basictune_list') ) : the_row(); ?>
			
			<li>
	        <!-- // display a sub field value -->
	        <?php the_sub_field('services_basictune_item'); ?>
			</li>
	    <?php endwhile;

	else :

	    // no rows found

	endif;

	?>
	<!-- END REPEATER		 -->
	</ul>
	</div>
	</div>
	<!-- END OF BASIC TUNE SECTION -->

<!-- START OF COMP TUNE SECTION -->
	<div class="row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2">
		<h3><?php the_field('services_comptune_header'); ?></h3>
	</div>
	</div>
	<div class="row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2">
		<p><?php the_field('services_comptune_text'); ?></p>
	</div>
	</div>

	<div class="row">
	<div class="col-xs-12 col-sm-8 col-sm-offset-2">
	<ul class="services_list">
	<!-- START REPEATER -->
	<?php

	// check if the repeater field has rows of data
	if( have_rows('services_comptune_list') ):

	 	// loop through the rows of data
	    while ( have_rows('services_comptune_list') ) : the_row(); ?>
			
			<li>
	        <!-- // display a sub field value -->
	        <?php the_sub_field('services_comptune_item'); ?>
			</li>
	    <?php endwhile;

	else :

	    // no rows found

	endif;

	?>
	<!-- END REPEATER		 -->
	</ul>
	</div>
	</div>
	<!-- END OF COMP TUNE SECTION -->

	</div>
	</div>
	<!-- END OF SERVICES EXPLAINED -->
	</div>
	<!-- END OF SERVICES		 -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
