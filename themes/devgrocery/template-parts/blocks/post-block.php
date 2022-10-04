<div class="post-block">
    <h1><?php the_title();?></h1>
<?php the_post_thumbnail('medium'); ?>
<span><?php the_time(get_option('date_format'));?></span>
<div>
    <?php the_excerpt(); ?>
</div>

<a href=""><?php the_permalink(); ?>Läs mer</a>

</div>