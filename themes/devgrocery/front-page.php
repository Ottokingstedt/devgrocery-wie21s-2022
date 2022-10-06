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
	<img src="<?php echo get_template_directory_uri(); ?>/img/slider-2.png" class="d-block w-100" alt="...">
  <div class="carousel-caption d-none d-md-block text-start" style="left: 150px; padding: 120px 0;">
       <a href="http://localhost:10008/men/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Order now!</a>
    </div>
    </div>
    <div class="carousel-item">
	<img src="<?php echo get_template_directory_uri(); ?>/img/slider-3.png" class="d-block w-100" alt="...">
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

<section class="container-fluid bg-primary text-white pt-4 pb-4">
  <div class="row">
  <div class="thumbnail col text-center"> 
  <img src="/img/deborah-rainford-yISrQEZjF8s-unsplash.jpg" alt="" class="rounded float-start">
        <div class="caption">
        <h2 class="shop-section_heading">hemgjorda äppelpajer</h2>
        </div>
  </div>
  <div class="col">
  <p class="shop-section_body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
  </p>

  </div>

  </div>
</section>

<section class="container popular-products">
<h1 class="text-center pt-5">Categories</h1>
<p class="text-center">We offer a number of high quality food!</p>

<div class="pt-4 pb-4">

<?php echo do_shortcode(
    '[product_categories limit="4" orderbyid="id" order="DESC"]'
); ?>
</div>
</section>

<section class="container pt-5 pt-5">

<h1 class="text-center pt-5">News</h1>
<hr>
<div class="post-container">


<div class="post-grid">
<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>
  <div class="post-info">
    <h2><?php the_title(); ?></h2>
    <p><?php the_excerpt(); ?></p>
    <a class="button-news" href="<?php the_permalink(); ?>">Läs mer</a> 
  </div>

  <div class="img">
  <img src="<?php the_post_thumbnail_url(
      'small_image'
  ); ?>" class="img-fluid mb-2 alt=">
  </div>

      <?php
    endwhile;
endif; ?>
  </div>
</div>
</div>

<?php get_footer();
?>
