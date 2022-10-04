<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package devgrocery
 */
?>

	<footer id="colophon" class="site-footer">
	<div class="bg-primary text-white pt-5 pb-5">
	<div class="inner-container">
		<div class="row">
		<div class="footer-items">
			<div class="col-footer">
				<h3 class="widgettitle">Navigation</h3>
				<ul>
					<li><?php $args = [
         'theme_location' => 'footer menu',
     ]; ?>
					<?php wp_nav_menu($args); ?>
					</li>
				</ul>
			</div>
			<div class="col-footer">
			<h3 class="widgettitle">Information</h3>
			<ul>
				<li> <a href="#">Privat Policy</a> </li>
				<li> <a href="#">Terms</a> </li>
				<li> <a href="#">Affiliates</a> </li>
			</ul>
				
			</div>
		
			<div class="col">
				<a href="<?php echo get_home_url('/'); ?>"> 
                <h1> <?php bloginfo('name'); ?></h1>
			</div>
			</div>
			</div>
			</div>
		</div>	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
