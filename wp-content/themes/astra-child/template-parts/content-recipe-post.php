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
			<div class="ingredients-content col-sm-12 col-md-4">
				<div class="ingredients-content__title">Ingredients</div>
				<div class="ingredients-content__list">
					<?php 
					$current_post_id = get_the_ID();
					$key = 'wpcf-ingredients';
					$ingre = get_post_meta( $current_post_id, $key, true);
					echo $ingre; ?>
				</div>
			</div>
			<div class="recipe-directions col-sm-12 col-md-9">
				<div class="recipe-directions__title">Directions</div>
			</div>
			
	
			<?php the_content(); ?>
	
		</div>
		
	</div>

</div>
