<?php
/**
 * Template Name: Recipe
 * Template Post Type: recipe
 *
 */

get_header(); ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php
		while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'recipe-post' ); ?>

			
		<?php endwhile; ?>

		</main><!-- #main -->

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php get_footer(); ?>


	  