    <footer>
        <div class="row footer-navigation">
            <div class="offset-by-four eight columns">
                <?php wp_nav_menu(array(
                    'sort_column' => 'menu_order',
                    'container_class' => 'blank-menu-header'
                    ));?>
            </div>
        </div>
            <div class="two columns">
                <?php dynamic_sidebar('footer-widget-one'); ?>
            </div>

            <div class="five columns">
                <?php dynamic_sidebar('footer-widget-two'); ?>
            </div>

            <div class="four columns footer-calendar">
                <?php dynamic_sidebar('footer-widget-three'); ?>
            </div>
    </div>
    </footer>
</div><!-- End Container Div-->

<?php wp_footer(); ?>

</body>

</html>
