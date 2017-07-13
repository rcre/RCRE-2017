<!-- VERSION 4: Broker Name, Title and Industry --> 
<header class="profile-header m-all t-all d-all cf">

	<!-- Broker's Name is the Title -->
		<h1 class="h1-profile"><?php the_title(); ?>
		</h1>

	<!-- PHP Get the Broker's Title and Industry-->
		<div class="text-left">
			<?php echo types_render_field( "broker-title", array( 'raw' => false) ); ?> // <div class="header-link"> <?php echo get_the_term_list( $post->ID, 'specialty', '', ', ', ''); ?></div> 
		</div>

</header>