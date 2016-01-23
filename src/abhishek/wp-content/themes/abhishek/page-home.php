<?php
/**
 * Template Name: Home page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package activello
 */

get_header(); ?>
    <div id="primary" class="content-area">
                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

        <main id="main" class="site-main <?php echo "page-".$paged;?> role="main">

        <?php if ( have_posts() ) : ?>

            <div class="article-container">

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', '' ); ?>

            <?php endwhile; ?>

            </div>

            <?php activello_paging_nav(); ?>

        <?php else : ?>

            <?php get_template_part( 'content', 'none' ); ?>

        <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

    <?php get_sidebar(); ?>
<?php get_footer(); ?>
