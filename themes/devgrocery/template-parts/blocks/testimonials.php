<?php
/** * Template Name: Testimonials * Description: A Page Template for displaying Testimonials. */

get_header(); ?>


<div class="testimonials">
    <?php
    $number = get_field('number');

    $args = [
        'caller_get_posts' => 1,
        'post_type' => 'testimonials',
        'post_status' => 'publish',
        'posts_per_page' => 5,
    ];
    query_posts($args);
    if (have_posts()):
        while (have_posts()):

            the_post();
            $image = get_post_meta($post->ID, 'testimonial-image', true);
            ?>

<?php get_template_part( 'template-parts/listed-testimonial' ); ?>

        <div class="testimonial">
            <img src="<?php echo $image; ?>" width="" height="" alt="<?php the_title(); ?>" />
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>

    <?php
        endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
 </div>


