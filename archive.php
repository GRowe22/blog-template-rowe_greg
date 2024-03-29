<?php
/* Template Name: Archive Page */

get_header(); ?>
<div class="archive-container">
    <div class="row">
        <div class="nine columns archive-content">
            <div class="row">
                <div class="twelve columns">
                    <?php get_search_form(); ?>
                    <h2>Archives</h2>
                    <?php if ( have_posts() ) :
                        // The Loop
                        while ( have_posts() ) : the_post();?>
                        <div class="post-thumbnail"><?php the_post_thumbnail('medium'); ?></div>
                        <!-- data context -->
                            <h3>
                                <a href="<?php the_permalink() ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <?php the_excerpt(); ?>
                    <?php endwhile; ?> <!-- End Loop -->
                <?php else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <h2>Listed by Month:</h2>
                    <ul>
                        <?php wp_get_archives('type=monthly'); ?>
                    </ul>
                    <h2>Listed by Category:</h2>
                    <ul>
                        <?php wp_list_categories(); ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="three columns sidebar-margin">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
