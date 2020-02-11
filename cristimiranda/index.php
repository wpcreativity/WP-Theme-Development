<?php
/**
 * The main template file
 * Template Name: Home
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<section id="Banner" class="d-flex flex-column justify-content-center align-items-center" style="background-image: url(<?php the_field('banner_image');?>);">
        <div class="BannerContent d-flex flex-column justify-content-center align-items-center">
            <h1 class="effect-block">
              <span><?php the_field('banner_title');?></span>
            </h1>

            <h1 class="effect-block" id="another">
              <span><?php the_field('banner_subtitle');?></span>
            </h1>
        </div>
    </section>
    
    <section id="cristi" class="pt-5 pb-5">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-md-center ">
                    <?php $feature_image = wp_get_attachment_url(get_post_thumbnail_id($result->ID)); ?>
                    <figure><img src="<?php echo $feature_image; ?>" alt=""></figure>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 ">
                    <?php 
                        while(have_posts()):the_post();
                            the_content();
                        endwhile;
                    ?>
                </div>

            </div>
        </div>
    </section>

    <section id="support">

        <div class="support-body">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="progress">
                            <div class="progress-bar bg-warning progress-bar-striped" style="width:<?php the_field('progress_bar');?>%"></div>
                            <span><?php the_field('progress_bar');?> % Complete</span>
                        </div> 
                    </div>

                    <div class="col-md-6 col-sm-12 col-12">
                        
                        <div class="support-heading">
                            <div class="title">
                                <h1 class="muted-text fz34 f-w-300 mb-0"><?php the_field('subheading');?></h1>
                            </div>
                            <div class="sub-title">
                                <h2 class="pr-color Korolev"><?php the_field('heading');?></h2>
                            </div>
                            <?php the_field('description');?>
                        </div>
                        
                        <div class="donate-section mt-3 ">
                            <ul class="list-none p-0 m-0 d-flex flex-row justify-content-center align-items-center">
                                <li>
                                    <?php echo do_shortcode('[paypal-donation]');?>
                                </li>
                                
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#strip-modal" target="_blank">
                                        <img src="http://cristi-miranda.com/wp-content/uploads/2019/07/stripe.jpg" alt="">
                                    </a>
                                </li>
                            </ul>
                            <button class="btn-def mt-3 mx-auto d-table " data-toggle="modal" data-target="#donate-modal">DONATE</button>
                        </div>

                    </div>
                    
                    <div class="col-md-6 col-sm-12 col-12 mt-md-0 mt-lg-0 mt-sm-3 mt-3">
                        <div class="hover-on-img position-relative">
                            <img src="<?php the_field('right_image');?>" alt="">
                            <div class="hover-text d-flex flex-column align-items-center justify-content-center">
                                <h1 class="text-center text-white pl-5 pr-5 fz30 "><?php the_field('image_hover_content');?></h1>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="overflow-hidden position-relative">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-6 p-0">
                    <div class="gallery-box d-flex flex-wrap">
                        <?php
                    		$calendar_gallery = array(
                    		    'post_type'=>'calendar_gallery',
                    		    'order'=>'ASC'
                    		    );
                    		$calendar_query= new WP_Query($calendar_gallery);
                    		while($calendar_query->have_posts()): $calendar_query->the_post();
                    		$calendar_image = wp_get_attachment_url(get_post_thumbnail_id($result->ID));
                    	?>
                        <figure class="m-0 position-relative"><img src="<?php echo $calendar_image; ?>" alt="">
                            <a href="javascript:void(0)" class="PingIcon icon"><img src="<?php echo THEME_URI; ?>/images/Ping.png"></a>
                            <h3 class="text"><?php the_content();?></h3>
                        </figure>
                        <?php endwhile; wp_reset_query(); ?>

                        <div class="view-more-gal position-absolute" style="z-index: 99">
                            <a href="https://www.instagram.com/cristi_miranda">VIEW MORE
                              <span style="background: #000; border-color: #000;"><i class="fas fa-angle-double-right" aria-hidden="true"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 p-0 ">
                    <figure class="position-relative m-0">
                        <a href="https://tc1gelshop.com/products/tc1-gel">
                            <img src="<?php the_field('poster_image');?>" alt="">
                        </a>
                        <div class="icon position-absolute"><a href="<?php the_field('instagram_link_url');?>" target="_blank"><i class="fab fa-instagram"
                    aria-hidden="true"></i></a></div>
                    </figure>
                </div>

            </div>
        </div>
        <div class="view-more-gal position-absolute ">
            <a href="<?php the_field('button_url');?>"><?php the_field('button_text');?><span><i class="fas fa-angle-double-right" aria-hidden="true"></i></span></a>
        </div>
    </section>

    <section id="subscrib" class="">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-sm-12 col-12  bg-gray d-flex flex-column justify-content-center gaps">
          <div class="pasport-h1">
              <?php the_field('cristi_miranda');?>
          </div>
          <div class="pasport-foo d-flex flex-row align-items-center">
              <div class="leftar">
                  <?php the_field('cristi_pinup');?>
              </div>
              <span class="ce-line"></span>
              <div class="rightar">
                  <?php the_field('featured_videos');?>
              </div>
              
          </div>
         
        </div> 
        <div class="col-md-6 col-sm-12 col-12 py-lg-0 py-md-0 py-sm-0 py-3">
          <div class="subscribe-form  pt-3 pl-lg-3 pl-md-3 pl-sm-0 pl-0">
            <div class="titel">
              <h1 class="fz38 pr-color Korolev"><?php the_field('subscribe_heading');?></h1>

            </div>
            <div class="subt-text">
              <?php the_field('subscribe_content');?>
            </div>
            <form class="w-75">
                <div class="form-group">
                <label for="" class="pr-color fz14 f-w-900 museoSans">First Name:</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group">
                <label for="" class="pr-color fz14 f-w-900 museoSans">Last Name:</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group">
                <label for="" class="pr-color fz14 f-w-900 museoSans">Email:</label>
                <input type="email" class="form-control">
              </div>
              <div class="form-group float-right">
                <button class="subscur-btn btn-def">SUBSCRIBE</button>

              </div>
            </form>
           <!-- <?php echo do_shortcode('[contact-form-7 id="114" title="GET YOUR PERSONAL PIT-PASS" html_class="form w-75"]');?>-->
          </div>
        </div>
      </div>
    </div>
  </section>

    <section id="video-area" class="d-flex">

        <div class="PlayVideo">
            <video id="video1">
                <source src="<?php the_field('video_url');?>" type="video/mp4">
            </video>

        </div>

        <div class="container-fluid d-flex flex-fill flex-column">
            <div class="row flex-fill">
                <div class="col-md-12  d-flex align-items-center justify-content-center">

                    <div class="videoplay">
                        <button type="button" class="Play" onclick="document.getElementById('video1').play();">
                            <img src="<?php echo THEME_URI; ?>/images/play.png" alt="">
                        </button>
                        <button type="button" class="Pause" onclick="document.getElementById('video1').pause();">
                            <img src="<?php echo THEME_URI; ?>/images/Pause.png"> 
                        </button> 
                    </div>
                </div>
            </div>
            <div class="row pl-5 pr-5 bg-row">
                <div class="col-md-6 col-sm-6 col-6">
                    <div class="video-text videolink">
                        <?php the_field('video_content');?>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-6">
                    <div class="watch">
                        <h1 class=""><span>W</span>A<span>T</span>CH</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
