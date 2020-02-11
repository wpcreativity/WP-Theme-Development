<?php
while(have_posts()): the_post();
/*Template Name: Heart & Soul */
get_header(); 
$img = wp_get_attachment_url(get_post_thumbnail_id($Client_query->ID));
?>
<div class="title-wraper d-flex flex-column justify-content-center align-items-center" style="background-image: url(<?php echo $img;?>);">
	<?php the_content();?>
</div>
	<div class="servicesall">
		<div class="container-fluid">
			<div class="row d-flex ">
				<div class="col-sm-6 col-md-6 col-lg-4 flex-fill d-flex p-0">
					<div class="innerbox perfectweb d-flx flex-fill wow fadeInUp" data-wow-duration="1s">
						<h3><?php the_field("perfect_website_title");?></h3>
						<h1><?php the_field("perfect_website_subtitle");?></h1>
						<?php the_field("perfect_website_content");?>
					</div>

				</div>	
				<div class=" col-sm-6 col-md-6 col-lg-4 d-flex flex-fill p-0">			
					<div class="innerbox imptyimg d-flex flex-fill flex-column align-items-center  wow fadeInUp" data-wow-duration="1s" style="background: url(<?php the_field("middle_img");?>);">
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 d-flex flex-fill p-0">
					<div class="innerbox product-des  wow fadeInUp" data-wow-duration="1s">
						
						<h3><?php the_field("product_design_title");?></h3>
                                <?php the_field("product_design_content");?>
                                <a href="<?php the_field("discover_more_link");?>"><?php the_field("discover_more_text");?></a>
					</div>
				</div>
				</div>
				<div class="row d-flex ">
				<div class="col-sm-6 col-md-6 col-lg-4 flex-fill d-flex p-0 justify-content-center align-items-center  wow fadeInUp" data-wow-duration="1s">
					<div class="innerbox blankimg2 d-flex flex-fill align-items-center justify-content-center" style="background: url(<?php the_field("view_poetfolio_bg__img");?>);">
						<a href="<?php the_field("view_portfolio_link");?>"><span  class="under-line-text"><?php the_field("view_portfolio_text");?></span> <i class="fas fa-long-arrow-alt-right"></i></a>
					</div>

				</div>	
				<div class="col-sm-6 col-md-6 col-lg-4 d-flex flex-fill p-0">			
					<div class="innerbox projects d-flex flex-fill flex-column align-items-center  wow fadeInUp" data-wow-duration="1s">
						<h1 class="timer count-title count-number" data-to="136" data-speed="1500"></h1>
						<h3><?php the_field("project_title");?></h3>
						<?php the_field("project_content");?>
					</div>
				</div>
				<div class=" col-sm-12 col-md-12 col-lg-4 d-flex flex-fill p-0">
					<div class="testimonial innerbox d-flex flex-fill flex-column align-items-cente  wow fadeInUp" data-wow-duration="1s" style="background: #fed841 ;">
						<div id="demo" class="carousel slide flex-fill" data-ride="carousel">

  <div class="carousel-inner">
      <?php  $i=1;
             $testimonial=array( 'post_type'=>'testimonial','order'=>'ASC');
             $testimonial_query = new wp_query($testimonial);
             while ($testimonial_query->have_posts()): $testimonial_query->the_post();
             $img_testimonial = wp_get_attachment_url(get_post_thumbnail_id($result->ID)); ?>
                <div class="carousel-item <?php if($i == 1) { echo 'active';}?>">
                    <?php the_content();?>
                  <div class="meta-inner">
            <div class="author-infos-holder">
            <div class="author-img"><img src="<?php echo $img_testimonial;?>" alt=""></div>
            <div class="author-infos">
            <div class="author-name"><?php the_title();?></div>																						
            <div class="author-desc"><?php the_excerpt();?></div>																					</div>
            </div>
            </div>
                </div>
        <?php $i++; endwhile; wp_reset_query();?>
          
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
                  </div>
					</div>
				</div>
				</div>
			</div>
		</div>








  <section>
        <div class="BrandsArea px-3">
            <div class="container-fluid">
                <div class="row ">
<div  class="col-md-12 flex-column">
                    <div class="BrandTab" id="myDIV">
                        <a class="filter-button active" data-filter="All">All</a>
                        <a class="filter-button" data-filter="Branding">Branding</a>
                        <a class="filter-button" data-filter="Designing">Designing</a>
                        <a class="filter-button" data-filter="Illustration">Illustration</a>
                        <a class="filter-button" data-filter="Interior">Interior</a>
                    </div>

                    <div class="BrandBody">

                        <ul>
                            
                            <?php
                              $portfolio = array('post_type'=>'portfolio','order'=>'ASC','showposts'=>'50');
                              $portfolio_query = new wp_query($portfolio);
                              while ($portfolio_query->have_posts()): $portfolio_query->the_post();
                              $img_portfolio = wp_get_attachment_url(get_post_thumbnail_id($result->ID));
                              ?> 
                            
                            <li class="gallery_product filter  <?php the_field("filter");?>">
                               
  		                 	<div class="portbox position-relative">
  				          <a href="#" class="position-relative">
  				          	<img src="<?php echo $img_portfolio;?>">
  					        <div class="hover-box d-flex flex-column justify-content-center align-items-center">
  					     	<h3>Branding, Web-Sites</h3>
  					      	<h1><?php the_title();?></h1>

                      					</div>
                      				</a>
                      			</div>
                      	
                            </li>                            
                         <?php endwhile; wp_reset_query();?>
                      
                           
                            <div class="clear"></div>
                        </ul>


                        

                        <div class="clear"></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
