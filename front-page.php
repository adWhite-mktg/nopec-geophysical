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

    <div class="aw-hero">
	<div class="hero-content">
		<h1 class="hero-title">The world’s largest provider of subsurface data</h1>
		<div class="aw-buttons">
			<a class="aw-btn" href="#">One</a>
			<a class="aw-btn" href="#">Two</a>
		</div>
	</div>
	

	<img id="hero-map-12" class="map-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/313247/Homepage_Hero_LayeredMap_02.png" alt="">

	<img id="hero-map-11" class="map-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/313247/Homepage_Hero_LayeredMap_03.png" alt="">

	<img id="hero-map-10" class="map-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/313247/Homepage_Hero_LayeredMap_04.png" alt="">

	<img id="hero-map-09" class="map-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/313247/Homepage_Hero_LayeredMap_05.png" alt="">

	<img id="hero-map-08" class="map-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/313247/Homepage_Hero_LayeredMap_06.png" alt="">

	<img id="hero-map-07" class="map-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/313247/Homepage_Hero_LayeredMap_07.png" alt="">

	<img id="hero-map-06" class="map-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/313247/Homepage_Hero_LayeredMap_08.png" alt="">

	<img id="hero-map-05" class="map-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/313247/Homepage_Hero_LayeredMap_09.png" alt="">

	<img id="hero-map-04" class="map-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/313247/Homepage_Hero_LayeredMap_10.png" alt="">

	<img id="hero-map-03" class="map-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/313247/Homepage_Hero_LayeredMap_11.png" alt="">

	<img id="hero-map-02" class="map-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/313247/Homepage_Hero_LayeredMap_12.png" alt="">

	<img id="hero-map-01" class="map-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/313247/Homepage_Hero_LayeredMap_13.png" alt="">

	<img id="hero-map-00" class="map-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/313247/Homepage_Hero_LayeredMap_01.jpg" alt="">
</div>
<!-- /.aw-hero -->
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
