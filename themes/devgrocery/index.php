<?php
/**
 * @package devgrocery
 */

get_header();
?>
	<main id="primary" class="site-main">

		<?php
	
			/* Start the Loop */
			 while ( have_posts() ) :
				the_post(); ?>

				get_template_part( 'template-parts/content', get_post_type() ); ?>
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
