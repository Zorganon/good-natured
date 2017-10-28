<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="main-wrap" role="main">
	<div class="page-container">
		<div class="body-content-container">

		<?php do_action( 'foundationpress_before_content' ); ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
			<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
				<header>
					<h1 class="recipe-post__title entry-title"><?php the_title(); ?></h1>
					<p class="recipe-post__tags"><?php the_tags(); ?></p>
				</header>
				
				<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile;?>
		
		<?php do_action( 'foundationpress_after_content' ); ?>
		<?php get_sidebar(); ?>
		</div>
  </div>
</div>
<?php get_footer();


	  