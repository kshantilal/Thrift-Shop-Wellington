<?php 

	/*
		Template Name: Two Column 
	*/


 ?>

<?php get_header(); ?>
		<div class="row">
			<div class="col-xs-12 logo">
					<?php if(have_posts()): ?>
						<h1><?php the_title(); ?></h1>
					<?php endif; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<div><?php the_content(); ?></div>
			</div>
		</div>
		





<?php get_footer(); ?>
