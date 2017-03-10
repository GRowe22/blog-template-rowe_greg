<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    register_sidebar( array(
        'name' => ('First Widget'),
        'id' => 'first-widget',
        'description' => 'Widget for our sidebar on pages',
        'before_widget' => '<div class="widget-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));
/*--- New Widget --- */
    register_sidebar( array(
        'name' => ('Footer Widget One'),
        'id' => 'footer-widget-one',
        'description' => 'First widget for our footer',
        'before_widget' => '<div class="widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));
/*--- Second New Widget --- */
    register_sidebar( array(
        'name' => ('Footer Widget Two'),
        'id' => 'footer-widget-two',
        'description' => 'Second widget for our footer',
        'before_widget' => '<div class="widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));
/*--- Third New Widget --- */
    register_sidebar( array(
        'name' => ('Footer Widget Three'),
        'id' => 'footer-widget-three',
        'description' => 'Third widget for our footer',
        'before_widget' => '<div class="widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));

}
/*--- Custom Logo Support --- */
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */
add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' );
add_image_size( 'tile-thumb', 350, 415 ); //300 pixels wide (and unlimited height)

/*--- Enable Custom Logo ---*/
add_theme_support( 'custom-logo' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

?>
