<?php

/**
 * @package devgrocery
 */

get_header(); ?>

<div class="content-area">
<main class="site-content" role='main'>
<?php if ($_posts->have_posts()): ?>

	<?php
if(have_posts()){
	while(have_posts()) : the_post();
	?>
<div class="page-hero">
	<div class="page-hero_heading"><?php the_title();?></div>
</div>
	<?php the_content(); ?>

<?php endwhile; } ?>

</main><!-- #main -->
<div class="row">
<div class="container">
	
<?php while ($_posts->have_posts()):
    $_posts->the_post(); ?>

<div class="col-lg-4">

<?php if (has_post_thumbnail()): ?>

  <img src="<?php the_post_thumbnail_url(
      'small_image'
  ); ?>" class="img-fluid mb-2 alt="<?php the_title(); ?>">

  <?php endif; ?>

<a href="<?php the_permalink(); ?>">
		<h3><?php the_title(); ?></h3>
</a>

<?php the_excerpt(); ?>

<?php the_content(); ?>

</div>
</div>

<?php
endwhile; ?>

</div>
<?php endif; ?>
</div>
		</section>

		</section>
  </main><!-- #main -->
  </div>
  <?php get_footer();

?>
