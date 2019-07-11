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

	<div id="hero" class="jumbotron w-100 p-0 text-center text-light mb-0">
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
				<div class="d-flex mt-3">
					<a class="btn btn-outline-light btn-lg" href="https://map.tgs.com/myTGSMap/Data-Library" target="_blank">Data Library</a>
					<a class="btn btn-outline-light btn-lg ml-3" href="https://www.tgs.com/products-services" target="_blank">Explore</a>
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
        </div> <!-- /.aw-hero -->
	</div> <!-- #hero -->

	<div id="primary" class="content-area col-12 text-center text-brand-blue">
		<div class="container">
			<p class="lead font-weight-normal">We are the world’s largest geoscience data company, recognized for our asset-light, multi-client business model and comprehensive data library.</p>

			<p class="lead font-weight-normal">We are a global company with operations and data available in Latin America and worldwide.</p>

            <p class="lead font-weight-normal">To see our data libraries or for more detailed information about who we are and what we offer for E&Ps, please visit our parent company website.</p>

			<a class="btn btn-brand-green btn-lg" href="https://www.tgs.com">Go to our corporate website</a>
		</div> <!-- .container -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
