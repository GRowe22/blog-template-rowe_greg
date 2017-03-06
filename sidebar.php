<?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); ?>

            <div class="row">
                <div class="three columns sidebar-thumbnail">
                    <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail('thumbnail');
                    }?>
                </div>
                <div class="nine columns">
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <?php the_time('F j, Y'); ?>
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
