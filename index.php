<?php get_header(); ?> <!-- We are putting the header here. It is getting the header.php -->
	<div class="row">
		<div class="col-xs-6">
			<?php if(have_posts()): ?>
				<?php while(have_posts()): the_post(); ?>

					<?php get_template_part('content',get_post_format()); ?>

				<?php endwhile; ?>	
			<?php endif; ?>
		</div>
		<div class="col-xs-6">
			

		</div>
 	</div>




<?php get_footer(); ?>
