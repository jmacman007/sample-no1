<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<meta name="google-site-verification" content="lmy2Z4E7rlBt9TpUfigjpAMem7G1RihG7j7wYncVm9M" />
	<link rel='stylesheet' href='<?php echo esc_url(home_url('/')); ?>/wp-content/themes/mos-two/inc/fontawesome-all.min.css' type='text/css' media='all' />
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head();?>
</head>

<body <?php body_class();?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
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
	'theme_location' => 'primary',
	'depth' => 2,
	'container' => false,
	'menu_class' => 'navbar-nav ml-auto',
	'walker' => new Bootstrap_Walker_Nav_Menu(),
);
if (has_nav_menu('primary')) {
	wp_nav_menu($args);
}
?>
		        </div>
				</div><!--/collapseButton-->


	      </div>
		</nav><!--/topNav-->

		<div class="container-fluid px-5">
		<div class="row hpWords">
			<div class="col-lg-12 col-xl-7">

				<div class="row darkBox p-0">
					<div class="col headerBoxLeft p-0">
						<h2>Don't Let<br/>Anything<br/>Slow You Down!</h2>
						<p>Incontinence Products</p>
					</div>
					<div class="col headerBoxRight d-none d-xl-block">
						<div class="box">
							<img class="leftMarks" src="<?php echo esc_url(home_url('/')); ?>wp-content/themes/mos-two/img/left-quote-marks.png" alt="left quote marks" title="left quote marks">
							<img class="rightMarks" src="<?php echo esc_url(home_url('/')); ?>wp-content/themes/mos-two/img/right-quote-marks.png" alt="right quote marks" title="right quote marks">
							<p>Your products help us be as active as we like and not miss out on life!</p>
							<h4>- Al & JoeAnn Merin</h4>
						</div>
					</div>
					<div class="blueBar"></div>
				</div><!-- /darkBox -->

<div class="row social">
	<div class="col">
		<div class="socialLinks">
			<p>Follow Us</p>
			<ul>
				<a target="_blank" rel="noopener noreferrer" href="https://business.facebook.com/medicaloutcome/?business_id=1924821931143396"><li><i class="fab fa-facebook-f fa-2x"></i></li></a>
				<a target="_blank" rel="noopener noreferrer" href="https://twitter.com/medicaloutcome"><li><i class="fab fa-twitter fa-2x"></i></li></a>
			<a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/medicaloutcomesolutions/"><li><i class="fab fa-instagram fa-2x"></i></li></a>
			</li></ul>
		</div>
	</div>
</div>

			</div>
			<div class="col-md-5"></div>
		</div>
		<div class="scrollDown"><i class="far fa-arrow-alt-circle-down"></i></div>
	</div><!--/container-fluid-->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
