<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package coast
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if( CFS()->get( 'vimeo_link' ) ): ?>
        <?php echo CFS()->get( 'vimeo_link' ); ?>
    <?php endif; ?>

    <div class="homecontent">
        <header class="entry-header">
            <h2 class="entry-title"><?php echo get_split_title($post->ID); ?></h2>

        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php the_content(); ?>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'coast' ),
                    'after'  => '</div>',
                ) );
            ?>

        </div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'coast' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
    </div>

</article><!-- #post-## -->

