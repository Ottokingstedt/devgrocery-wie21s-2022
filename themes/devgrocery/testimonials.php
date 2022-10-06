<?php
/** * Template Name: Testimonials * Description: A Page Template for displaying Testimonials. */

get_header(); ?>


<div class="page-hero" style="background-image:url('<?php the_post_thumbnail_url( 'large' ); ?>')">
	<div class="page-hero_heading"><h1><?php the_title();?></h1></div>
</div>
<div class="testimonials">
    <?php
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

        <div class="testimonial">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>

    <?php
        endwhile;
    else:
    endif;
    ?>
</div>