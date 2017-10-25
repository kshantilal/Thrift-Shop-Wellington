<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Thrift Shop Wellington</title>
	<link href='https://fonts.googleapis.com/css?family=Source Sans Pro' rel='stylesheet'>
	<?php wp_head(); ?>
</head>
<?php 
	if ( is_front_page() ) {
		$bodyClass = array('my-body', 'front-page');
	}else{
		$bodyClass = array('my-body');
	}

 ?>
	<body <?php body_class($bodyClass); ?>>
			<div class="row">
				<div class="col-xs-6 logo"><?php the_custom_logo('thumbnail'); ?></div>
				<div class="col-xs-6"><?php wp_nav_menu(array('theme_location' =>'primary'));?></div>
			</div>
			
		<div class="container">

			

