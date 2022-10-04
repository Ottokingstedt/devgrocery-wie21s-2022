<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package devgrocery
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
	
			/* Start the Loop */
			 while ( have_posts() ) :
				the_post(); ?>

						<article class="post">

							<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
							
							<?php the_content(); ?>
                        
                      	</article>
						
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php echo do_shortcode('[sp_testimonials_slider]'); ?> 

		

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
