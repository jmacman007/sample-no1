<?php
/**
 * for displaying the footer
 */
?>
		</div><!--/row-->
	</div><!--/container-fluid-->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container-fluid">

				<div id="threeAreas" class="row text-left px-5">
				<div class="col-md-4">
					<img class="bottomLogo" src="<?php echo esc_url(home_url('/')); ?>wp-content/themes/mos-two/img/medical-outcome-solutions-logo-white.png" alt="Medical Outcome Solutions Logo" title="Medical Outcome Solutions Logo" >
					<p>1200 Woodruff Rd., Ste. H-29<br/>
				Greenville, SC 29607</p>
					<p><a href="mailto:dirk@medicaloutcomesolutions.com">dirk@medicaloutcomesolutions.com<a></p>
					<p><a href="tel:864-501-8485">864-501-8485</a></p>
				</div>
				<div class="col-md-6" style="display:flex;">
					<img class="img-fluid mx-auto d-block" src="<?php echo esc_url(home_url('/')); ?>wp-content/themes/mos-two/img/DD-coupon-generic.jpg" alt="Today's deal!" title="Today's deal!" >
				</div>
				<div id="footerAreaThree" class="col-md-2 col-sm-12 text-right">
				<?php
$args = array(
	'theme_location' => 'footer',
	'depth' => 2,
	'container' => false,
	'menu_class' => 'navbar-nav ml-auto',
	'walker' => new Bootstrap_Walker_Nav_Menu(),
);
if (has_nav_menu('footer')) {
	wp_nav_menu($args);
}
?>
				</div>
				</div>

				<div class="site-info col-12 text-center" style="font-weight:100;margin-bottom:2rem;">
					&copy; <?php bloginfo('name');
echo ' - ';
echo date("Y");?>. <p>Please review our <a href="<?php echo esc_url(home_url('/')); ?>/terms-of-service">Terms Of Service</a> and <a href="<?php echo esc_url(home_url('/')); ?>/privacy-policy">Privacy Policy</a>.</p>
				</div><!-- .site-info -->

			</div><!--/container-fluid-->
		</footer><!--/footer-->
	</div><!--/content-->
</div><!--/#page-->

<?php wp_footer();?>
<!-- <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script> -->
</body>
</html>
