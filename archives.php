<?php
/*
Template Name: archives
*/
?>
<?php get_header(); ?>

<ul id="archives">
<?php wp_get_archives('type=monthly&show_post_count=true'); ?>
</ul>

<?php get_footer(); ?>