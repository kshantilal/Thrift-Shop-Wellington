<?php 

	/*
		Template Name: Two Column 
	*/


 ?>

<?php get_header(); ?>
		<div class="row">
			<div class="col-xs-12 logo bottom-spacer">
					<?php if(have_posts()): ?>
						<div class="pageTitle">
							<h1><?php the_title(); ?></h1>
						</div>
					<?php endif; ?>
			</div>
		</div>
		<div class="row">
			<?php 
				$parms = array(
					'type' => 'post',
					'category_name' => 'About Us',
					'posts_per_page' => '',
					'offset' => ''
				);
				$allPosts = new WP_Query($parms);
			?>
			<div class="col-xs-6">
				<?php if($allPosts->have_posts()): ?>
					<?php while($allPosts->have_posts()): $allPosts->the_post(); ?>
						<div style="float: left"><?php the_content(); ?></div>

					<?php endwhile; ?>	
				<?php endif; ?>
			</div>

			<div class="col-xs-6">
				<?php the_post_thumbnail('full', ['class' => 'img-responsive', 'title' => 'Feature image']); ?>
			</div>
		</div>
<?php get_footer(); ?>











