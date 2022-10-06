<?php 
$name = get_field('name');
?>
<main id="primary" class="site-main"</div>
<div class="listed-testimonial">
<?php the_title();?>
<?php the_content();?>

<?php echo $name; ?>
</div>
</main>