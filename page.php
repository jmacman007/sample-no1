<?php
get_header();
?>

	<div class="container-fluid p-0 text-center">
		<div class="row">
				<div class="mainHome interior container-fluid">
					<div class="row text-left">
						<div class="col-12 bannerBar"><p><?php the_title();?></p></div>
					</div>
					<div class="row text-left fullSite px-2">
						<div class="col-12">
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
