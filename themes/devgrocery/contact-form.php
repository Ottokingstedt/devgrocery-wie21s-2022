<?php
/*
 * Template Name: Contact Form Template
 * Template Post Type: page
 */

get_header(); ?>

<?php if (isset($_GET['success'])): ?>
	<div class="alert alert-success">
		<h3>Grattis! Ditt formulär har skickats in.</h3>
	</div>
<?php endif; ?>

<?php if (isset($_GET['error'])): ?>
	<div class="alert alert-danger">
		<h3>Ojdå! Det gick inte att skicka formuläret.</h3>
	</div>
<?php endif; ?>


   
<div class="hero-img">

</div>

<div class="hero-text">
    <h2>Kontakt</h2>
    <p>Curabitur sem nisl, hendrerit quis massa ut, dictum tristique libero. <br>
        Praesent pellentesque orci ut scelerisque vestibulum. Quisque vehicula consequat lorem, <br>
        non iaculis turpis vehicula vitae. Donec commodo, risus vitae condimentum volutpat, <br>
        tellus justo volutpat metus, eu luctus lectus nisi ac elit. Fusce laoreet augue a est <br>
        fermentum pulvinar quis quis ligula. Integer iaculis, neque non tempus imperdiet, 
        tortor ligula porta risus,<br> vel tincidunt purus tellus in odio.</p>
</div>

<div class="container-form">
<h2>Komma i kontakt <span>Registrera dig och berätta vad du tycker om shop!</span> </h2>
<div class="form">
<form name="contact_form" method="POST" action="<?php echo esc_url(
    admin_url('admin-post.php')
); ?>" enctype="multipart/form-data" autocomplete="off" accept-charset="utf-8">

	<div class="inner-wrap">
    <label for="namn">
			Namn:
			<input type="text" name="contact_full_name" required="">
		</label>
	</div>

	<div class="inner-wrap">
    <label for="mail">
			E-post:
			<input type="email" name="contact_email" required="">
		</label>
	</div>
    <div class="inner-wrap">
    <label for="msg">Message:</label>
     
            <textarea name="contact_message" cols="20" rows="5" required=""></textarea>
			
		</label>
	</div>

	<input type="hidden" name="action" value="contact_form">

	<input type="hidden" name="base_page" value="<?php echo home_url(
     $wp->request
 ); ?>">

	<div >
		<button type="submit" name="submit_btn" class="submit-btn" >
			Skicka
		</button>
	</div>

</form>
</div>

</div>

<!-- new registeration -->

<section class="container popular-products">
	<hr>
<h1 class="text-center pt-5">Categories</h1>
<p class="text-center">We offer a number of high quality food!</p>

<div class="pt-4 pb-4">

<?php echo do_shortcode(
    '[product_categories limit="4" orderbyid="id" order="DESC"]'
); ?>

</div>

</section>

<?php get_footer();

?>
