<?php

/*Template Name: capabilities*/
get_header(); ?>

    <div class="BannerArea">
        <img src="<?php bloginfo('template_url');?>/images/slider2.jpg" class="img-responsive">
        <div class="BannerContent">
            <div class="container">
                <h2><?php the_title();?></h2>
                <ul>
                    <li><a href="<?php bloginfo('url');?>">Home</a></li>
                    <li class="active"><a href="#"><?php the_title();?></a></li>
                </ul>
            </div>
        </div>
    </div>
    
     <section>
        <div class="BusinesArea">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="BusinesContent">
                           <?php the_field('capabilities_content');?>
                        </div>
                    </div>

                    <div class="col-sm-5 padding_none">
                        <div class="BusinessImages">
                            <img src="<?php the_field('capabilities_image');?>">
                        </div>
                    </div>

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
