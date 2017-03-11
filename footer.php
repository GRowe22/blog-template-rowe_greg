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

            <div class="five columns footer-text">
                <h4>Footer Content</h4>
                <p>
                    Paragraph-Large. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad.
                </p>
                <p>
                    Paragraph-Large. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad.
                </p>
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
