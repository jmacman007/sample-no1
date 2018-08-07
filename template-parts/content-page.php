<?php
/**
 * for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID();?>" <?php post_class();?>>

	<?php if (has_post_thumbnail()): ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail('full', array('class' => 'rounded'));?>
		</div><!--  .post-thumbnail -->
	<?php endif;?>

	<!-- <header class="entry-header"> -->
		<!-- <?php// the_title( '<h1 class="entry-title">', '</h1>' ); ?> -->
	<!-- </header> --><!-- .entry-header -->

	<div class="entry-content">
		<?php
the_content();

wp_link_pages(array(
	'before' => '<div class="page-links">' . esc_html__('Pages:', 'strappress'),
	'after' => '</div>',
));
?>
	</div><!-- .entry-content -->


</article><!-- #post-## -->
