<?php
/*Template Name: HomePage*/
    get_header(); ?>

<div class="SliderArea">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <div class="carousel-inner">
                <?php
                   $align = array('', 'CarouselRight', '', 'CarouselRight','');
                   $i=0;
                   $slider = array('post_type'=>'slider','order'=>'ASC');
                   $slider_query = new wp_query($slider);
                   while ($slider_query->have_posts()): $slider_query->the_post();
                   $img_slider = wp_get_attachment_url(get_post_thumbnail_id($result->ID));
                   $alignment = $align[$i];
                ?>
                <div class="item <?php if($i == 0) { echo 'active';}?>">
                    <img src="<?php echo $img_slider;?>" class="img-responsive">
                    <div class="carousel-caption animate fadeIn <?php echo $alignment;?>" data-animate="fadeIn" data-duration="1.0s" data-delay="0.5s">
                        <?php the_content(); ?>
                        <a href="<?php the_field('button_link_url');?>">Full Description <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                </div>

                <?php $i++; endwhile; wp_reset_query();?>
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-menu-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-menu-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <section>
        <div class="CapabilArea">
            <div class="container">
                <div class="row">
                    <h2><?php the_field('our_capabilities_title');?></h2>

                    <div class="col-sm-6">
                        <div class="CapabilContent">
                            <?php the_field('our_capabilities_content');?>
                            <a href="<?php the_field('read_more_link');?>">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="CapabilContent">
                            <img src="<?php the_field('our_capabilities_image');?>">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="OverviewArea">
            <div class="container">
                <div class="row">

                    <h2><?php the_field('es_group_overview_title');?></h2>
                    <?php the_field('es_group_overview_content');?>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="WeArea">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 padding_none">
                        <div class="WeVedio">
                            <img src="<?php the_field('business_area_image');?>">

                            <a href="#" class="popup-video">
                                <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                            </a>

                        </div>
                    </div>

                    <div class="col-sm-6 padding_none">
                        <div class="Wecontent">
                            <h2><?php the_field('business_area_title');?></h2>
                            <?php the_field('business_area_content');?>

                            <a href="<?php the_field('read_more_url');?>">Read More ...</a>
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