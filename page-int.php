<?php
/**
 * Template Name: Interior Page Template
 */

get_header();?>

	<div class="container-fluid p-0 text-center">
		<div class="row">
				<div class="mainHome interior container-fluid">
					<div class="row text-left">

						<?php if (is_page('mission')) {?>
							<div class="col-12 bannerBar"><p>Mission Statement</p></div>
						<?php	} else if (is_page('how-it-works')) {?>
							<div class="col-12 bannerBar"><p>Medicaid Service: How it works</p></div>
						<?php	} else if (is_page('about')) {?>
							<div class="col-12 bannerBar"><p>About Us</p></div>
						<?php	} else if (is_page('faq')) {?>
							<div class="col-12 bannerBar"><p>FAQ</p></div>
						<?php	} else if (is_page('products')) {?>
							<div class="col-12 bannerBar"><p>Products</p></div>
						<?php	} else {?>
							<div class="col-12 bannerBar"><p></p></div>
						<?php }?>

					</div>

<div class="row d-flex align-items-stretch">

						<?php if (is_page('mission')) {?>
							<div class="col-lg-7 col-md-12 intImg mission px-0"></div>
						<?php	} else if (is_page('how-it-works')) {?>
							<div class="col-lg-7 col-md-12 intImg works px-0"></div>
						<?php	} else if (is_page('about-us')) {?>
							<div class="col-lg-7 col-md-12 intImg about px-0"></div>
						<?php	} else if (is_page('faq')) {?>
							<div class="col-lg-7 col-md-12 intImg faq px-0"></div>
						<?php	} else {?>
							<div class="col-lg-12 col-md-12 intImg px-0"></div>
						<?php }?>

	<div class="col-lg-5 col-md-12 intText px-5 text-center d-flex align-items-center">

		<?php if (is_page('faq')) {?>
			<?php get_template_part('inc/faq');?>
		<?php	} else {
	?>
			<?php
while (have_posts()): the_post();
		get_template_part('template-parts/content', 'page');
	endwhile; // End of the loop.
	?>
		<?php }?>

	</div>
</div>

					<?php get_template_part('inc/bar');?>
					<div class="slidersGroup"><?php get_template_part('inc/sliders');?></div>
					<div class="slidersSingle"><?php get_template_part('inc/sliderssm');?></div>
				</div><!--/container-fluid-->
		</div><!--/row-->
	</div><!--/container-fluid-->

<?php
get_footer();
