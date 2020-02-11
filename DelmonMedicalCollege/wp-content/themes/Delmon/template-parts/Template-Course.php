<?php
while(have_posts()): the_post();
/* Template Name: Course */
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
	
	<div class="download-catlog">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 justify-content-between d-flex align-items-start catlog-d">
					<div class="catlog-text">
						<?php the_field('catalog_content');?>
					</div>
					<a href="<?php the_field('catalog_button_url');?>" target="_blank" class="btm2"><?php the_field('catalog_button_text');?></a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="curseprogram">
		<div class="curse-title">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10">
					    <?php the_field('madtp_content');?>
					</div>
				</div>
			</div>
		</div>
		
	<div class="curseboyd">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<h1><?php the_field('madtp_title');?></h1>
					<div id="accordion">
					    <?php
                            $i=1;
                            $ary=array(
                                    'post_type'=>'course_calendar',
                                    'order'=>'DESC',
                                    'category_name'=>'Medical Assisting Diploma Training Program'
                                );
                            $ary_query = new wp_query($ary);
                            while ($ary_query->have_posts()): $ary_query->the_post(); 
                        ?>
						<div class="card" id="post-<?php the_ID(); ?>">
							<div aria-controls="collapse<?php echo $i; ?>" aria-expanded="false" class="card-header mb-0" data-target="#collapse<?php echo $i; ?>" data-toggle="collapse" id="heading<?php echo $i; ?>">
								<?php the_title();?>
								<span><i class="fas fa-chevron-right float-right pl-3"></i></span>
							</div>
							<div aria-labelledby="heading<?php echo $i; ?>" class="collapse" data-parent="#accordion" id="collapse<?php echo $i; ?>">
								<div class="card-body">
								    <?php the_content(); ?>
								</div>
								<div class="card-footer">
									<h3><?php the_field('course_calendar_title');?></h3>
									<div class="links">
									    <?php
									        $x = 1;
									        while(have_rows('course_calendar_button')): the_row(); ;?>
										    <a href="" class="<?php the_sub_field('css_class');?>" data-target="#exampleModalCenter<?php echo $x; ?>" data-toggle="modal"><?php the_sub_field('button_text');?></a>
										<?php $x++; endwhile; wp_reset_query();?> 
									</div>
								</div>
							</div>
						</div>
						<?php $i++; endwhile; wp_reset_query();?> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="curseprogram">
		<div class="curse-title">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10">
					    <?php the_field('dttp_content');?>
					</div>
				</div>
			</div>
		</div>
		<div class="curseboyd">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10">
						<h1><?php the_field('dttp_title');?></h1>
						<div id="accordion">
					    <?php
                            $j=1;
                            $ary=array(
                                    'post_type'=>'course_calendar',
                                    'order'=>'asc',
                                    'category_name'=>'dialysis-tecnologist-training-program'
                                );
                            $ary_query = new wp_query($ary);
                            while ($ary_query->have_posts()): $ary_query->the_post(); 
                        ?>
						<div class="card" id="post-<?php the_ID(); ?>">
							<div aria-controls="collapse0<?php echo $j; ?>" aria-expanded="false" class="card-header mb-0" data-target="#collapse0<?php echo $j; ?>" data-toggle="collapse" id="heading0<?php echo $j; ?>">
								<?php the_title();?>
								<span><i class="fas fa-chevron-right float-right pl-3"></i></span>
							</div>
							<div aria-labelledby="heading0<?php echo $j; ?>" class="collapse" data-parent="#accordion" id="collapse0<?php echo $j; ?>">
								<div class="card-body">
								    <?php the_content(); ?>
								</div>
								<div class="card-footer">
									<h3><?php the_field('course_calendar_title');?></h3>
									<div class="links">
									    <?php
									        $y = 1;
									        while(have_rows('course_calendar_button')): the_row(); ;?>
										    <a href="" class="<?php the_sub_field('css_class');?>" data-target="#exampleModalCenter2<?php echo $y; ?>" data-toggle="modal"><?php the_sub_field('button_text');?></a>
										<?php $y++; endwhile; wp_reset_query();?> 
									</div>
								</div>
							</div>
						</div>
						<?php $j++; endwhile; wp_reset_query();?> 
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="see-dalmomn">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php the_field('cta_content');?>
					<div class="btngrp d-flex flex-row justify-content-center">
						<a href="<?php the_field('cta_button_1_url');?>"><?php the_field('cta_button_1_text');?></a>
						<a href="<?php the_field('cta_button_2_url');?>"><?php the_field('cta_button_2_text');?></a>
					</div>
				</div>
			</div>
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


<!--Modal For Medical Assisting Diploma Training Program (Madtp)-->
    <?php
        $m=1;
        $modelary = array(
                'post_type'=>'course_calendar',
                'category_name'=>'Medical Assisting Diploma Training Program'
            );
        $model_query = new wp_query($modelary);
        while ($model_query->have_posts()): $model_query->the_post();
    ?>
    
	 <?php
        $l = 1;
        while(have_rows('course_calendar_button')): the_row(); ;?>
	
    	<div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="exampleModalCenter<?php echo $l; ?>" role="dialog" tabindex="-1">
    		<div class="modal-dialog modal-dialog-centered down-pop" role="document">
    			<div class="modal-content">
    				<div class="modal-header border-0">
    					<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
    				</div>
    				<div class="modal-body">
    					<h3 class="text-center"><?php the_sub_field('button_text');?></h3>
    					<?php the_sub_field('popup-content');?>
    					<button class="btm2 d-table mx-auto" onclick="location.href='<?php bloginfo('url');?>/wp-content/uploads/2019/10/DMC-Catalog.pdf';">DOWNLOAD COURSE CATALOG</button>
    				</div>
    			</div>
    		</div>
    	</div>
	<?php $l++; endwhile; wp_reset_query();?> 
	<?php $m++; endwhile; wp_reset_query();?>
	
	
	
<!--Modal For Dialysis Tecnologist Training Program (Dttp)-->
    <?php
        $n=1;
        $modelary = array(
                'post_type'=>'course_calendar',
                'category_name'=>'dialysis-tecnologist-training-program'
            );
        $model_query = new wp_query($modelary);
        while ($model_query->have_posts()): $model_query->the_post(); 
    ?>
    
	 <?php
        $o = 1;
        while(have_rows('course_calendar_button')): the_row(); ;?>
	
    	<div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="exampleModalCenter2<?php echo $o; ?>" role="dialog" tabindex="-1">
    		<div class="modal-dialog modal-dialog-centered down-pop" role="document">
    			<div class="modal-content">
    				<div class="modal-header border-0">
    					<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
    				</div>
    				<div class="modal-body">
    					<h3 class="text-center"><?php the_sub_field('button_text');?></h3>
    					<?php the_sub_field('popup-content');?>
    					<button class="btm2 d-table mx-auto">DOWNLOAD COURSE CATALOG</button>
    				</div>
    			</div>
    		</div>
    	</div>
	<?php $o++; endwhile; wp_reset_query();?> 
	<?php $n++; endwhile; wp_reset_query();?> 

<?php endwhile; get_footer();?>