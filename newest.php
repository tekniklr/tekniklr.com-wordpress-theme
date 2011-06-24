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
<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
	<footer id="entry-author-info">
		<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'boilerplate_author_bio_avatar_size', 60 ) ); ?>
		<h2><?php printf( esc_attr__( 'About %s', 'boilerplate' ), get_the_author() ); ?></h2>
		<?php the_author_meta( 'description' ); ?>
		<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
			<?php printf( __( 'View all posts by %s &rarr;', 'boilerplate' ), get_the_author() ); ?>
		</a>
	</footer><!-- #entry-author-info -->
<?php endif; ?>
	<footer class="entry-utility">
		<?php boilerplate_posted_in(); ?>
		<?php edit_post_link( __( 'Edit', 'boilerplate' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-utility -->
</article><!-- #post-## -->

<?php $num_shown++; ?>
<?php endwhile; // end of the loop. ?>