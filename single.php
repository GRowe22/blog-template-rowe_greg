<?php get_header(); ?>
    <section class="row">
        <div class="twelve columns">
            <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                    if ( has_post_thumbnail() ) { ?>
                    <div class="post-thumbnail"><?php the_post_thumbnail('large'); ?></div>
                <?php } ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content();
                    endwhile;
                endif; ?>
        </div>
    </section>
<?php get_footer(); ?>
