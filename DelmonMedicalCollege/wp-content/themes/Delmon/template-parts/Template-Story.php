<?php 
/* Template Name: Story */
while(have_posts()): the_post();
$banner_image = wp_get_attachment_url(get_post_thumbnail_id($result->ID));
$content = remove_filter ('the_content', 'wpautop');
get_header();
?>

    <div class="contact-title d-flex">
		<div class="container d-flex flex-fill">
			<div class="row d-flex flex-fill align-items-center justify-content-center flex-column">
				<?php the_content(); ?>
				<span class="line-bot"></span>
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
	
	<div class="story-content">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-12">
					<?php the_field('story_content');?>
				</div>
				<div class="btngrps mt-3 mb-5 d-flex flex-md-row flex-sm-column flex-column ">
					<a class="btm2 mr-lg-3 mr-md-3 mr-sm-0  mr-0 mb-lg-0 mb-md-0 mb-sm-3 mb-3" href="<?php the_field('story_button_url');?>"><?php the_field('story_button_text');?></a>
					<a class="btm2 " href="<?php the_field('story_button_2_url');?>"><?php the_field('story_button_2_text');?></a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="bg-with-text" style="background-image: url('<?php echo $banner_image; ?>');">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-12">
				    <?php the_field('more_story_content');?>
				</div>
			</div>
		</div>
	</div>
	
	<div class="contact-area value-our pt-4 pb-5 mt-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">Our Values</h1><span class="line d-table mx-auto mt-3"></span>
				</div>
				<div class="col-md-12">
					<div class="plr-15 d-flex flex-wrap">
					    <?php while(have_rows('our_value_list')): the_row();?>
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<h2><?php the_sub_field('box_title');?></h2>
									<p><?php the_sub_field('box_short_description');?></p>
								</div>
								<div class="flip-box-back" style="background-image: url(<?php the_sub_field('box_image');?>);">
									<h2><?php the_sub_field('box_title');?></h2>
									<p><?php the_sub_field('box_description');?></p>
								</div>
							</div>
						</div>
						<?php endwhile; wp_reset_query();?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="contact-area our-vision pt-4 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center"><?php the_field('heading_text');?></h1>
					<span class="line w-25 d-table mx-auto mt-3"></span>
					<?php the_field('our_vision_content');?>
				</div>
			</div>
		</div>
	</div>
	
	<div class="broad-title say-alumn" id="ourstaff">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<h1 class="text-center">Board of Trustees</h1><span class="line d-table mx-auto mt-3 mb-5"></span>
				</div>
			</div>
			    <?php
                    $i=1;
                    $ary=array(
                            'post_type'=>'trustees',
                            'order'=>'ASC'
                           
                        );
                $ary_query = new wp_query($ary);
                while ($ary_query->have_posts()): $ary_query->the_post(); 
                $img_ary = wp_get_attachment_url(get_post_thumbnail_id($result->ID)); ?>
                
                <?php if ($i % 2 == 1){ ?>
    			<div class="row mt-2">
    				<div class="offset-lg-1 col-lg-3 col-md-12 col-sm-12 col-12">
    					<figure class="position-reltive">
    						<img src="<?php echo $img_ary; ?>">
    					</figure>
    				</div>
    				<div class="col-lg-8 col-md-12 col-sm-12 col-12 pl-5 pt-lg-0 pt-5">
    					<div class="margin-minus text-lg-left text-center">
    						<h4><?php the_excerpt();?></h4>
    						<h3 class="name text-black"><?php the_title();?></h3>
    						<p><?php the_content(); ?></p>
    					</div>
    				</div>
    			</div>
    			<?php } else { ?>
    			<div class="row mt-5 mb-5">
    				<div class="col-lg-8 col-md-12 col-sm-12 col-12 pr-5">
    					<div class="margin-minus text-lg-right text-md-center text-sm-center text-center">
    						<h4><?php the_excerpt();?></h4>
    						<h3 class="name text-black"><?php the_title();?></h3>
    						<p class="float-right"><?php the_content(); ?></p>
    					</div>
    				</div>
    				<div class="col-lg-3 col-md-12 col-sm-12 col-12">
    					<figure class="position-reltive">
    						<img src="<?php echo $img_ary; ?>">
    					</figure>
    				</div>
    			</div>
    			<?php } $i++; endwhile; wp_reset_query();?>
		</div>
	</div>
	
	<div class="download-catlog">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 justify-content-between d-flex align-items-start catlog-d">
					<div class="catlog-text">
						<?php the_field('catalog_content');?>
					</div><a href="<?php the_field('catalog_button_url');?>" target="_blank" class="btm2"><?php the_field('catalog_button_text');?></a>
				</div>
			</div>
		</div>
	</div>

<?php endwhile; get_footer(); ?>