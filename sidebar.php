<?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); ?>

            <div class="row">
                <div class="two columns sidebar-thumbnail">
                    <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail('thumbnail');
                    }?>
                </div>
                <div class="ten columns sidebar-post">
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <div class="row sidebar-date-category">
                        <div class="three columns">
                            <?php the_time('M j, Y'); ?>
                        </div>
                        <div class="one columns">
                            <p> | </p>
                        </div>
                        <div class="eight columns">
                            <?php the_category( '|' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } // end while
    } // end if
?>
<!-- END LOOP -->

<?php dynamic_sidebar('first-widget'); ?>

<?php
if ( has_post_thumbnail() ) {
    the_post_thumbnail('thumbnail');
} ?>
