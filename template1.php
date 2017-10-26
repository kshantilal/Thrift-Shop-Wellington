<?php 

	/*
		Template Name: Two Column 
	*/


 ?>

<?php get_header(); ?>
		<div class="row">
			<div class="col-xs-12 logo bottom-spacer">
					<?php if(have_posts()): ?>
						<h1><?php the_title(); ?></h1>
					<?php endif; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>

						<div><?php the_content(); ?></div>

					<?php endwhile; ?>	
				<?php endif; ?>
			</div>

			<div class="col-xs-6">
				<?php the_post_thumbnail('full', ['class' => 'img-responsive', 'title' => 'Feature image']); ?>
			</div>
		</div>
<?php get_footer(); ?>
