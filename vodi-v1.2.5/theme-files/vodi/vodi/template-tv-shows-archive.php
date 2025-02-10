<?php
/**
 * The template for displaying TV Shows Home Archive.
 * 
 * Template name: TV Shows Home Archive
 *
 * @package vodi
 */
remove_action( 'vodi_after_main_content', 'vodi_sidebar', 10 );
add_action( 'vodi_page_before', 'vodi_page_header_home_archive_templates' , 10 );
add_action( 'vodi_page_before', 'vodi_handheld_sidebar' , 30 );

get_header(); 

    do_action( 'vodi_before_main_content' ); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post();

                do_action( 'vodi_page_before' );

                get_template_part( 'templates/contents/content', 'page' );

                /**
                 * Functions hooked in to vodi_page_after action
                 *
                 * @hooked vodi_display_comments - 10
                 */
                do_action( 'vodi_page_after' );

            endwhile; // End of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary --><?php
    
    do_action( 'vodi_after_main_content' );

    /**
     * Hook: masvideos_sidebar.
     *
     * @hooked masvideos_get_sidebar - 10
     */
    do_action( 'masvideos_sidebar' );

get_footer();