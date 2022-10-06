<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			devgrocery_posted_on();
			devgrocery_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
        <div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	</header><!-- .entry-header -->

<?php get_footer(); ?>
