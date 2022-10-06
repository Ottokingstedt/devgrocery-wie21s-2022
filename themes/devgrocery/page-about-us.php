<?php
/*
 * Template Name: About us Template
 * Template Post Type: page
 */

get_header(); ?>

<div class="img-header">
    <img src="" alt="">
</div>
<div class="hero-text">
    <h2>Om oss</h2>
    
   <img src="https://images.unsplash.com/photo-1545601445-5b6f418af4bf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTh8fGdyb2Nlcnl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="">
    <p>Swedish Grocery Store är butiken för alla i hela välden som vill njuta av svenska smaker. <br>
         Vi skickar svenska klassiska varor till hela världen och kommer utöka med fler varor med tiden.  <br>
        För oss är bra priser samt snabba och säkra leveranser det vi eftersträvar mest.</p>

    </div>
   

<section class="container popular-products">

<h1 class="text-center pt-5">Categories</h1>
<p class="text-center">We offer a number of high quality food!</p>
<hr>
<div class="pt-4 pb-4">

<?php echo do_shortcode(
    '[product_categories limit="4" orderbyid="id" order="DESC"]'
); ?>
</div>
</section>

<?php get_footer();

?>
