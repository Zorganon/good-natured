<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-branding">
	<div class="wrap">

		<?php the_custom_logo(); ?>

		<div class="site-branding__title">
				<h1 class="site-branding__title__text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><b>good</b><i>natured</i><b>nutrition</b></a></h1>
		</div>
	</div><!-- .wrap -->
</div><!-- .site-branding -->
