<?php
$theme = get_sub_field( 'theme' );
$theme_class = $theme == 'dark' ? 'bg-brand-blue text-light' : 'bg-brand-light-blue text-brand-blue';

$btn_class = $theme == 'dark' ? 'btn btn-outline-light btn-lg' : 'btn btn-outline-brand-light-blue btn-lg';
?>

<div class="stripe-cta <?php echo $theme_class; ?>">
	<div class="container-fluid px-0 text-center">
		<div class="stripe-cta-text">
			<?php the_sub_field( 'content' ); ?>
		</div>

		<a class="<?php echo $btn_class; ?>" href="<?php the_sub_field( 'button_link' ); ?>" aria-label="<?php the_sub_field( 'button_label' ); ?>">
			<?php the_sub_field( 'button_text' ); ?>
		</a>
	</div>
</div>
