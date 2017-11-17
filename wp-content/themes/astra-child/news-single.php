<?php
/**
 * Template Name: News
 * Template Post Type: post
 *
 */

get_header(); ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/news', 'post' ); ?>

			
		<?php endwhile; ?>

		</main><!-- #main -->

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
