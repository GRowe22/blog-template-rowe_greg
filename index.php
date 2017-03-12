<?php get_header(); ?>

<!-- Begin Section Container -->
<section class="row">
    <div class="nine columns index-container">
        <h1>Welcome to Lone Star Pet Rescue</h1>
        <p>
            Paragraph-Large. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat…
        </p>
        <main>
        <!-- BEGIN LOOP -->
        <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                the_post(); ?>

                    <div class="post-tile">
                        <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('tile-thumb');
                        }
                        ?>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <div class="sidebar-date-category">
                                <?php the_time('M j, Y |'); ?>
                                <?php the_category( '|' ); ?>
                        </div>
                        <?php the_excerpt(); ?>
                        <p class="post-button"><a href="<?php the_permalink(); ?>">Read More</a></p>
                    </div>
                <?php
                } // end while
            } // end if
        ?>
        <!-- END LOOP -->
        <div class="cool-pagination">
            <?php wpbeginner_numeric_posts_nav(); ?>
        </div>
        </main>
    </div>

    <div class="three columns sidebar-margin">
        <?php get_sidebar(); ?>
    </div>
</section>
<!-- End Section Container -->

<?php get_footer(); ?>
