<?php
/* Template Name: ContactUs */
get_header(); ?>

<div class="BannerArea">
        <img src="<?php bloginfo('template_url');?>/images/slider1.jpg" class="img-responsive">
        <div class="BannerContent">
            <div class="container">
                <h2>Contact Us</h2>
                <ul>
                    <li><a href="<?php bloginfo('url');?>">Home</a></li>
                    <li class="active"><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
        

    <section> <!-- P.O Box:64457 Shuwaikh B kuwait 70455, 16th Floor, Al-Sharq, Kuwait -->
        <div class="ContactArea">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-7 padding_none">
                        <?php echo ot_get_option('google_map_location'); ?>
                    </div>
                    <div class="col-sm-5 padding_none">
                        <div class="ContactInfo">
                            <?php
                                while(have_posts()):
                                    the_post();
                                    the_content();
                                endwhile;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="OtherContact">
            <div class="container">
                <div class="Content">
                    <?php while(have_rows('our_office')): the_row(); ?>

                    <div class="col-sm-4 padding_none">
                        <div class="ContentInfo">
                            <h3><?php the_sub_field('office_title');?></h3>
                            <p><span>Address </span>: <?php the_sub_field('office_address');?></p>
                            <p><span>Telephone</span>: <?php the_sub_field('office_telephone');?> </p>
                            <p><span>Fax</span>: <?php the_sub_field('office_fax');?></p>
                        </div>
                    </div>

                    <?php endwhile; wp_reset_query();?>
                    

                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="NewsArea">
            <div class="NewsSlider">
                <div class="container">
                    <div id="demos">
                        <h3>Group’s Companies</h3>
                        <div class="owl-carousel owl-theme">
                            
                            <?php 
                               $news = array(
                                'post_type'=> 'company_news',
                                'order'    => 'asc'
                            );
                               $news_query = new wp_query($news);
                               while ($news_query->have_posts()): $news_query->the_post();
                               $img_news= wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                             ?>

                                <div class="item">
                                    <div class="News">
                                        <a href="<?php the_field('company_url');?>" target="_blank">
                                        <figure><img src="<?php echo $img_news;?>"></figure>
                                        </a>
                                        <h4><?php the_title(); ?></h4>
                                        <h5><i class="fa fa-calendar"></i><?php the_time('F j, Y');?></h5>
                                          <?php the_content(); ?>          
                                    </div>
                                </div>

                            <?php endwhile; wp_reset_query();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
