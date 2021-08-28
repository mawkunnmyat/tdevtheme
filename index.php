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

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

</head>

<main id="primary" class="site-main">

    <section class="container-fluid pb-5 pt-4">

        <div id="carouselExampleDark" class="carousel carousel-dark slide overflow-hidden rounded"
            data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>

            <div class="carousel-inner">

                <div class="carousel-item active" data-bs-interval="10000">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri();?>/images/slider/slider1.jpg"
                            class="d-block w-100" alt="...">
                    </a>
                </div>

                <div class="carousel-item" data-bs-interval="2000">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri();?>/images/slider/slider2.jpg"
                            class="d-block w-100" alt="...">
                    </a>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>

    </section>


    <section class="container-fluid new-products">
        <h1 class="text-center pt-5">New Products</h1>

        <div class="pt-5 pb-5">
            <?php echo do_shortcode( '[products new columns=5 limit=5]' ); ?>
        </div>
    </section>

    <section class="container-fluid popular-products">
        <h1 class="text-center pt-5">Popular Products</h1>

        <div class="pt-5 pb-5">
            <?php echo do_shortcode( '[products popularity columns=5 limit=5]' ); ?>
        </div>
    </section>

    <section class="container-fluid best-sellers">
        <h1 class="text-center pt-5">Best Sellers</h1>

        <div class="pt-5 pb-5">
            <?php echo do_shortcode( '[products popularity columns=5 limit=5]' ); ?>
        </div>
    </section>

</main>
<?php get_sidebar(); ?>
</div>

<a href="javascript:void(0)" id="backToTop" class="ui-to-top">
    <?php echo esc_html__( 'BACK TO TOP', 'shopstore' );?>
    <i class="fa fa-long-arrow-up"></i>
</a>

<?php get_footer(); ?>