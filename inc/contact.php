<?php
/**
 * Template Name: Contact Page Template
 */
get_header();
?>

	<div class="container-fluid p-0 text-center">
		<div class="row">
				<div class="mainHome interior container-fluid">
					<div class="row text-left">
						<div class="col-12 bannerBar"><p>Contact Us</p></div>
					</div>

<div class="row contactPage px-2">
	<div class="col formContactContain">
		<p class="contactText">If you have a question or comment for us we would love to hear from you. Please fill-out our short fom below.</p>
							<?php
while (have_posts()): the_post();
	get_template_part('template-parts/content', 'page');
endwhile; // End of the loop.
?>
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
