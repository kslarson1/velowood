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
				<div class="row">
					<div class="column-one-half">
						<div class="row center">
						<h3><?php the_field('about_history_header'); ?></h3>
						</div>
						<div class="row">
						<p><?php the_field('about_history_text'); ?></p>
						</div>
					</div>
					<div class="column-one-half">
					<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:500px;"><div id="gmap_canvas" style="height:500px;width:500px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo.net</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(39.7398639,-104.95665359999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(39.7398639, -104.95665359999998)});infowindow = new google.maps.InfoWindow({content:"<b>Velowood Cyclery</b><br/>2526 E. Colfax<br/>Denver, CO 80206" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
					</div>
					</div>
				<!-- START OF EMPLOYEES -->
				<div class="row">
					<div class="column-full">
					<h2><?php the_field('about_team_header'); ?></h2>
					</div>

					<!-- BEGIN REPEATER -->
				<?php
				// check if the repeater field has rows of data
				if( have_rows('about_employees') ):
				 	// loop through the rows of data
				    while ( have_rows('about_employees') ) : the_row(); ?>
				      <!--   // display a sub field value -->
				      <div class="column-one-third">
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
				<div class="row">

				</div>
				<!-- END OF EMPLOYEES -->
					<!-- END OF ABOUT PAGE -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
