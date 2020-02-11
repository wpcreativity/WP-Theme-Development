<?php
while(have_posts()): the_post();
/* Template Name: Contact Page */
get_header();
?>

    <div class="contact-title d-flex">
		<div class="container d-flex flex-fill">
			<div class="row d-flex flex-fill align-items-center justify-content-center flex-column">
				<?php the_content(); ?>
				<span class="line-bot"></span>
				<h1><?php the_title();?></h1>
			</div>
		</div>
	</div>
	
	<div class="contact-area pt-4 pb-4">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center"><?php the_field('page_heading');?></h1><span class="line w-25 d-table mx-auto mt-3"></span>
				</div>
			</div>
		</div>
	</div>
	<div class="contact-form-area">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
				    <?php echo do_shortcode('[gravityform id="4" title="false" description="false" ajax="true"]');?>
				</div>
				<div class="col-md-4 border-left positon-relative">
					<div class="sidebar-right">
						<h1><?php the_field('chat_section');?></h1><a href="<?php the_field('chat_button_url');?>" target="_blank"><?php the_field('chat_button_text');?> <i class="fas fa-chevron-right ml-2"></i></a>
					</div>
					<div class="get-uscall">
						<h1><?php the_field('call_section');?></h1><a href="tel:<?php the_field('phone_number');?>"><?php the_field('phone_number');?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="start-calss">
		<div class="container">
			<div class="row d-flex bottom-sec">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
					<p><i class="far fa-clock mr-2"></i><?php the_field('classes_section');?></p>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 bottom-btn">
					<a href="<?php the_field('button_1_url');?>"><?php the_field('button_1_text');?></a>
					<a href="<?php the_field('button_2_url');?>"><?php the_field('button_2_text');?></a>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; get_footer(); ?>