<?php get_header(); ?>
<section id="main">
	<div id="content" class="digitalnomad_post_container">
		<?php
		do_action( 'digitalnomad_before_inner_content' );

		if ( have_posts() ) :

			while ( have_posts() ) :

				the_post();
				echo digitalnomad_post_preview_layout();

			endwhile;

		else:
			get_template_part( 'templates/post', 'none' );
		endif;

		do_action( 'digitalnomad_after_inner_content' );
		?>
	</div>
	<span id="sentinel"></span>
<?php echo digitalnomad_posts_nav_link(); ?>
</section><!-- #main -->
<?php
get_sidebar();
get_footer();
