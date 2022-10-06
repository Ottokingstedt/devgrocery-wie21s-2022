<?php
/*
Template Name: Contact
*/
?>
<?php if (isset($_POST['submitted'])) {
    if (trim($_POST['contactName']) === '') {
        $nameError = 'Please enter your name.';
        $hasError = true;
    } else {
        $name = trim($_POST['contactName']);
    }
    if (trim($_POST['email']) === '') {
        $emailError = 'Please enter your email address.';
        $hasError = true;
    } elseif (
        !preg_match(
            '/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i',
            trim($_POST['email'])
        )
    ) {
        $emailError = 'You entered an invalid email address.';
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }
    if (trim($_POST['comments']) === '') {
        $commentError = 'Please enter a message.';
        $hasError = true;
    } else {
        if (function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['comments']));
        } else {
            $comments = trim($_POST['comments']);
        }
    }
    if (!isset($hasError)) {
        $emailTo = get_option('tz_email');
        if (!isset($emailTo) || $emailTo == '') {
            $emailTo = get_option('admin_email');
        }
        $subject = '[Devgrocery] From ' . $name;
        $body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
        $headers =
            'From: ' .
            $name .
            ' <' .
            $emailTo .
            '>' .
            "\r\n" .
            'Reply-To: ' .
            $email;
        wp_mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }
} ?>
<?php get_header(); ?>
<div class="hero-img">

</div>
<div id="container">
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
			<div class="inner-wrap">
		<div id="content" class="inner-form">
			<?php the_post(); ?>
			<div id="post-<?php the_ID(); ?>" class="post">
				<div class="inner-wrap">
				<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
	<ul>
		<li>
			<label for="contactName">Name:</label>
			<input type="text" name="contactName" id="contactName" value="" />
		</li>
		<li>
			<label for="email">E-post:</label>
			<input type="text" name="email" id="email" value="" />
		</li>
		<li>
			<label for="commentsText">Message:</label>
			<textarea name="comments" id="commentsText" rows="20" cols="30"></textarea>
		</li>
		<li>
			<button type="submit">Skicka</button>
		</li>
	</ul>
	<input type="hidden" name="submitted" id="submitted" value="true" />
</form>
				</div>
			</div><!-- .post-->
		</div><!-- #content -->
	</div><!-- #container -->
	</div>
	
	</div>
	
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
<?php get_footer(); ?>
