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

	<div <?php astra_blog_layout_class( 'news-layout-1' ); ?>>
	
		<div class="entry-content clear" itemprop="text">
	
			<?php the_content(); ?>
	
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
