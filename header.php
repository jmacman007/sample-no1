<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
		<link rel='stylesheet' href='<?php echo esc_url(home_url('/')); ?>/wp-content/themes/mos-two/inc/fontawesome-all.min.css' type='text/css' media='all' />
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<meta name="google-site-verification" content="lmy2Z4E7rlBt9TpUfigjpAMem7G1RihG7j7wYncVm9M" />
		<?php wp_head();?>
	</head>

<body <?php body_class();?>>
<div id="pageInt" class="site">

	<header id="masthead" class="site-header interior" role="banner">
	    <nav id="topNav" class="navbar navbar-expand-lg navbar-light justify-content-end">
	    	<div class="container-fluid">
			   <div class="navbar-brand mb-0"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
			   	<img src="<?php echo esc_url(home_url('/')); ?>wp-content/themes/mos-two/img/medical-outcome-solutions-logo.png" alt="Medical Outcome Solutions logo" title="Medical Outcome Solutions logo">
			   	</a></div>

			<div class="collapseButton">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
				</button>
		   		<div class="collapse navbar-collapse" id="navbarNav">
	        	<?php
$args = array(
	'theme_location' => 'interior',
	'depth' => 2,
	'container' => false,
	'menu_class' => 'navbar-nav ml-auto',
	'walker' => new Bootstrap_Walker_Nav_Menu(),
);
if (has_nav_menu('interior')) {
	wp_nav_menu($args);
}
?>
	        </div>
				</div><!--/collapseButton-->

			</div>
		</nav><!--/#topNav-->

	</header><!--/#masthead -->
</div><!--/#pageInt -->

	<div id="content" class="site-content">
