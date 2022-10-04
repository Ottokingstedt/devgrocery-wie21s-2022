<?php 

$number = the_field('number');

$args = array(  
    'post_type' => 'testimonials',
    'post_status' => 'publish',
    'posts_per_page' => $number, 
    // 'orderby’ => 'title', 
    // 'order’ => 'ASC', 
);


$loop = new WP_query($args);
?>
<div class="testimonials">
    <?php 
if ($loop->have_posts()) : ?> 
<?php while ($loop->have_post()) : $loop->the_post(); ?>

<?php get_template_part( 'template-parts/listed-testimonial' ); ?>

<?php endwhile; ?>

<?php wp_reset_postdata(); ?>

<?php endif; ?>
</div>

