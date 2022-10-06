<?php

get_header(); ?>

<main id="primary" class="site-main">

    <?php if (have_posts()) {
        while (have_posts()):
            the_post(); ?>

	<div class="page-hero">

		<div class="page-hero_heading"><?php the_title(); ?>

 
		
		</div>

	</div>

		<?php the_content(); ?>
		

	<?php
        endwhile;
    } ?>

<section>

</section>

</main><!-- #main -->

<?php get_footer();
