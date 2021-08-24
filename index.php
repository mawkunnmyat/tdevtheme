/*
Theme Name: T Dev Theme
Theme URI: https://www.tworksystem.com/themes/tdevtheme
Author: the T-Work Team
Author URI: https://www.tworksystem.com/
Description: The 2013 theme for WordPress takes us back to the blog, featuring a full range of post formats, each
displayed beautifully in their own unique way. Design details abound, starting with a vibrant color scheme and matching
header images, beautiful typography and icons, and a flexible layout that looks great on any device, big or small.
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: black, brown, orange, tan, white, yellow, light, one-column, two-columns, right-sidebar, flexible-width,
custom-header, custom-menu, editor-style, featured-images, microformats, post-formats, rtl-language-support,
sticky-post, translation-ready
Text Domain: twentythirteen

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/

<?php get_header(); ?>
<div id="ttr_main" class="row">
    <div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
        <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <h1><?php the_title(); ?></h1>
                <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                <p><?php the_content(__('(more...)')); ?></p>
            </div>
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>