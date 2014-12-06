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
				<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="center">
						<h3><?php the_field('about_history_header'); ?></h3>
						</div>
						<div class="col-xs-12">
						<p><?php the_field('about_history_text'); ?></p>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6">
					<div class="googlemaps">
dsflkhjas
					</div>
					</div>
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
					<div class="container-fluid">
					<div class="row">
					<!-- BEGIN REPEATER -->
				<?php
				// check if the repeater field has rows of data
				if( have_rows('about_employees') ):
				 	// loop through the rows of data
				    while ( have_rows('about_employees') ) : the_row(); ?>
				      <!--   // display a sub field value -->
				     		<div class="col-xs-12 col-sm-6 col-md-4">   
					      	<div class="circle" style="background-image: url(<?php the_sub_field('about_employee_image'); ?>)">
					      	</div>
					      	<div class="center">
					        <h4><?php the_sub_field('about_employee_name'); ?></h4>
					        </div>
					        <?php the_sub_field('about_employee_background'); ?>
					        </div>
				       <?php 
				    endwhile;
				else :
				    // no rows found
				endif;
				?>
					<!-- END OF REPEATER -->
					</div>
				</div>
				</div>
				<!-- END OF EMPLOYEES -->
			
				<!-- START OF CONTACT PAGE -->
				<div class="container-fluid" id="contact">
				<div class="row">
				<div class="col-xs-12 center">
					<h3><?php the_field('about_contact_header'); ?></h3>
				</div>
				</div>
				<?php echo do_shortcode( '[contact-form-7 id="60" title="Contact Form"]' ); ?>
				</div>
				<!-- END OF CONTACT PAGE -->
				</div>
					<!-- END OF ABOUT PAGE -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
