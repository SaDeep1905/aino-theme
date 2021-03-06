<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package Aino
 * @since Aino 0.0.1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<?php aino_edit_link(); ?>

	</header><!-- .entry-header -->
	<div class="entry-content col">
		<?php
			the_content();
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aino' ),
					'after'  => '</div>',
				)
			);
			?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
