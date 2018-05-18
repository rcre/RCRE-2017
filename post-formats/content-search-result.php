<!-- Search-result -->
<div class="search-box">
	
	<a href="<?php esc_url( the_permalink() ); ?>">
		<div class="picture" style="background-image: url('<?php echo rcre_header_image($post); ?>');">
		</div>
	</a>
	
	<div class="content">
		<?php //get_post_tags(); ?>

		<div class="cf"></div>
		<h4><?php the_title(); ?></h3>

		<hr>
		
		<div class="text-center">
			<a class="cta-underline-blue" href="<?php esc_url( the_permalink() ); ?>">Read More</a>
		</div>
	</div>
</div>


