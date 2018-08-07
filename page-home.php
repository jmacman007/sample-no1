<?php
/**
 * Template Name: Home Page Template
 */

get_header('home');?>

	<div class="container-fluid p-0 text-center">
		<div class="row">
				<div class="mainHome container-fluid">
					<?php get_template_part('inc/bar');?>
					<div class="row text-left">
						<div class="col-12 bannerBar"><p>Incontinence Products</p></div>
					</div>
					<div class="slidersGroup"><?php get_template_part('inc/sliders');?></div>
					<div class="slidersSingle"><?php get_template_part('inc/sliderssm');?></div>
				</div><!--/container-fluid-->

<?php
//get_sidebar();
get_footer();
