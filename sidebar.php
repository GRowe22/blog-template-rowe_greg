<div class="sidebar-container">
    <div class="sidebar-header">
        <h4>Recent Posts</h4>
    </div>

    <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); ?>

                <div class="row sidebar-entry">
                    <div class="two columns sidebar-thumbnail">
                        <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail('thumbnail');
                        }?>
                    </div>
                    <div class="ten columns sidebar-post">
                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <div class="row sidebar-date-category">
                            <div class="five columns">
                                <?php the_time('M j, Y'); ?>
                            </div>
                            <div class="seven columns">
                                <?php the_category( '|' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            } // end while
        } // end if
    ?>

</div>

<div class="sidebar-container">
    <div class="sidebar-header">
        <h4>Calendar</h4>
    </div>
    <div class="widget-style">
        <?php dynamic_sidebar('first-widget'); ?>
    </div>
</div>
