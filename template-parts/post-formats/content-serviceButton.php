<!-- content-serviceButton.php -->

<?php // This is the template for a button to a service page, data is retrieved from the service ?>
	<div id="<?php echo sanitize_title_with_dashes( $title ); ?>" class="button-service m-1of2 t-1of4 d-1of4">
		
		<?php // Display the bg image based on the assign image to the page ?>
		<img src="<?php // get the link to the service picture ?>" alt="<?php echo the_title(); ?>">

		<?php // Get the link to the service and generate the title ?>
		<a href="<?php echo get_post_permalink(); ?>" class="blue-link"><?php echo the_title(); ?></a>
	</div>
