<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<nav id="nav-above">
		<h1 class="section-heading"><?php _e( 'Post navigation', 'toolbox' ); ?></h1>
		<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'toolbox' ) . '</span> %title' ); ?></div>
		<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'toolbox' ) . '</span>' ); ?></div>
	</nav><!-- #nav-above -->

	<?php get_template_part( 'content', 'single' ); ?>

	<nav id="nav-below">
		<h1 class="section-heading"><?php _e( 'Post navigation', 'toolbox' ); ?></h1>
		<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'toolbox' ) . '</span> %title' ); ?></div>
		<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'toolbox' ) . '</span>' ); ?></div>
	</nav><!-- #nav-below -->

	<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>