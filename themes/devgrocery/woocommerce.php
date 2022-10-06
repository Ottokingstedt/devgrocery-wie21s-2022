<?php get_header(); 
/**
 * Add to woocommerce page 
 */
?>

<?php if ( !is_product() ) : ?>

<section>
<div class="page-hero bg-primary">
	<div class="page-hero_heading text-center w-75"><h1>Kategori</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Quisque suscipit neque lorem, nec congue ligula ornare vel. 
        Sed bibendum dignissim rutrum. Vestibulum interdum turpis a felis 
        luctus imperdiet eget ut dui. Proin ut maximus augue. Praesent vitae 
        rutrum nunc. Nullam nibh elit, interdum et facilisis vel, facilisis sit 
        amet risus. Nunc faucibus semper malesuada. Interdum et malesuada fames 
        ac ante ipsum primis in faucibus.</p></div>
    </section>
</div>
</section>

<main class="container-fluid">

<?php woocommerce_content(); ?>

<section class="container-fluid bg-gray popular-products">
<h1 class="text-left pt-5">Categories</h1>
<p class="text-left">We offer a number of high quality food!</p>
<div class="pt-2 pb-2">
<?php echo do_shortcode(
    '[product_categories limit="2" orderbyid="id" order="DESC"]')

?>
<?php else : ?>

<?php woocommerce_content(); ?>

<section class="container-fluid popular-products bg-primary">
<h1 class="text-left pt-5 text-white">You may also like</h1>
<p class="text-left text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque suscipit neque lorem, nec congue ligula ornare vel. Sed bibendum dignissim rutrum.
</p>

<div class="pt-4 pb-4">

<?php echo do_shortcode(
    '[featured_products per_page="2" columns="2"]'
); ?>
</div>
</section>

<section class="container-fluid pt-4 pb-4">
  <div class="row">
    <div class="col">
  <h2 class="shop-section_heading">Något vi gillar</h2>
  <p class="shop-section_body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
  </p>
  <button href="<?php the_permalink(); ?>">Läs mer</button>
  </div>
  <div class="col">
  <div class="thumbnail col text-center shop-section_img"> 
  </div>
  </div>
  </div>
</section>


<?php endif ; ?>


</main>
<?php get_footer(); ?>