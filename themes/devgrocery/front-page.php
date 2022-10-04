<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package devgrocery
 */

get_header(); ?>

	<main id="primary" class="site-main">
		
	<section class="container pb-5 pt-3">
	<div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="<?php echo get_template_directory_uri(); ?>/img/family.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text-start" style="left: 150px; padding: 90px 0;">
       <a href="http://localhost:10008/men/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Order now!</a>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
	<img src="<?php echo get_template_directory_uri(); ?>/img/slider_2.png" class="d-block w-100" alt="...">
  <div class="carousel-caption d-none d-md-block text-start" style="left: 150px; padding: 120px 0;">
       <a href="http://localhost:10008/men/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Order now!</a>
    </div>
    </div>
    <div class="carousel-item">
	<img src="<?php echo get_template_directory_uri(); ?>/img/slider_3.png" class="d-block w-100" alt="...">
  <div class="carousel-caption d-none d-md-block text-start" style="left: 150px; padding: 120px 0;">
       <a href="http://localhost:10008/men/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Order now!</a>
    </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<section class="container popular-products">
<h1 class="text-center pt-5">Categories</h1>
<p class="text-center">We offer a number of high quality food!</p>

<div class="pt-5 pb-5">

<?php echo do_shortcode('[product_categories columns=4 limted=4]'); ?>
</div>
</section>

<section class="container pt-5 pt-5">
<h1 class="text-center pt-5">News</h1>

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
  
  <a href="<?php the_permalink(); ?>">
  <h3><?php the_title(); ?></h3>
  </a>

  <?php the_excerpt(); ?>


  </div>

  <?php
  endwhile; ?>
  
  </div>
  <?php endif; ?>
</div>
</section>

</section>
	</main><!-- #main -->

<?php
wp_list_categories();
get_footer();

