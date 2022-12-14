<?php
/**
 * The template for displaying Category pages
 *
 */

get_header(); ?>

    <div class="container">
	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if (have_posts()): ?>

			<header class="archive-header">
				<h1 class="archive-title">
				 /* translators: %s: Category title. */
                 
                 <?php /* translators: %s: Category title. */
     printf(
         __('Category Archives: %s', 'devgrocery'),
         single_cat_title('', false)
     ); ?>
				</h1>

				<?php
    // Show an optional term description.
    $term_description = term_description();
    if (!empty($term_description)):
        printf('<div class="taxonomy-description">%s</div>', $term_description);
    endif;
    ?>
			</header><!-- .archive-header -->

				<?php // Start the Loop.
       // Start the Loop.
       ?>while (have_posts()):
        the_post();

        /*
         * Include the post format-specific template for the content. If you want
         * to use this in a child theme, then include a file called content-___.php
         * (where ___ is the post format) and that will be used instead.
         */
        get_template_part('content', get_post_format());
    endwhile; ?>
		<?php endif; ?>
	</section><!-- #primary -->
    </div>
<?php get_footer();
