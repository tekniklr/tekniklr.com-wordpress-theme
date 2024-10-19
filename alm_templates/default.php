<article id="post-<?php the_ID(); ?>" class="alm-item<?php if ( ! has_post_thumbnail() ) { echo ' no-img'; } ?>">
  <h2 class="entry-title" title="<?php printf( esc_attr__( 'Permalink to %s', 'boilerplate' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h2>
  <div class="entry-meta"><?php boilerplate_posted_on(); ?></div>
  <div class="entry-content">
    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'boilerplate' ) ); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'boilerplate' ), 'after' => '</div>' ) ); ?>
  </div>
  <footer class="entry-utility">
    <?php
      $tags_list = get_the_tag_list( '', ', ' );
      if ( $tags_list ):
    ?>
      <?php printf( __( 'Tagged %2$s', 'boilerplate' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
    <?php endif; ?>
    <?php edit_post_link( __( 'Edit', 'boilerplate' ), '', '' ); ?>
  </footer>
</article>