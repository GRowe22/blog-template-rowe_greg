<?php get_header(); ?>

<!-- Begin Section Container -->
<section class="row">
    <div class="twelve columns">
        <!-- BEGIN LOOP -->
        <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); ?>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('thumbnail');
                    }
                    the_excerpt(); ?>
                    <p><a href="<?php the_permalink(); ?>">Read More</a></p>
                <?php
                } // end while
            } // end if
        ?>
        <!-- END LOOP -->
    </div>
</section>
<!-- End Section Container -->

<?php get_footer(); ?>
