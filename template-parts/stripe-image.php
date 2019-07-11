<?php
$image = get_sub_field( 'image' );
?>

<div class="stripe-image <?php echo $theme_class; ?>" xmlns:img="http://www.w3.org/1999/html">
	<img class="mx-auto" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
</div> <!-- .stripe-content -->
