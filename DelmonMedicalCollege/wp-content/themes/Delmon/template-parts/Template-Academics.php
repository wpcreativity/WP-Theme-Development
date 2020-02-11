<?php
while(have_posts()): the_post();
/* Template Name: Academics Template */
get_header(); 
$img = wp_get_attachment_url(get_post_thumbnail_id($Client_query->ID));
?>

    <div class="innerpage-title d-flex" style="background: url(<?php echo $img;?>);">
        <div class="container d-flex flex-fill">
            <div class="row d-flex flex-fill">
                <div class="col-md-12 d-flex flix-fill justify-content-center flex-column align-items-center text-center">
                    <h3 class="mb-0"><?php the_content();?></h3>
                    <span class="line-bot"></span>
                    <h1 class="mt-0"><?php the_title();?></h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="academics-abt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="abt-us">
                            <h1><?php the_field("bring_career_title");?></h1>
                            <span class="line"></span>
                <?php the_field("bring_career_content");?>
              </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="academic-detal">
        <div class="container">
           <?php
               $i=1;
              $career=array( 'post_type'=>'career','order'=>'ASC');
              $career_query = new wp_query($career);
              while ($career_query->have_posts()): $career_query->the_post(); 
              $img_career = wp_get_attachment_url(get_post_thumbnail_id($result->ID)); ?>   
             <?php if ($i % 2 == 1){ ?>
            <div class="row py-1 my-1">
                <div class="col-md-6">
                    <h3 class="ti"><?php the_field("academic_title");?></h3>
                    <h1><?php the_title();?></h1>
                   <?php the_content();?>
                    <ul>
                    <?php
                        while(have_rows( 'career_trainings')): the_row(); ?>
                        <li><?php the_sub_field("list_item");?></li>
                       <?php  endwhile;?>
                    </ul>
                </div>
                
                <div class="col-md-6">
                    <div class="imagebox">
                        <img src="<?php echo $img_career;?>">
                         <a href="<?php the_field("learn_more_link");?>"><?php the_field("learn_more_text");?><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            
          <?php } else { ?>
            <div class="row py-5">
                <div class="col-md-6">
                    <div class="imagebox">
                        <img src="<?php echo $img_career;?>">
                         <a href="<?php the_field("learn_more_link");?>"><?php the_field("learn_more_text");?><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="ti"><?php the_field("academic_title");?></h3>
                    <h1><?php the_title();?></h1>
                   <?php the_content();?>
                    <ul>
                         <?php
                        while(have_rows( 'career_trainings')): the_row(); ?>
                        <li><?php the_sub_field("list_item");?></li>
                       <?php  endwhile;?>
                    </ul>
                </div>
            </div>
            
             <?php } ?>
            <?php  $i++; endwhile; wp_reset_query();?> 
       
        </div>
    </div>
    
    <div class="see-dalmomn">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center"><?php the_field("why_delmon_is_right_title");?></h1>
                    <p class="text-center"><?php the_field("bring_your_career_title");?></p>
                    <div class="btngrp d-flex  flex-lg-row flex-md-row flex-sm-column flex-column justify-content-center align-items-center">
                        <a href="<?php the_field("request_more_information_link");?>"><?php the_field("request_more_information_text");?></a>
                        <a href="<?php the_field("apply_and_get_started_today_link");?>"><?php the_field("apply_and_get_started_today_text");?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; get_footer(); ?>