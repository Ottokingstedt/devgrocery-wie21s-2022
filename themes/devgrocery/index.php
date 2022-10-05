<?php
/**
 * @package devgrocery
 */

get_header(); ?>

	<main id="primary" class="site-main">

		<!----Posts---->
		<div class="container">
        <div class="row">
        <div class="new-cal">
              <?php if (have_posts()): ?>

                <?php while (have_posts()):
                    the_post(); ?>
                    <article class="post">
                        <h3>
                        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
                        <?php if (has_post_thumbnail()): ?>
							<div class="post-thumbnail">
								<?php the_post_thumbnail(); ?>
							</div>
							<?php endif; ?>

							<?php the_excerpt(); ?>
							<div class="content">
							<?php the_content(); ?>
                        		<a href="<?php the_permalink(); ?>"> Read more</a>
							</div>
                      
                      
                    </article>
                <?php
                endwhile; ?>
                <?php else: ?>
                <?php echo wpautop('Sorry, no posts were found'); ?>
                <?php endif; ?>
        </div>
       
        </div>
    </div>
		

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

