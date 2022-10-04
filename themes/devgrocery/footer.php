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
	<div class="container">
		<div class="footer-grid">
				<div class="footer-item">
					<h2>Navigation</h2>
					<ul>
						<li> <?php $args = [
          'theme_location' => 'footer menu',
      ]; ?>
							<?php wp_nav_menu($args); ?>
						</li>
					</ul>
				</div>
		<div class="footer-item">
			<h2>Information	</h2>
			<ul>
				<li> <a href="#">Privat Policy</a> </li>
				<li> <a href="#">Terms</a> </li>
				<li> <a href="#">Affiliates</a> </li>
			</ul>
		</div>
		<div class="footer-item">
		<a href="<?php echo get_home_url('/'); ?>"> 
                <h2><?php bloginfo('name'); ?></h2>
                </a>
		</div>
	</div>
	</footer><!-- #colophon -->

	<div class="copyright">
		<div class="container">
			<div class="copyright-grid">
			<div class="copytext">
				<p>Copyright @  <?php the_date('Y'); ?> - All Rights Reserved </p>
			</div>

			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
