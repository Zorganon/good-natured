<?php
/**
 * Template Name: Recipe
 * Template Post Type: recipe
 *
 */

get_header(); ?>

		<?php
		while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'recipe-post' ); ?>

			
		<?php endwhile; ?>


<?php get_footer(); ?>


	  