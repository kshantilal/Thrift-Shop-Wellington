<?php get_header(); ?> <!-- We are putting the header here. It is getting the header.php -->
	<div class="row">
		<div class="col-xs-9">
			<?php the_post_thumbnail('home'); ?>
		</div>
		<div class="col-xs-3">
			<h2><?php echo get_theme_mod('newTheme_title_text'); ?></h2>
			<?php if(have_posts()): ?>

				<?php while(have_posts()): the_post(); ?>
					<?php the_content(); ?>
					

				<?php endwhile; ?>	
			<?php endif; ?>	
		</div>
 	</div>




<?php get_footer(); ?>
