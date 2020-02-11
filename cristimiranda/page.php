<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

    <section id="Banner" class="d-flex flex-column justify-content-center align-items-center" style="background-image: url(http://cristi-miranda.com/wp-content/uploads/2019/07/Banner.png);">
        <div class="BannerContent d-flex flex-column justify-content-center align-items-center">
            <h1 class="effect-block">
              <span><?php the_field('banner_title');?></span>
            </h1>

            <h1 class="effect-block" id="another">
              <span><?php the_field('banner_subtitle');?></span>
            </h1>
        </div>
    </section>
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php 
                        while(have_posts()): the_post();
                        the_content();
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
