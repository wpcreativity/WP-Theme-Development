<?php
/* Template Name: Home Page */
$content = remove_filter ('the_content', 'wpautop');
get_header(); ?>

<div class="sliders">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
                $slider=array( 
                    'post_type'=>'slider',
                    'order'=>'ASC'
                );
                $slider_query = new wp_query($slider);
                    while ($slider_query->have_posts()): $slider_query->the_post(); 
                        $img_slider = wp_get_attachment_url(get_post_thumbnail_id($result->ID));
            ?>
            <div class="carousel-item active" style="background-image: url(<?php echo $img_slider;?> );">
                <div class="container d-flex  h-100 flex-fill">
                    <div class="row d-flex h-100 flex-fill">
                        <div class="col-md-12 d-flex flex-fill flex-column justify-content-center">
                            <div class="content-1 d-flex justify-content-start align-items-start flex-nowrap flex-column">
                                <h2><?php the_title();?></h2>
                                <span class="bottom-line"></span>
                                <h1><?php the_field("slider_title2");?></h1>
                                <?php the_content();?>
                            </div>
                            <span class="bottom-line"></span>
                            <div class="opne-date">
                                <h3><?php the_field("joinus_title");?></h3>
                                <button type="button" class="btn btn-outline-light" style="padding: 10px 15px;"><?php the_field("joinus_time");?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_query();?>  
        
            <ol class="carousel-indicators justify-content-end mr-3">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            </ol>
        </div>
    </div>
</div>
<div class="about-delmone">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">
			    <?php while(have_rows('about_delmon_box')): the_row();?>
                <div class="flip-box">
                  <div class="flip-box-inner">
                    <div class="flip-box-front">
                      <img src="<?php the_sub_field("box_icon");?>">
                      <h2><?php the_sub_field('box_title');?></h2>
                      <p><?php the_sub_field('box_description');?></p>
                    </div>
                    <div class="flip-box-back" style="background-image: url(<?php the_sub_field('box_image'); ?>);">
                      <h2><?php the_sub_field('box_title');?></h2>
                      <p><?php the_sub_field('box_description');?></p>
                    </div>
                  </div>
                </div>
                <?php endwhile; wp_reset_query();?>    
			</div>
			<div class="col-lg-4 col-md-12">
				<div class="abt-us mt-lg-0 mt-md-5 mt-sm-5 mt-5">
					<h1><?php the_field("about_delmon_title");?><span class="line"></span></h1>
				<?php the_field("about_delmon_content");?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="home-blog">
	<div class="container-fluid">
		<div class="row">
             <?php
              $delmon_team=array( 'post_type'=>'delmon_team','order'=>'ASC');
              $delmon_team_query = new wp_query($delmon_team);
              while ($delmon_team_query->have_posts()): $delmon_team_query->the_post(); 
              $img_delmon_team = wp_get_attachment_url(get_post_thumbnail_id($result->ID));
            ?> 
			<div class="col-md-4 col-sm-12 p-0">
				<div class="blog-box" style="background: url(<?php echo $img_delmon_team;?>);background-repeat:no-repeat;background-position:left center;">
					<h1><?php the_title();?></h1>
				<?php the_content();?>
                        <p class="date"><span>Start date:</span>&nbsp;<?php the_field("start_date");?></p>
                        <a href="<?php the_field("read_more_link");?>"><?php the_field("read_more_text");?> <i class="fas fa-angle-double-right"></i></a>
                        
				</div>
			</div>
	<?php endwhile; wp_reset_query();?>  	
			
		</div>
	</div>
</div>
    <div class="HealthArea">
        <div class="container">
            <div class="HealthHead">
                <h1><span>Customize Your Student Experience</span></h1>
                <!--
                <nav>
                    <div class="nav nav-tabs align-items-center justify-content-center mt-4 border-0" id="nav-tab" role="tablist">
                        <a aria-controls="nav-home" aria-selected="true" class="nav-item nav-link active border-0 p-0 pl-1 " data-toggle="tab" href="#nav-home" id="nav-home-tab" role="tab"></a>
                        <a aria-controls="nav-profile" aria-selected="false" class="nav-item nav-link border-0 p-0 pl-1" data-toggle="tab" href="#nav-profile" id="nav-profile-tab" role="tab">Lorem Ipsum <span class="spanTab">is</span></a>
                        <a aria-controls="nav-contact" aria-selected="false" class="nav-item nav-link border-0 p-0 pl-1" data-toggle="tab" href="#nav-contact" id="nav-contact-tab" role="tab">simply dummy <span class="spanTab">typesetting industry.</span></a>
                    </div>
                </nav>-->
            </div>
            
            <div class="tab-content" id="nav-tabContent">
                <div aria-labelledby="nav-home-tab" class="tab-pane fade show active" id="nav-home" role="tabpanel">
                    <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="HealthBox">
                            <ul>
                                <?php
                                        $arys = array(
                                            'post_type'=>'student_experience',
                                            'order'=>'ASC',
                                            'post__in'=>array(144,145,146)
                                            );
                                        $arys_query= new WP_Query($arys);
                                        while($arys_query->have_posts()): $arys_query->the_post();
                                        $arys_img = wp_get_attachment_url(get_post_thumbnail_id($result->ID));
                                    ?>
                                <li>
                                    <figure><img src="<?php echo $arys_img; ?>"></figure>
                                    <h3><span><?php the_title();?></span></h3>
                                    <?php the_content();?>
                                </li>

                                <?php endwhile; wp_reset_query(); ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="HealthBox">
                            <div class="HealthCircle">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="HealthBox">
                            <ol>
                                <?php
                                        $arys = array(
                                            'post_type'=>'student_experience',
                                            'order'=>'ASC',
                                            'post__in'=>array(147,148,149)
                                            );
                                        $arys_query= new WP_Query($arys);
                                        while($arys_query->have_posts()): $arys_query->the_post();
                                        $arys_img = wp_get_attachment_url(get_post_thumbnail_id($result->ID));
                                    ?>
                                <li>
                                    <figure><img src="<?php echo $arys_img; ?>"></figure>
                                    <h3><span><?php the_title();?></span></h3>
                                    <?php the_content();?>
                                </li>

                                <?php endwhile; wp_reset_query(); ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
                <div aria-labelledby="nav-profile-tab" class="tab-pane fade" id="nav-profile" role="tabpanel">
                    <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="HealthBox">
                            <ul>
                                <?php
                                        $arys = array(
                                            'post_type'=>'student_experience',
                                            'post__in'=>array(156,155,154)
                                            );
                                        $arys_query= new WP_Query($arys);
                                        while($arys_query->have_posts()): $arys_query->the_post();
                                        $arys_img = wp_get_attachment_url(get_post_thumbnail_id($result->ID));
                                    ?>
                                <li>
                                    <figure><img src="<?php echo $arys_img; ?>"></figure>
                                    <h3><span><?php the_title();?></span></h3>
                                    <?php the_content();?>
                                </li>

                                <?php endwhile; wp_reset_query(); ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="HealthBox">
                            <div class="HealthCircle">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="HealthBox">
                            <ol>
                                <?php
                                        $arys = array(
                                            'post_type'=>'student_experience',
                                            'post__in'=>array(153,152,151)
                                            );
                                        $arys_query= new WP_Query($arys);
                                        while($arys_query->have_posts()): $arys_query->the_post();
                                        $arys_img = wp_get_attachment_url(get_post_thumbnail_id($result->ID));
                                    ?>
                                <li>
                                    <figure><img src="<?php echo $arys_img; ?>"></figure>
                                    <h3><span><?php the_title();?></span></h3>
                                    <?php the_content();?>
                                </li>

                                <?php endwhile; wp_reset_query(); ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
                <div aria-labelledby="nav-contact-tab" class="tab-pane fade" id="nav-contact" role="tabpanel">
                    <div class="row">
                    <div class="col-sm-4">
                        <div class="HealthBox">
                            <ul>
                                <?php
                                        $arys = array(
                                            'post_type'=>'student_experience',
                                            'post__in'=>array(157,158,159),
                                            'order'=>'ASC'
                                            );
                                        $arys_query= new WP_Query($arys);
                                        while($arys_query->have_posts()): $arys_query->the_post();
                                        $arys_img = wp_get_attachment_url(get_post_thumbnail_id($result->ID));
                                    ?>
                                <li>
                                    <figure><img src="<?php echo $arys_img; ?>"></figure>
                                    <h3><span><?php the_title();?></span></h3>
                                    <?php the_content();?>
                                </li>

                                <?php endwhile; wp_reset_query(); ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="HealthBox">
                            <div class="HealthCircle">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="HealthBox">
                            <ol>
                                <?php
                                        $arys = array(
                                            'post_type'=>'student_experience',
                                            'post__in'=>array(160,161,163),
                                            'order'=>'ASC'
                                            );
                                        $arys_query= new WP_Query($arys);
                                        while($arys_query->have_posts()): $arys_query->the_post();
                                        $arys_img = wp_get_attachment_url(get_post_thumbnail_id($result->ID));
                                    ?>
                                <li>
                                    <figure><img src="<?php echo $arys_img; ?>"></figure>
                                    <h3><span><?php the_title();?></span></h3>
                                    <?php the_content();?>
                                </li>

                                <?php endwhile; wp_reset_query(); ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="schedulearea">
    <div class="container">
        <div class="row">
            <?php while(have_rows('box_items')): the_row(); ?>
                <div class="col-md-4 col-md-4 col-sm-12 pb-lg-0 pb-md-0 pb-sm-5 pb-5">
                    <div class="box d-flex">
                        <div class="icon"><img src="<?php the_sub_field("box_image");?>" alt="<?php the_sub_field("box_title");?>"></div>
                        <div class="description">
                            <h3>
                                <a href="<?php the_sub_field("box_link");?>" target="<?php the_sub_field('box_link_target');?>"><span><?php the_sub_field("box_title");?></span></a></h3>
                               <?php the_sub_field("box_description");?>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</div>
    
<div class="req-infobox">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-8 col-12">
				<p><?php the_field("register_content");?></p>
			</div>
			<div class="col-md-3 col-sm-4 col-12 d-flex align-items-center justify-content-center mt-lg-0 mt-sm-0 mt-md-0 mt-3">
				<a href="<?php the_field("register_button_link");?>"><?php the_field("request_info_btn_text");?></a>
			</div>
		</div>
	</div>
</div>

<div class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="conact-heading text-center">
                    <figure><img src="<?php the_field("contact_us_today_img");?>" alt="" class="d-table mx-auto"></figure>
                    <h2><?php the_field("contact_us_today_title1");?></h2>
                    <h1><?php the_field("contact_us_today_title2");?></h1>
                    <p><?php the_field("contact_us_today_content");?>
                    <a href="tel:<?php the_field("contact_number");?>"><?php the_field("contact_number");?></a> </span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="253" title="Contact Us Today Form"]');?>
                </div>
            </div>
        </div>

    </div>
</div>
<?php get_footer(); ?>
