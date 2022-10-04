<?php 

get_header();

if (have_posts()) :
        ?>
Här visas sökresultaten!

<?php while (have_posts()) : the_post(); ?> 
        <?php get_template_part('template-parts/content-search'); ?>
<?php endwhile; ?>

<?php 

endif;
get_footer();

?>
