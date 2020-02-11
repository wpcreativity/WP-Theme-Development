<?php
while(have_posts()): the_post();
/* Template Name: Full Width Template */
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
	
	<div class="contact-area pt-4 pb-4 start-calss">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p style="padding:100px 0 100px 0;">Coming Soon...</p>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; get_footer(); ?>