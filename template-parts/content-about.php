<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Low_Dash
 */

$page_options = get_field( 'page_options', 'option' );
$background_image = $page_options['header_background'];
$background_image_url = $background_image['url'];


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header text-center text-brand-blue" style="background-image: url('<?php echo $background_image_url; ?>');">
		<?php get_template_part( 'inc/social', 'icons' ); ?>

		<div class="container">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<div class="page-intro">
                <?php the_field( 'intro' ); ?>
			</div>
		</div> <!-- .container -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="container">
            <?php
            the_content();

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'low-dash' ),
                'after'  => '</div>',
            ) );
            ?>
		</div> <!-- .container -->

		<?php
       if ( have_rows( 'page_content' ) ) :

            while ( have_rows( 'page_content' ) ) : the_row();

                if ( get_row_layout() == 'content_with_image' ) :
                    get_template_part( 'template-parts/stripe', 'content' );
                endif;

                if ( get_row_layout() == 'call_to_action' ) :
                    get_template_part( 'template-parts/stripe', 'cta' );
                endif;

                if ( get_row_layout() == 'full_width_image' ) :
                    get_template_part( 'template-parts/stripe', 'image' );
                endif;

            endwhile;

       endif;
       ?>

	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
