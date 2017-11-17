<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

?>

<?php astra_entry_before(); ?>

<article itemtype="http://schema.org/CreativeWork" itemscope="itemscope" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php astra_entry_top(); ?>

		<div class="entry-content clear" itemprop="text">
	
			<div class="button news-header__button" type="button" href="/news">ALL NEWS</div>
			
			<div class="news-post-title"><?php the_title(); ?></div>
			
			<div class="news-post-meta"></div>
			
			<div class="green-dashed-divider"></div>
			
			<div class="news-post-content__wrapper">
			
				<div class="news-post-content__content">
			
					<?php the_content(); ?>
			
				</div>
				
			</div>
			<?php 
			/* the loop's current post is saved in a backup variable prior to running slider which starts another loop */
			$backup = $post; ?>
			<div class="news-post-more-bar">
				<div class="news-post-more__text">MORE LIKE THIS</div>
			</div>
			<div class="news-post-slider__wrapper">
				<?php get_template_part( 'news-slider'); ?>
			</div>
			<?php $post = $backup; ?>
			<?php
				astra_edit_post_link(
	
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'astra' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
	
			<?php astra_entry_content_after(); ?>
	
			<?php
				wp_link_pages(
					array(
						'before'      => '<div class="page-links">' . esc_html( astra_default_strings( 'string-single-page-links-before', false ) ),
						'after'       => '</div>',
						'link_before' => '<span class="page-link">',
						'link_after'  => '</span>',
					)
				);
			?>
		</div><!-- .entry-content .clear -->
	</div>

	
	<?php astra_entry_bottom(); ?>

</article><!-- #post-## -->

<?php astra_entry_after(); ?>
