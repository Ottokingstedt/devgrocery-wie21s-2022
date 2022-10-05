<div class="post-block">
<div class="page-hero" style="background-image:url('<?php the_post_thumbnail_url( 'large' ); ?>')">
	<div class="page-hero_heading"><h1><?php the_title();?></h1></div>
</div><?php the_post_thumbnail('medium'); ?>
<span><?php the_time(get_option('date_format'));?></span>
<div>
    <?php the_excerpt(); ?>
</div>

<a href=""><?php the_permalink(); ?>Läs mer</a>

</div>