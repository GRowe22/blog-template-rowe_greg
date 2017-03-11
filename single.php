<?php get_header(); ?>
    <section class="row">
        <div class="nine columns single-page-content">
            <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                    ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content();
                    endwhile;
                endif; ?>
        </div>
        <div class="three columns sidebar-margin">
            <?php get_sidebar(); ?>
        </div>
    </section>
<?php get_footer(); ?>
