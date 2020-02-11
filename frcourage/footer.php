<div class="fotter px-3">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-lg-3">
				<h1 class="title"><?php echo ot_get_option('logo_title');?></h1>
				<p><?php echo ot_get_option('frcourage_about');?></p>
			</div>
			<div class="col-md-6 col-sm-6 col-lg-3">
				<h1 class="title"><?php echo ot_get_option('new_business_title');?></h1>
				<p><?php echo ot_get_option('new_business_content');?></p>
				<p><?php echo ot_get_option('mobile');?></p>
				<p><?php echo ot_get_option('email');?></p>
			<a href="contact-us"><?php echo ot_get_option('contact_us_title');?></a>
				
			</div>
			<div class="col-md-6 col-sm-6 col-lg-3 mt-3">
				<h1 class="title"><?php echo ot_get_option('latest_post_title');?></h1>
				<ul class="blog">
				    
				   <?php
				   $post = array('post_type'=>'post','order'=>'ASC');
                     $post_query = new wp_query($post);
                    while ($post_query->have_posts()): $post_query->the_post();
                      $img_post = wp_get_attachment_url(get_post_thumbnail_id($result->ID));
                 ?>

					<li><a href="" class="d-flex flex-row align-items-start">
						<img src="<?php echo $img_post;?>" class="mr-2" />
						<div class="">
							<h1><?php the_title();?></h1>	
							<p>Posted by <?php the_author();?>	<?php the_time('d M') ?></p>
						</div>
					</a></li>
					<?php endwhile; wp_reset_query();?>
				</ul>

			</div>
			<div class="col-md-6 col-sm-6 col-lg-3 mt-3">
				<h1 class="title"><?php echo ot_get_option('subscribe_title');?></h1>
				<p><?php echo ot_get_option('subscribe_content');?></p>
				<div class="form-group">
					<?php echo do_shortcode('[mc4wp_form id="66"]');?>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
 <script src='https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js'></script>
<script src='https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js'></script>
<script  src="<?php bloginfo('template_url');?>/js/script.js"></script>
	<script>
		jQuery('.gallery_product').each(function() {
		var _sCurrClasses = jQuery(this).attr('class');
		jQuery(this).attr('class', _sCurrClasses.replace(/,/g, ' '));
		});
	</script>
	  <script type="text/javascript">
        $(document).ready(function(){

            $(".filter-button").click(function(){
                var value = $(this).attr('data-filter');
                
                if(value == "all")
                {
                    //$('.filter').removeClass('hidden');
                    $('.filter').show('1000');
                }
                else
                {
        //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
        //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".filter").not('.'+value).hide('3000');
                    $('.filter').filter('.'+value).show('3000');
                    
                }
            });
            
            if ($(".filter-button").classList.contains("active")) {
        $(this).removeClass("active");
        }
        else{
            $(this).addClass("active"); 
        }
        

        });
    </script>
 <script src="<?php bloginfo('template_url');?>/js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
              <script>
        $(document).ready(function() {
            $(".Play").click(function() {
                $(".PlayVideo").css("opacity", "1");
                $(".Play").css("display", "none");
                $(".Pause").css("display", "block");
            });
            $(".Pause").click(function() {
                $(".PlayVideo").css("opacity", "0");
                $(".Play").css("display", "block");
                $(".Pause").css("display", "none");
            });
        });
    </script>
<?php wp_footer(); ?>
</body>
</html>
