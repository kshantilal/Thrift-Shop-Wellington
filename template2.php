<?php 

	/*
		Template Name: Four Column
	*/


 ?>
<?php get_header(); ?>
	<div class="row">
		<?php 
			$parms = array(
				'type' => 'post',
				'category_name' => 'Products',
				'posts_per_page' => '',
				'offset' => ''
			);
			$allPosts = new WP_Query($parms);
		 ?>
		<?php if($allPosts->have_posts()): ?>
			<?php while($allPosts->have_posts()): $allPosts->the_post();?>
			<div class="col-md-3">			
				<h3 class="img-responsive"><?php the_title(); ?></h3>
				<div class="img-responsive"><?php the_post_thumbnail('single-post-thumbnail'); ?></div>
				<p><?php the_content(); ?></p>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>


<?php get_footer(); ?>