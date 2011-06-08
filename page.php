<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

<?php the_post(); ?>

<?php get_template_part( 'content', 'page' ); ?>

<?php comments_template( '', true ); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>