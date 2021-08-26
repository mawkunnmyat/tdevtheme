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


    <section class="categories pt-5 pb-5">
        <div class="container">

            <h1 class="text-center pt-5">Categories</h1>
            <p class="text-center">We offer a number of high quality toys to help keep<br> your pets healthy and
                spoiled!</p>


            <div class="row pt-5">

                <div class="categories__col col-md-4 col-sm-12 mb-3">
                    <a href="#"
                        class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
                        <img class="position-absolute top-0 bottom-0 end-0 start-0"
                            src="<?php echo get_template_directory_uri();?>/images/categories/toys.jpg" alt="..."
                            loading="lazy">
                        <h2
                            class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">
                            Toys</h2>
                    </a>
                </div>

                <div class="categories__col col-md-4 col-sm-12 mb-3">
                    <a href="#"
                        class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
                        <img class="position-absolute top-0 bottom-0 end-0 start-0"
                            src="<?php echo get_template_directory_uri();?>/images/categories/food.jpg" alt="..."
                            loading="lazy">
                        <h2
                            class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">
                            Food</h2>
                    </a>
                </div>

                <div class="categories__col col-md-4 col-sm-12 mb-3">
                    <a href="#"
                        class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
                        <img class="position-absolute top-0 bottom-0 end-0 start-0"
                            src="<?php echo get_template_directory_uri();?>/images/categories/care.jpg" alt="..."
                            loading="lazy">
                        <h2
                            class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">
                            Care</h2>
                    </a>
                </div>

            </div>

            <div class="row mb-3">

                <div class="categories__col col-md-4 col-sm-12 mb-3">
                    <a href="#"
                        class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
                        <img class="position-absolute top-0 bottom-0 end-0 start-0"
                            src="<?php echo get_template_directory_uri();?>/images/categories/accessories.jpg" alt="..."
                            loading="lazy">
                        <h2
                            class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">
                            Accessories</h2>
                    </a>
                </div>

                <div class="categories__col sale col-md-8 col-sm-12 mb-3">
                    <a href="#"
                        class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
                        <div class="bg-sale position-absolute top-0 bottom-0 end-0 start-0" style="z-index: 1;"></div>
                        <img class="position-absolute top-0 bottom-0 end-0 start-0"
                            src="<?php echo get_template_directory_uri();?>/images/categories/special-offers.jpg"
                            alt="..." loading="lazy">
                        <h2 class="position-absolute top-50 start-0 end-0 mb-0 text-center text-white"
                            style="z-index: 2;">Special Offers</h2>
                    </a>
                </div>

            </div>
        </div>

    </section>

    <section class="container pt-5 special-offers">
        <h1 class="text-center pt-5">Special Offers</h1>
        <p class="text-center">We offer a number of high quality toys to help keep<br> your pets healthy and
            spoiled!
        </p>

        <div class="pt-5 pb-5">
            <?php echo do_shortcode( '[sale_products columns=4 limit=4]' ); ?>
        </div>
    </section>

</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>