
<?php get_header(); ?>
<section class="container pt-5 pt-5">
<h1 class="text-center pt-5">News</h1>
<hr>
<?php
$args = [
    'post_type' => 'post',
];
$_posts = new WP_Query($args);
?>

<?php if ($_posts->have_posts()): ?>

  <div class="row">

  <?php while ($_posts->have_posts()):
      $_posts->the_post(); ?>

  <div class="col-lg-4">

  <?php if (has_post_thumbnail()): ?>

    <img src="<?php the_post_thumbnail_url(
        'small_image'
    ); ?>" class="img-fluid mb-2 alt="<?php the_title(); ?>">

    <?php endif; ?>
  

  <h3><?php the_title(); ?></h3>
  </a>

  <?php the_excerpt(); ?>
  <a class="button-news" href="<?php the_permalink(); ?>">Läs mer</a>

  </div>

  <?php
  endwhile; ?>
  
  </div>
  <?php endif; ?>
</div>

</section>
<?php get_footer(); ?>


