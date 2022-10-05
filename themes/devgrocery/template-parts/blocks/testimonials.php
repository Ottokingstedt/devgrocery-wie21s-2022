<?php 

$number = get_field('number');

$args = array(  
    'post_type' => 'testimonials',
    'post_status' => 'publish',
    'posts_per_page' => $number, 
);
$loop = new WP_Query($args);

?>



<div class="testimonial">

    <?php 
if ($loop->have_posts()) : ?> 
<?php while ($loop->have_post()) : $loop->the_post(); ?>

<?php get_template_part( 'template-parts/listed-testimonial' ); ?>

<?php endwhile; ?>

<?php wp_reset_postdata(); ?>


<?php endif; ?>


</div>

