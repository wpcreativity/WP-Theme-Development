<?php
while(have_posts()): the_post();
 /*Template Name: Contact-Us */
  get_header(); 
  $img = wp_get_attachment_url(get_post_thumbnail_id($Client_query->ID));
  ?>

<div class="title-wraper contact-titlewraper d-flex flex-column justify-content-center align-items-center" style="background-image:url(<?php echo $img;?>);">
	<h3 class="text-center header-overlay"><?php the_title();?></h3>
	<?php the_content();?>
</div>


<div class="contact-details">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="cont-box text-center">
					<h3><?php echo ot_get_option('mobile_title');?></h3>
					<h1><?php echo ot_get_option('mobile');?></h1>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="cont-box text-center">
					<h3><?php echo ot_get_option('fax_title');?></h3>
					<h1><?php echo ot_get_option('fax');?></h1>
				</div>

			</div>
			<div class="col-md-4 col-sm-4">
				<div class="cont-box text-center">
					<h3><?php echo ot_get_option('email_2_title');?></h3>
					<h1><?php echo ot_get_option('email_2');?></h1>
				</div>
			</div>

		</div>
	</div>

</div>
<div class="map-form">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 p-0 mt-3">

				<iframe src="<?php echo ot_get_option('map');?>" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

			</div>
			<div class="col-md-6 ">
				<div class="contact-form pr-5 pl-5">
					<h3><?php the_field("lets_talk_title");?></h3>
					<h2><?php the_field("how_can_we_help_title");?></h2>
                      <?php the_field("how_can_we_help_content");?>
				<?php echo do_shortcode('[contact-form-7 id="243" title="Contact Us"]');?>
			</div>
		</div>
	</div>
	</div>
</div>

	<?php endwhile; get_footer(); ?>