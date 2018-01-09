<?php
/**
* Template part for displaying single recipes.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Astra
* @since 1.0.0
*/

?>




<div class="page-content-wrapper">

	<a class="button recipe-header__button" type="button" href="/recipes">ALL RECIPES</a>
	
	
	<div class="recipe-post-meta"></div>
	
	<div class="green-dashed-divider"></div>
	<div class="recipe-post__title"><?php the_title(); ?></div>
	<div class="recipe-post__tags"><?php the_tags(); ?></div>
  <div class="recipe-post__featured-image">
    <?php the_post_thumbnail('full'); ?>
  </div>
	<div class="recipe-post-content__wrapper">
		<div class="recipe-post-content__content">
			<div class="ingredients-content">
				<h2 class="ingredients-content__title">Ingredients</h2>
				<div class="ingredients-content__list">
					<?php 
					$current_post_id = get_the_ID();
					$key = 'wpcf-ingredients';
					$ingre = get_post_meta( $current_post_id, $key, true);
					echo $ingre; ?>
				</div>
			</div>
			
	
			<?php the_content(); ?>
	
		</div>
		
	</div>

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
</div>
