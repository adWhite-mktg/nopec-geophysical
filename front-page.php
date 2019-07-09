<?php
/**
 * The template for displaying the home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Low_Dash
 */

get_header();
?>

	<div id="hero" class="jumbotron w-100 text-center text-light mb-0">
		<div class="jumbotron-social-icons bg-brand-green">
			<ul class="list-unstyled bg-brand-white-transparent mb-0 social-list">
				<li class="social-item"><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
				<li class="social-item"><a class="social-link" href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li class="social-item"><a class="social-link" href="#"><i class="fab fa-linkedin-in"></i></a></li>
				<li class="social-item"><a class="social-link" href="#"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</div> <!-- .jumbotron-social-icons -->

		<h2 class="h1 font-weight-normal jumbotron-heading">The world’s largest provider of subsurface data</h2>
	</div> <!-- #hero -->

	<div id="primary" class="content-area col-12 text-center text-brand-blue">
		<div class="container">
            <h2>We are NOPEC Geophysical</h2>

            <p class="lead font-weight-normal">NOPEC Geophysical is committed to providing the global energy industry with the right subsurface data, in the right place, at the right time, so that our customers can make informed drilling decisions.</p>
		</div> <!-- .container -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
