<?php get_header(); ?>

<!-- Begin Section Container -->
<section class="row index-container">
    <div class="eight columns">
        <h1>Welcome to Lone Star Pet Rescue</h1>
        <p>
            Paragraph-Large. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat…
        </p>
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

    <div class="four columns">
        <?php get_sidebar(); ?>
    </div>
</section>
<!-- End Section Container -->

<?php get_footer(); ?>
