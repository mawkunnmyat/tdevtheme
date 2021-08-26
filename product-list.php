<?php get_header(); ?>
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
<?php get_footer(); ?>