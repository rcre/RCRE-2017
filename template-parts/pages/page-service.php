<?php get_template_part('library/partials/sectionUVP'); ?>

<?php get_template_part('library/partials/sectionSpecialties'); ?>

	<section class="cf">
		<h2 class="header-dark text-center">Everything you need. All in one Place.</h2>
		<div class="pull-r-1of12 pull-l-1of12 cf">
			<?php get_template_part( 'post-formats/content-serviceDropdown' ); ?>
		</div>
	</section>
	
	<section id="SpecialtyTeam" class="pull-r-1of12 pull-l-1of12 cf pad-top m-padding">
		<h2 class="header-dark pad-top">The <?php the_title(); ?> Team</h2>
		<?php get_template_part('library/partials/sectionTeam'); ?>
	</section>

	<?php get_template_part('library/partials/sectionCaseStudy'); ?>
	<?php get_template_part('library/partials/sectionContact'); ?>