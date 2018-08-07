<?php
/**
 * Template Name: Sitemap Template
 */
get_header();
?>

	<div class="container-fluid p-0 text-center">
		<div class="row">
				<div class="mainHome interior container-fluid">
					<div class="row text-left">
						<div class="col-12 bannerBar"><p><?php the_title();?></p></div>
						<div class="col-12 text-center">
							<ul style="list-style:inside;-webkit-padding-start:0;">
								<li><a href="<?php echo esc_url(home_url('/')); ?>/home">Home</a></li>
								<li><a href="<?php echo esc_url(home_url('/')); ?>/about-us">About Us</a></li>
								<li><a href="<?php echo esc_url(home_url('/')); ?>/mission">Mission</a></li>
								<li><a href="<?php echo esc_url(home_url('/')); ?>/products">Products</a></li>
								<li><a href="<?php echo esc_url(home_url('/')); ?>/how-it-works">How It Works</a></li>
								<li><a href="<?php echo esc_url(home_url('/')); ?>/faq">FAQ</a></li>
								<li><a href="<?php echo esc_url(home_url('/')); ?>/contact">Contact</a></li>
								<li><a href="<?php echo esc_url(home_url('/')); ?>/terms-of-service">Terms Of Service</a></li>
								<li><a href="<?php echo esc_url(home_url('/')); ?>/privacy-policy">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
					<?php get_template_part('inc/bar');?>
					<?php get_template_part('inc/sliders');?>
				</div><!--/container-fluid-->
		</div><!--/row-->
	</div><!--/container-fluid-->

<?php
get_footer();
