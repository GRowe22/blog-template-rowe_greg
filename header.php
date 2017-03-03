<!DOCTYPE html>
<html>
<head>
<title></title>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>

<body>

<div class="container">
    <header class="row">
        <div class="five columns">
            <div class="header-logo">
                <?php if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                    }
                ?>
            </div>
        </div>

        <!-- Add Menu Here -->
        <div class="row">
            <div class="seven columns">
                <?php wp_nav_menu(array(
                    'sort_column' => 'menu_order',
                    'container_class' => 'blank-menu-header'
                    ));?>
            </div>
        </div>
    </header>
