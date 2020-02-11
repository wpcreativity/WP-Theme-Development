<?php
while(have_posts()): the_post();
 /*Template Name: What-We-Do */
  get_header(); 
  $img = wp_get_attachment_url(get_post_thumbnail_id($Client_query->ID));
  ?>
<div class="title-wraper d-flex flex-column justify-content-center align-items-center" style="background-image:url(<?php  echo $img;?>);">
<?php the_content();?>
</div>
<div class="services-area">	
	<div class="container-fluid">
		<div class="row d-flex flex-fill">
			<div class="col-md-12 col-lg-6 d-flex flex-fill p-0">
				<div class="d-flex flex-fill wow fadeInUp" data-wow-duration="1s" style="background-image: url(<?php the_field("whatwedo_left_img");?>);background-repeat: no-repeat;background-size: cover;background-position: center;">
			
			</div>
		</div>
		<div class="col-md-12 col-lg-6 d-flex flex-fill p-0">
			<div class="serv-box d-flex flex-fill flex-column wow fadeInUp" data-wow-duration="1s">
				<h1><?php the_field("whatwedo_title");?></h1>
				<?php the_field("whatwedo_content");?>
			<div class="product-box">	
				<div class="row">
				    
					<div class="col-lg-6 col-md-6 col-sm-6">
						<i class="fas fa-rocket"></i>
						<h2><?php the_field("product_experience_title");?></h2>
						<?php the_field("product_experience_content");?>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-6">
						<i class="fas fa-wallet" aria-hidden="true"></i>
						<h2><?php the_field("woocommerce_title");?></h2>
						<?php the_field("woocommerce_content");?>
					</div>
					
				</div>
			</div>
			</div>

		</div>
			</div>
	</div>
</div>
<div class="video-bg position-relative">
<video width="100%" height="auto" autoplay loop>
	<source src="<?php the_field("animation_bg_video");?>" type="video/mp4">
	</video>
	<div class="videotext">
		<h1><?php the_field("animation_title");?></h1>
		<h3><?php the_field("animation_subtitle");?></h3>
	</div>
</div>
<div class="contact-form">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-12 col-lg-6">
			<?php echo do_shortcode('[contact-form-7 id="57" title="Contact Me(What-We-Do)"]');?>
			</div>
		</div>
	</div>
	</div>
	<?php endwhile; get_footer(); ?>