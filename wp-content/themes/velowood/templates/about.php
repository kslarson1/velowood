<?php
/**
 * Template Name: About
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

	<!-- START ABOUT PAGE -->
	<div id="about">
	<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<div class="center">
				<h3><?php the_field('about_history_header'); ?></h3>
			</div>
			<p><?php the_field('about_history_text'); ?></p>

		<!-- START OF HOURS REPEATER -->
<?php

// check if the repeater field has rows of data
if( have_rows('about_hours') ):

 	// loop through the rows of data
    while ( have_rows('about_hours') ) : the_row();

        // display a sub field value
        ; ?><p><b><?php the_sub_field('about_hours_days'); ?></b><?php
        the_sub_field('about_hours_days_hours'); ?></p>
        <?php 

    endwhile;

else :

    // no rows found

endif;

?>
		<!-- END OF HOURS REPEATER -->
		</div>

		<!-- START OF GOOGLE MAPS BACKGROUND -->
				
		<div id="googlemaps">
			<iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Velowood%20Cycler%202526%20E.%20Colfax%20Ave%2C%20Denver%2C%20CO%2C%20United%20States&key=AIzaSyAG9xmCxdpzO_SZ4gppoE2kzB2MkZiktP4"></iframe>
		</div>
		<!-- END OF GOOGLE MAPS BACKGROUND -->
	</div>
	</div>

	<!-- BREAK -->
	<div class="page_break">
	<div class="container-fluid">
	<div class="col-xs-12 center">
		<h3><?php the_field('about_employees_header'); ?></h3>
	</div>
	</div>
	</div>
	
	<!-- START OF EMPLOYEES -->	
	<div id="employees">
		<div class="container">
		<div class="row">
		<ul class="ch-grid">
		<!-- BEGIN REPEATER -->
	<?php
	// check if the repeater field has rows of data
	if( have_rows('about_employees') ):
	 	// loop through the rows of data
	    while ( have_rows('about_employees') ) : the_row(); ?>
	      <!--   // display a sub field value -->
	      	
	     		<div class="col-xs-12 col-sm-6 col-md-4">
	     		<div class="about_item">
	     		<li>
	     		<div class="ch-item" style="background-image: url(<?php the_sub_field('about_employee_image'); ?>)">
		      	<div class="ch-info" >
		      		<h3><?php the_sub_field('about_employee_name'); ?></h3>
		      		<p><?php the_sub_field('about_employee_fact'); ?></p>
		      	</div>
		      	</div>
		      	</li>
		      	<!-- END OF CIRCLE IMAGE -->
		      	<div class="about_item_container">
		        	<p><?php the_sub_field('about_employee_background'); ?></p>
		        </div>
		        </div>
		    </div>
	       <?php 
	    endwhile;
	else :
	    // no rows found
	endif;
	?>
		<!-- END OF REPEATER -->
		</ul>
		</div>
		</div>
	</div>
	<!-- END OF EMPLOYEES -->

	
	<!-- BREAK -->
	<div class="page_break">
	<div class="container-fluid">
	<div class="col-xs-12 center">
		<h3><?php the_field('about_contact_header'); ?></h3>
	</div>
	</div>
	</div>

<!-- START OF CONTACT PAGE -->
	<div class="container" id="contact">
	<?php echo do_shortcode( '[contact-form-7 id="60" title="Contact Form"]' ); ?>
	</div>
	<!-- END OF CONTACT PAGE -->
	</div>
		<!-- END OF ABOUT PAGE -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
