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
	<div class="recipe-post__wrapper container">
		<div class="recipe-post__content">
			<div class="recipe-post__glyph-info">
				<div class="recipe-post__servings">
					<span class="glyphicon glyphicon-user" aria-hidden="true"> </span>
					<span class="sr-only">Servings: </span>
					 
					<?php
						$current_post_id = get_the_ID();
						$key = 'wpcf-servings';
						$servs = get_post_meta( $current_post_id, $key, true );
						echo("Serves " . $servs);
					?>
				</div>
				<div class="recipe-post__time">
					<span class="glyphicon glyphicon-time" aria-hidden="true"> </span>
					<span class="sr-only">Time: </span>
					<?php
						$current_post_id = get_the_ID();
						$key = 'wpcf-time';
						$time = get_post_meta( $current_post_id, $key, true );
						echo $time;
					?>
				</div>
			</div>
					
			<?php the_content(); ?>
	
		</div>
		
	</div>

</div>
