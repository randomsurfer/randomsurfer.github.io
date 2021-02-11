<?php
/**
 * Template part for displaying single posts content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mystery Themes
 * @subpackage Fotogenic
 * @since 1.0.0
 *
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
    		the_content( );

    		wp_link_pages( array(
    			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fotogenic' ),
    			'after'  => '</div>',
    		) );
		?>
	</div><!-- .entry-content -->
    
</article><!-- #post-<?php the_ID(); ?> -->
