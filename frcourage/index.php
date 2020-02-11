<?php
while(have_posts()): the_post();
 /*Template Name: Home Page */
  get_header(); 
  $img = wp_get_attachment_url(get_post_thumbnail_id($Client_query->ID));
  ?>
    
    <div class="main-slider">
    	<video width="100%" height="auto" autoplay loop muted>
    	<source src="<?php the_field("top_slide_video");?>" type="video/mp4">
    	</video>
    	<img src="<?php echo $img;?>">
    	<div class="bannderabt px-3">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-12">
                      <?php the_content();?>
                    </div>
                    	</div>
                    </div>
                    	</div>
                </div>
    <div class="about-text pb-5 px-3">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-lg-4 col-md-0 ">
    			</div>
    			<div class="col-lg-4 col-md-6 ">
    			    <?php the_field("about_us_content1");?> 
   			</div>
    			<div class="col-lg-4 col-md-6 ">
    				<?php the_field("about_us_content2");?> 
    			</div>
    		</div>
    	</div>
    </div>
    <div class="gallery-section px-3 py-5">
    	<div class="container-fluid">
    		<div class="row">
    		    
    			<div class="col-md-4">
    				<a href="">
    				<figure><img src="<?php the_field("row1_img");?>"></figure>
    				<div class="entry d-flex align-items-start justify-content-end flex-column">
    					<h3><?php the_field("view1");?></h3>
    					<h4><?php the_field("title1");?></h4>
    				</div>
    			</a>
    			</div>
    			
    			<div class="col-md-4">
    				<div class="box-img">
    					<a href="">
    				<figure><img src="<?php the_field("img_2");?>"></figure>
    				<div class="entry d-flex align-items-start justify-content-end flex-column">
    					<h3><?php the_field("view-2");?></h3>
    					<h4><?php the_field("title-2");?></h4>
    				</div>
    			</a>
    				</div>
    				<div class="box-img">
    					<a href="">
    				<figure><img src="<?php the_field("img-3");?>"></figure>
    				<div class="entry d-flex align-items-start justify-content-end flex-column">
    					<h3><?php the_field("view-3");?>/h3>
    					<h4><?php the_field("title-3");?></h4>
    				</div>
    			</a>
    				</div>
    			</div>
    			
    			
    			<div class="col-md-4">
    				<div class="box-img">
    					<a href="">
    				<figure><img src="<?php the_field("img-4");?>"></figure>
    				<div class="entry d-flex align-items-start justify-content-end flex-column">
    					<h3><?php the_field("view-4");?></h3>
    					<h4><?php the_field("title-4");?></h4>
    				</div>
    			</a>
    				</div>
    				<div class="box-img">
    					<a href="">
    				<figure><img src="<?php the_field("img-5");?>"></figure>
    				<div class="entry d-flex align-items-start justify-content-end flex-column">
    					<h3><?php the_field("view-5");?></h3>
    					<h4><?php the_field("title-5");?></h4>
    				</div>
    			</a>
    				</div>
    			</div>	
    			
    			
    			
    		</div>
    	</div>
    
    	</div>
    <div class="welcome">
    	<div class="container">
    		<div class="col-md-12">
    			<h3 class="text-center wow fadeInUp" data-wow-duration="1s"><?php the_field("welcome_title");?></h3>
    			<h1 class="text-center wow fadeInUp" data-wow-duration="1s"><?php the_field("welcome_title-1");?></h1>
                           <?php the_field("welcome_content");?>    
                           </div>
    	</div>
    	</div>
    	
    	
    	
    	
    	<div class="videoaa d-flex align-items-center justify-content-center" >
    <video width="100%" height="auto" autoplay loop muted>
    	<source src="<?php the_field("welcome_video");?>" type="video/mp4">
    	</video>
    
    </div>
    
 
    <div class="statgy-all px-3 pt-5">
    	<div class="container-fluid">
    		<div class="row pt-5 pb-5">
    			<div class="col-md-12">
    				<h2 class="d-table mx-auto text-ceter pt-3 mt-3 wow fadeInUp" data-wow-duration="1s"><?php the_field("our_process_title");?></h1>
    				<?php the_field("our_process_content");?>
    			</div>
    		</div>
    		
    		<?php
    		        $i=1;
    		        $our_process=array( 'post_type'=>'our_process','order'=>'ASC');
    		        $our_process_query = new wp_query($our_process);
    		        while ($our_process_query->have_posts()): $our_process_query->the_post();
    		         ?>

    		<div class="row border-bottom py-5 align-items-center" data-wow-duration="1s">
    			<div class="col-md-1 col-lg-1 col-sm-1 col-12">
    				<h3 class="wow fadeInUp" data-wow-duration="1s">0<?php echo $i;?>.</h3>
    			</div>
    			<div class="col-md-4 col-lg-4 col-sm-4 col-12">
    				<h1 class="fz56 wow fadeInUp" data-wow-duration="1s""><?php the_title();?>.</h1>
    			</div>
    			<div class="col-md-7 col-lg-7 col-sm-7 col-12">
    			<?php  the_content();?>
    			</div>
    		</div>
    		<?php $i++; endwhile; wp_reset_query();?>
    </div>
    </div>
    
    
    <div class="clinets">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<h3 class="text-center  wow fadeInUp" data-wow-duration="1s">OUR CLIENTS</h3>
    			</div>
    		</div>
    		<div class="row d-flex flex-wrap  mx-auto">
    		
    					<?php
    		        $our_clients=array( 'post_type'=>'our_clients','order'=>'ASC');
    		        $our_clients_query = new wp_query($our_clients);
    		        while ($our_clients_query->have_posts()): $our_clients_query->the_post();
    		         $img_our_clients= wp_get_attachment_url(get_post_thumbnail_id($result->ID)); ?>
    		
    			<div class="col-md-4 col-sm-6 col-6 d-flxe flex-fill align-items-center justify-content-center d-flxe ">
    				<figure class="my-3 flex-fill align-items-center justify-content-center d-flex ">
    				<img src="<?php echo $img_our_clients;?>">
    				</figure>
    			</div>
    			<?php endwhile; wp_reset_query();?>
    		
    		</div>
    		
    	</div>
    	</div>
    <div class="testimonials px-3">
    	<div class="container-fluid">
    		<div class="col-md-12">
    			
    			<div class="testimonial ">
    				<h3 class="wow fadeInUp" data-wow-duration="1s">WHAT CLIENTS SAY ABOUT US</h3>
    						<div id="demo" class="carousel slide flex-fill" data-ride="carousel">
    
      <div class="carousel-inner wow fadeInUp" data-wow-duration="1s">

      	       <?php
      	            $i=1;
    		        $clients_say=array( 'post_type'=>'clients_say','order'=>'ASC');
    		        $clients_say_query = new wp_query($clients_say);
    		        while ($clients_say_query->have_posts()): $clients_say_query->the_post();
    		         $img_clients_say= wp_get_attachment_url(get_post_thumbnail_id($result->ID)); ?>
        <div class="carousel-item <?php if($i == 1) { echo 'active';}?>">
          <?php the_content();?>
          <div class="meta-inner">
    <div class="author-infos-holder">
    <div class="author-img"><img src="<?php echo $img_clients_say;?>" alt=""></div>
    <div class="author-infos">
    <div class="author-name"><?php the_title();?></div>																						
    <div class="author-desc"><?php the_field("designation");?></div>
    </div>
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
    <div class="qu-how-wo">
    	<div class="container">
    		<div class="row d-flex flex-fill">
    		
    			<div class="col-md-6 d-flex flex-fill flex-column justify-content-center align-items-center p-0 ">
    				<div class="box d-flex flex-fill flex-column align-items-center justify-content-center wow fadeInUp" data-wow-duration="1s">
    				<h3><?php the_field("quality_box_question");?></h3>
    				<h1><?php the_field("quality_box_title");?></h1>
    			</div>
    			</div>
    			<div class="col-md-6 d-flex flex-fill flex-column justify-content-center align-items-center p-0">
    				<div class="box1 d-flex flex-fill flex-column align-items-center justify-content-center wow fadeInUp" data-wow-duration="1s">
    				<h3><?php the_field("quality_box_question-2");?></h3>
    				<h1><?php the_field("quality_box_title-2");?></h1>
    			</div>
    			</div>
    		</div>
    	</div>
    </div>
    <?php endwhile; get_footer(); ?>
