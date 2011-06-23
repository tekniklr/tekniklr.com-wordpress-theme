<?php
/*
Template Name: category_list
*/
?>
<?php get_header(); ?>

<?php
$orderby      = 'name'; 
$show_count   = 1;
$pad_counts   = 0;
$hide_empty   = 0;
$hierarchical = 1;
$title        = '';

$args = array(
  'orderby'      => $orderby,
  'show_count'   => $show_count,
  'pad_counts'   => $pad_counts,
  'hide_empty'   => $hide_empty,
  'hierarchical' => $hierarchical,
  'title_li'     => $title
);
?>

<ul id="category_list">
<?php wp_list_categories( $args ); ?>
</ul>

<?php get_footer(); ?>