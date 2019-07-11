<?php
$theme = get_sub_field( 'theme' );
$theme_class = $theme == 'dark' ? 'bg-brand-blue text-light' : 'bg-brand-light-blue text-brand-blue';

$btn_class = $theme == 'dark' ? 'btn btn-outline-light btn-lg' : 'btn btn-outline-brand-blue btn-lg';

$image = get_sub_field( 'image' );
$image_url = $image['url'];
?>

<div class="stripe-content <?php echo $theme_class; ?>">
	<div class="row no-gutters">
		<div class="col-md-6 stripe-content-text">
            <h2 class="h1"><?php the_sub_field('title'); ?></h2>

            <?php the_sub_field( 'content' ); ?>

            <a class="<?php echo $btn_class; ?>" href="<?php the_sub_field( 'button_link' ); ?>" aria-label="<?php the_sub_field( 'button_label' ); ?>">
                <?php the_sub_field( 'button_text' ); ?>
            </a>
		</div>	<!-- .col-md-6 -->

		<div class="col-md-6 stripe-content-image" style="background-image: url('<?php echo $image_url ?>');">
		</div> <!-- .col-md-6 -->
	</div> <!-- .container -->
</div> <!-- .stripe-content -->
