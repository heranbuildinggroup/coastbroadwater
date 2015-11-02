<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package coast
 */

get_header(); ?>



<?php if(is_front_page() ) { ?>

    <h1 id="bannertext">
        <span><?php if( CFS()->get( 'banner_text_line_1' ) ): ?><?php echo CFS()->get( 'banner_text_line_1' ); ?><?php endif; ?></span>
        <span><?php if( CFS()->get( 'banner_text_line_2' ) ): ?><?php echo CFS()->get( 'banner_text_line_2' ); ?><?php endif; ?></span>
        <span><?php if( CFS()->get( 'banner_text_line_3' ) ): ?><?php echo CFS()->get( 'banner_text_line_3' ); ?><?php endif; ?></span>
    </h1>

    <?php wd_slider(1); ?>

	<div id="primary" class="content-area">
        <div class="container">
            <main id="main" class="site-main" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/content', 'page' ); ?>

                    <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>

                <?php endwhile; // End of the loop. ?>

            </main><!-- #main -->
        </div>
	</div><!-- #primary -->

    <div id="content-blocks" class="site-blocks">
        <div class="container-narrow">
            <?php
            $fields = CFS()->get( 'content_blocks' );

            foreach ( $fields as $field ) { ?>
                <div class="content-blocks <?=($c++%2==1)?"item-even":"item-odd"?> item">
                    <?php echo wp_get_attachment_image( $field['block_image'], 'medium' ); ?>
                    <div class="content-block">
                        <h2><?php echo $field['block_title']; ?></h2>
                        <p><?php echo $field['block_text']; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


    <?php } elseif( is_page( 13 ) ) { ?>

        <div class="bannerimage contact">
            <?php  echo do_shortcode( '[wpgmza id="1"]' );  ?>
        </div>


        <div id="primary" class="content-area">
            <div class="container-narrow">
                <main id="main" class="site-main maincontact" role="main">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'template-parts/content', 'page' ); ?>

                        <?php
                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        ?>

                    <?php endwhile; // End of the loop. ?>

                </main><!-- #main -->
                <div class="contactform">
                    <?php  echo do_shortcode( '[contact-form-7 id="39" title="Contact form 1"]' );  ?>
                </div>
            </div>
        </div><!-- #primary -->

<?php } else { ?>

    <?php if( CFS()->get( 'banner_image' ) ):

              $values = CFS()->get( 'banner_background_position' ); ?>

        <div class="bannerimage <?php foreach ( $values as $label => $key ) { echo $label; } ?>" style="background-image: url(<?php echo CFS()->get( 'banner_image' ); ?>);">
        </div>
    <?php endif; ?>

	<div id="primary" class="content-area">
        <div class="container-narrow">
            <main id="main" class="site-main" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/content', 'page' ); ?>

                    <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>

                <?php endwhile; // End of the loop. ?>

            </main><!-- #main -->
        </div>
	</div><!-- #primary -->

<?php } ?>




<?php get_footer(); ?>
