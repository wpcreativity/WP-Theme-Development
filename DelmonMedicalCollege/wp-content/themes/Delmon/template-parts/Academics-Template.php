<?php
/* Template Name: Academics Templates */
get_header();
$banner_image = wp_get_attachment_url(get_post_thumbnail_id($id->ID));
$content = remove_filter ('the_content', 'wpautop');
$cat_name = get_terms('categories');
foreach ($cat_name as $category_name){
    $categories_name = $category_name->name;
}
?>

    <div class="title-inner d-flex bg-img" style="background: url(<?php echo $banner_image; ?>);">
		<div class="container d-flex flex-fill">
			<div class="row d-flex flex-fill">
				<div class="col-lg-4 col-md-12 col-sm-12 col-12 d-flex flex-fill align-items-center">
					<div class="form-box">
                        <h1 class="text-center"><?php the_field('form_heading');?></h1>
                        <span class="line w-75 d-table mx-auto"></span>
                        <p class="text-center px-lg-5 px-md-5 px-sm-1 px-1  mt-3"><?php the_field('form_description');?></p>
						<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]');?>
						<p class="bottom-area"><img src="http://frcoder.in/Designteam/Delmon/HTML/html/delmon/images/privacy_icon.png" class="mr-2">We respect your privacy.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="carrer-glance ">
        <div class="abt-us w-50 d-table mx-auto mt-5 mb-3">
            <h1><?php the_field("career_heading");?></h1>
            <span class="line w-25 d-table mx-auto"></span>
        </div>
    </div>
    
    <div class="about-delmone inner-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                
                    <?php while(have_rows('career_list')): the_row(); ?>
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <i class="<?php the_sub_field("career_icon");?>"></i>
                                <h2><?php the_sub_field("career_title");?></h2>
                                <p><?php the_sub_field("career_description");?></p>
                            </div>
                            <div class="flip-box-back" style="background-image: url(<?php the_sub_field("career_image");?>);">
                                <h2><?php the_sub_field("career_title");?></h2>
                                <p><?php the_sub_field("career_description");?></p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_query();?>
                
                </div>
            </div>
        </div>
    </div>
    
    <div class="video-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    
                    <video id="myVideo" width="100%" height="550">
                        <source src="<?php the_field("video_link_url");?>" type="video/mp4">
                    </video>
                  
                    <div class="buttons">
                        <button class="uk-button uk-button-primary first" onclick="playVid()" type="button">
                        <i class="fas fa-play"></i></button>
                        <button class="uk-button uk-button-primary second" onclick="pauseVid()" type="button">
                        <i class="fas fa-grip-lines-vertical"></i></button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="online-learn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h1 class="text-center"><?php the_field("program_objectives_title");?></h1>
                        <span class="line w-25 d-table mx-auto"></span>
                            <?php the_field("program_objectives_lists");?>
                        <a href="<?php the_field("button_url");?>" class="d-tabl mx-auto"><?php the_field("button_text");?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="see-dalmomn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center"><?php the_field("cta_title");?></h1>
                    <p><?php the_field("cta_description");?></p>
                    <div class="btngrp d-flex  flex-lg-row flex-md-row flex-sm-column flex-column justify-content-center align-items-center">
                        <a href="<?php the_field("cta_button_url");?>"><?php the_field("cta_button_text");?></a>
                        <a href="<?php the_field("cta_button_url_2");?>"><?php the_field("cta_button_text_2");?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="say-alumn pt-5">
        <div class="container">
            <h1 class="text-center">See What Our Students & Alumni Are Saying</h1>
            <span class="line w-25 d-table mx-auto"></span>
        
            <?php
                $i=1;
                $ary=array(
                        'post_type'=>'alumni_saying',
                        'order'=>'ASC'
                    );
                $ary_query = new wp_query($ary);
                while ($ary_query->have_posts()): $ary_query->the_post(); 
                $img_ary = wp_get_attachment_url(get_post_thumbnail_id($result->ID)); ?>
                
                <?php if ($i % 2 == 1){ ?>
        
                    <div class="row mt-5  pb-5 pt-5 d-flex justify-content-center" id="<?php echo $categories_name; ?>">
                        <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                            <figure class="position-reltive mx-auto">
                                <img src="<?php echo $img_ary;?> ">
                            </figure>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12  pl-lg-5">
                            <h4 class="text-lg-left text-center"><?php the_excerpt();?></h4>
                            <h3 class="name text-lg-left text-center"><?php the_title();?></h3>
                            <p class="text-lg-left text-center"><?php the_content();?></p>
                        </div>
                    </div>
                    
                <?php } else { ?>

                    <div class="row mb-5 pb-5 pt-5 d-flex justify-content-center" id="<?php echo $categories_name; ?>" >
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12 pl-lg-5 order-lg-1 order-2">
                            <h4 class="text-lg-right text-center"><?php the_excerpt();?></h4>
                            <h3 class="name text-lg-right text-center"><?php the_title();?></h3>
                            <p class="text-lg-right text-center float-lg-right "><?php the_content();?></p>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 col-12 order-lg-2 order-1">
                            <figure class="position-reltive mx-auto">
                                <img src="<?php echo $img_ary;?>">
                            </figure>
                        </div>

			</div>
                <?php } $i++; endwhile; wp_reset_query();?> 
        </div>
    </div>
    
    <div class="offarea" style="background-image: url(<?php the_field("backgroung_image");?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                	<div class="bg-div">
						<?php the_field("section_text");?>
					</div>
                    <div class="altarea position-relative">
						<?php the_field("section_content");?>
                    </div>
					<div class="ab-btn">
						<a href="<?php the_field("apply_button_url");?>" class=""><?php the_field("apply_button_text");?> </a>
                   </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>