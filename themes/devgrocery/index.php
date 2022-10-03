<?php
/**
 * @package devgrocery
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			<?php while ( have_posts() ) :
				the_post(); 

				get_template_part( 'template-parts/content', get_post_type() ); ?>
						<article class="post">
                        <h3>
                        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
                        
                        <?php the_content(); ?>
                        
                      
                    </article>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
