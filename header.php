<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <?php wp_head(); ?>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery.js'; ?>">
        </script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-ui.min.js'; ?>">
        </script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.min.js'; ?>">
        </script>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    </head>

    <body <?php body_class(); ?>>
    <div id="navmenu">
        <ul>
            <li><a href="<?php echo get_settings('home'); ?>">HOME</a></li>
            <li><a href="#">ITALIAN</a></li>
            <li><a href="#">GREEK</a></li>
            <li><a href="#">CHINESE</a></li>
		    <li><a href="#">ASIA</a></li>
            <li><a href="#">DESSART</a></li>
		    <li><a href="#">DRINK</a></li>
        </ul>
    </div>
    <hr/>
    <div class="container">