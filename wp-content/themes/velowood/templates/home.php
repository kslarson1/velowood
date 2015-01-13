<?php
/**
 * Template Name: Home
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

				<!-- START OF HERO SECTION -->
	<div class="full-width" style="background-image: url(<?php the_field('home_hero_image'); ?>);" >
		<div class="container">
			<div class="row">
				<div class="col-xs-12 center">
					<img src="<?php the_field('home_logo'); ?>" />
				</div>
			</div>
		<div class="row">
			<div class="col-xs-12 center">
			<div class="clear_text4">
				<h3><?php the_field('home_main_text'); ?></h3>
			</div>
			</div>
		</div>
		<div class="row">
			<div class="home_nav">
			<div class="col-xs-12 center">
				<a href="/products" class="ghost_button_semi">Products</a>
				<a href="/services" class="ghost_button_semi">Services</a>
				<a href="/about" class="ghost_button_semi">About</a>
			</div>
		</div>
	</div>
	</div>
	</div>
				<!-- END OF HERO SECTION -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>