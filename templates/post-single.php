<article id="singular-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( has_post_thumbnail() ) :
		$attr = array(
			'class'	 => 'feature_image',
			'title'	 => esc_attr( get_the_title() ),
			'alt'	 => esc_attr( get_the_title() ),
		);
		the_post_thumbnail( 'full', $attr );
	endif;
	?>

	<div class="inner_content">

		<?php do_action( 'digitalnomad_inner_content_starts' ); ?>

		<header>
			<div class="post_time main_time time_permalink"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_html__( 'Permalink for: %s', 'digital-nomad' ), esc_attr( get_the_title() ) ); ?>"><?php digitalnomad_the_date(); ?></a></div>				
			<h1 class="post_title main_title"><?php the_title(); ?></h1>
			<div class="post_category"><?php the_category( ', ' ); ?> <?php the_tags( '(<span class="post_tags">', ', ', '</span>)' ); ?></div>
		</header>

		<?php if ( get_the_content( '' ) ): ?>
			<div class="post_content">

				<?php do_action( 'digitalnomad_before_content_itself' ); ?>

				<?php the_content( '' ); ?>

				<?php do_action( 'digitalnomad_after_content_itself' ); ?>

			</div>
		<?php endif; ?>

		<?php do_action( 'digitalnomad_inner_content_ends' ); ?>

	</div>

	<?php
	if ( comments_open() ):
		comments_template();
	endif;
	?>

	<?php digitalnomad_the_posts_navigation(); ?>
</article>