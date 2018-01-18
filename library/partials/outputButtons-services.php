<div class="button-grid">
	<?php
    	$terms = get_terms( 'services' );
    	
    	foreach( $terms as $term ){ 
				$termId = $term->term_id;
    		$icon = types_render_termmeta( "specialty-icon", array( "term_id" => $termId ));
				
				?>
			<a href="<?php echo $term->slug; ?>">
				<div class="service-box">
    				<?php echo $icon; ?>
        			<h5><?php echo $term->name; ?></h5>
        		</div>
			</a>
   <?php } ?>
</div>