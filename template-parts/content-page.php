<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link       https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    editor-blocks
 * @copyright  Copyright (c) 2018, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

?>

<article <?php post_class(); ?>>

	<?php editor_blocks_thumbnail(); ?>

	<?php get_template_part( 'template-parts/entry-header' ); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'editor-blocks' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
