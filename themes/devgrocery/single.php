<?php

/**
 * @package devgrocery
 */

get_header(); ?>

<div class="container">
<?php while (have_posts()):
    the_post(); ?>

            <article class="post">

                <h2> <?php the_title(); ?></h2>
                
                <?php the_content(); ?>
            
              </article>
            
<?php
endwhile; ?>
</div>
<?php get_footer();
