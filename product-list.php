<?php get_header(); ?>


<head>

    <script type="text/javascript"
        src="<?php echo get_stylesheet_directory_uri().'https://code.jquery.com/jquery-2.2.0.min.js'; ?>"></script>
    <script type="text/javascript"
        src="<?php echo get_stylesheet_directory_uri().'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js'; ?>">
    </script>
    <script type="text/javascript"
        src="<?php echo get_stylesheet_directory_uri().'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'; ?>">
    </script>

    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/script.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/carousel.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-ui.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.min.js'; ?>"></script>

    <link
        href="<?php echo get_stylesheet_directory_uri().'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'; ?>"
        rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/main.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/style.css'; ?>">

</head>

<body>

<?php
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 20,
    );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
        global $product;
        print_r($product);
        //echo '<br /><a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().' '.get_the_title().'</a>';
    endwhile;
    wp_reset_query();
?>
</body>

<?php get_footer(); ?>