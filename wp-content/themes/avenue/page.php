<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package avenue
 */
get_header();
?>
<div class="site-content-wrapper">
<div id="content" class="site-content">
    <?php while (have_posts()) : the_post(); ?>
        <?php // get_template_part('content', 'page'); ?>
        <div class="col-md-12">
            <div class="page-title">
                <div class="row text-left">
                    <?php the_title(); ?>
                </div>
            </div>
            <div class="page-content row">
                <div class="">
                    <div class="col-md-9 item-page">
                        <?php
                        the_content();
                        wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'avenue' ), 'after' => '</div>' ) );
		                        
                        // If comments are open or we have at least one comment, load up the comment template
                        if (comments_open() || '0' != get_comments_number()) :
                            comments_template();
                        endif;
                        ?>
                    </div>
                    <div class="col-md-3 avenue-sidebar">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
            </div>
<?php endwhile; // end of the loop.   ?>
</div>
</div>
<?php get_footer(); ?>
