<?php 
$name = get_field('name');
?>
<div class="listed-testimonial">
<?php the_title();?>
<?php the_content();?>

<?php echo $name; ?>
</div>
</main>