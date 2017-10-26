<?php 

	/*
		Template Name: Four Column
	*/


 ?>
<?php get_header(); ?>
	<div class="row">
		<div class="col-xs-3">
			<?php get_template_part('content',get_post_format()); ?>
		</div>
		<div class="col-xs-3">
			<?php get_template_part('content',get_post_format()); ?>
		</div>
		<div class="col-xs-3"> 
			<?php get_template_part('content',get_post_format()); ?>
		</div>
		<div class="col-xs-3">
			<?php get_template_part('content',get_post_format()); ?>
		</div>

	</div>

<?php get_footer(); ?>