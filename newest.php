<?php

include('public/wpblog/wp-blog-header.php');

$num_shown = 0;
$num_to_show = 1;

if ( have_posts() ) while ( have_posts() && ($num_shown < $num_to_show) ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	<div class="entry-meta">
		<?php boilerplate_posted_on(); ?>
	</div><!-- .entry-meta -->
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'boilerplate' ), 'after' => '' ) ); ?>
	</div><!-- .entry-content -->
	<footer class="entry-utility">
  <?php if ( count( get_the_category() ) ) : ?>
		<?php printf( __( 'Posted in %2$s', 'boilerplate' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
		|
	<?php endif; ?>
	<?php
		$tags_list = get_the_tag_list( '', ', ' );
		if ( $tags_list ):
	?>
		<?php printf( __( 'Tagged %2$s', 'boilerplate' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
		|
	<?php endif; ?>
	<?php comments_popup_link( __( 'Leave a comment', 'boilerplate' ), __( '1 Comment', 'boilerplate' ), __( '% Comments', 'boilerplate' ) ); ?>
	</footer><!-- .entry-utility -->
</article><!-- #post-## -->

<?php $num_shown++; ?>
<?php endwhile; // end of the loop. ?>