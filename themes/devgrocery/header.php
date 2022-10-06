<?php
/**
 * @package devgrocery
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if (is_page('contact')) { ?>
	<script type="text/javascript" src="<?php bloginfo(
     'template_directory'
 ); ?>/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo(
     'template_directory'
 ); ?>/js/verif.js"></script>
<?php } ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e(
     'Skip to content',
     'devgrocery'
 ); ?></a>


<div class="announcement-bar">
	<div class="container-wrapper">
	<div class="container"> <p class="text"> EXTRA!! EXTRA!! 10% off Autumn discount code: <span>Godevfood2022</span> &nbsp; <i class="bi bi-clock"></i> &nbsp;&nbsp;&nbsp; </p> 
	<style>
		.announcement-bar{
			width: 100%;
			border-top: 1px solid black;
			border-bottom: 1px solid black;
			overflow: hidden;
			background: darkslategray;
		}
		.container-wrapper{
			animation: announcementAnimation 30s linear 0s infinite running ;
		}

		.text {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 15px;
			position: relative;
			color: white;
			margin: 0;
			padding: 0 15%;
			will-change: transform;
			right: 80%;		
}

		.text span {
			font-weight: bold;
		}

		@keyframes announcementAnimation{
			100%{
				transform: translateX(1500px);
			}
		}
	</style>
	</div>
</div>
</div>



	<header id="masthead" class="site-header bg-primary">

		<div class="container pt-2 pb-2">

			<div class="row align-items-center">

				<div class="col site-header__logo d-flex justify-content-center justify-content-md-start pb-2">
					<?php the_custom_logo(); ?>
				</div>


				<div class="col-sm-12 col-md-5">
					<?php if (function_exists('aws_get_search_form')) {
         aws_get_search_form();
     } ?> 
				</div>

				<div class="site_cart col cart d-flex justify-content-end align-items-center pt-2 white">
				<a href="<?php echo wc_get_cart_url(); ?>"><i class="bi bi-cart-fill p-2 icon-white"></i></a>
				<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e(
    'View your shopping cart'
); ?>"><?php echo sprintf(
    _n('%d item', '%d items', WC()->cart->get_cart_contents_count()),
    WC()->cart->get_cart_contents_count()
); ?> –
				<?php echo WC()->cart->get_cart_total(); ?></a>
				</div>
			</div>
		</div>




		<nav id="site-navigation" class="main-navigation bg-primary-opacity-8">
				<div class="col-12 d-flex justify-content-center">

				<div class="row">
					<div class="col-12 d-flex justify-content-center">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<i class="bi bi-list"></i>
						<?php esc_html_e('Primary Menu', 'devgrocery'); ?>
					</button>
					</div>
					<div class="col-12 text-center">
					<?php wp_nav_menu([
         'theme_location' => 'menu-1',
         'menu_id' => 'primary-menu',
     ]); ?>
					</div>
				</div>
	
				</div>		
		</nav><!-- #site-navigation -->



	</header><!-- #masthead -->
