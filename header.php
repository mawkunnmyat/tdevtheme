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
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    </head>

    <body <?php body_class(); ?>>
    <div id="navmenu">
        <div class="header-logo"><a href="<?php echo get_settings('home'); ?>"><img src="<?php echo get_template_directory_uri().'/logo.jpg'; ?>"></a> </div>
        <ul>
            <li><a href="#">ITALIAN</a></li>
            <li><a href="#">GREEK</a></li>
            <li><a href="#">CHINESE</a></li>
		    <li><a href="#">ASIA</a></li>
            <li><a href="#">DESSART</a></li>
		    <li><a href="#">DRINK</a></li>
        </ul>

        <ol>
            <li><a href="#"><i class="fas fa-search"></i></a></li>
            <li><a href="#"><i class="fas fa-flag"></i></a></li>
            <li><a href="#"><i class="far fa-money-bill-alt"></i></a></li>
		    <li><a href="#"><i class="fas fa-user-circle"></i></a></li>
		    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
        </ol>
    </div>
    <hr/>
    <div class="container">