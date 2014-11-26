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
	</div>

	<div class="tuneup">
	<div class="container-fluid">
	<div class="row">
	<div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 center">
	<h3><?php the_field('services_tune_1'); ?></h3>
	<div class="tuneup_box">

	<!-- START REPEATER -->
	<?php
	// check if the repeater field has rows of data
	if( have_rows('bike_check') ):

	 	// loop through the rows of data
	    while ( have_rows('bike_check') ) : the_row(); ?>

	        <!-- // display a sub field value -->
	        <div class="row">
	        <?php the_sub_field('bike_check_feature'); ?>
			</div>
	    <?php endwhile;

	else :

	    // no rows found

	endif;

	?>
	<!-- END REPEATER -->
	</div>
	</div>
	<div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 center">
	<h3><?php the_field('services_tune_2'); ?></h3>
	<div class="tuneup_box">
	<!-- START REPEATER -->
	<?php
	// check if the repeater field has rows of data
	if( have_rows('basic_tune') ):

	 	// loop through the rows of data
	    while ( have_rows('basic_tune') ) : the_row(); ?>

	        <!-- // display a sub field value -->
	        <div class="row">
	        <?php the_sub_field('basic_tune_feature'); ?>
			</div>
	    <?php endwhile;

	else :

	    // no rows found

	endif;

	?>
	<!-- END REPEATER -->
	</div>
	</div>
	<div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 center">
	<h3><?php the_field('services_tune_3'); ?></h3>
	<div class="tuneup_box">
	<!-- START REPEATER -->
	<?php
	// check if the repeater field has rows of data
	if( have_rows('comp_tune') ):

	 	// loop through the rows of data
	    while ( have_rows('comp_tune') ) : the_row(); ?>

	        <!-- // display a sub field value -->
	        <div class="row">
	        <?php the_sub_field('comp_tune_feature'); ?>
			</div>
	    <?php endwhile;

	else :

	    // no rows found

	endif;

	?>
	<!-- END REPEATER -->
	</div>
	</div>
	</div>
	</div>
	</div>
	<!-- END OF TUNEUP SECTION -->
	<!-- START OF SERVICES EXPLAINED -->
	<div class="services_area">
	<div class="container_fluid">
	<div class="row">
	
	</div>
	</div>
	</div>

				<!-- END OF SERVICES		 -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
