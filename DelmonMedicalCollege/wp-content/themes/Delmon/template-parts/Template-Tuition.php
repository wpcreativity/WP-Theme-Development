<?php 
/* Template Name: Tuition Template */
while(have_posts()): the_post();
get_header();
?>
<style>
    .pop-data {
	text-align: center;
	margin-bottom: 30px;
}
.pop-data p {
	margin-bottom: 0;
	font-size: 18px;
	color: black;
	font-weight: 600;
}
.pop-data span {
	font-size: 20px;
	color: var(--primary-color);
	font-weight: 600;
}
.modal-content.pops-data h1 {
	display: block;
	border-bottom: 1px solid black;
	padding-bottom: 40px;
	font-size: 40px;
}
.pops-data .modal-dialog {
	max-width: 500px !important;
}
.modal-content br{
    display:none;
}
	.pops-data h1.text-center {
    border-bottom: 1px solid #eaeaea;
    padding-bottom: 18px;
    color: #8cc640;
    font-size: 26px;
    margin-bottom: 22px;
}


.pops-data .pop-data:last-child {
    border-bottom: 1px solid gray;
}
</style>

<div class="contact-title d-flex">
    <div class="container d-flex flex-fill">
        <div class="row d-flex flex-fill align-items-center justify-content-center flex-column">
            <?php the_content();?>
            <span class="line-bot"></span>
            <h1><?php the_title();?></h1>
        </div>
    </div>
</div>
      
<div class="contact-area our-vision pt-4 pb-3 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"><?php the_field("tuition_title");?></h1>
                <span class="line w-25 d-table mx-auto mt-3"></span>
                         <?php the_field("tuition_content");?>                
            </div>
        </div>
    </div>
</div>

<div class="story-content">
  <div class="container">
   <div class="row d-flex justify-content-center">
       <div class="btngrps mt-3 mb-5 d-flex flex-lg-row flex-md-row flex-column">
      <a href="<?php the_field("tuition_button_url");?>" class="btm2 mr-md-3 mr-0"><?php the_field("tuition_button_text");?></a>
      <a href="<?php the_field("tuition_button_2_url");?>" class="btm2 mr-md-3 mr-0 mt-md-0 mt-3"><?php the_field("tuition_button_2_text");?></a>
    </div>
   </div>
  </div>
</div>

<div class="program-cartified">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-sm-12 col-12">
				<div class="popups-bx d-flex flex-wrap">
				    <?php
				        $i = 1;
				        while(have_rows('fees_list')): the_row();
				    ?>
					<a class="d-flex justify-content-center align-items-center flex-fill" href="" data-target="#tuitionModal<?php echo $i; ?>" data-toggle="modal">
					    <?php 
					       $box_title =  get_sub_field('box_title');
					       echo wp_trim_words($box_title, 2 , '');
					   ?>
					 </a>
				<?php $i++; endwhile; wp_reset_query();?>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Modal For Tuition-->
<?php
    $j = 1;
    while(have_rows('fees_list')): the_row();
?>
    <div aria-hidden="true" aria-labelledby="tuitionModalTitle" class="modal fade pops-data" id="tuitionModal<?php echo $j; ?>" role="dialog" style="display: none;" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered down-pop" role="document">
			<div class="modal-content">
				<div class="modal-header border-0">
					<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
				</div>
				<div class="modal-body">
					<h1 class="text-center"><?php the_sub_field('box_title');?></a></h1>
				    <?php the_sub_field('box_content');?>
					<div class="border-top pt-3 mb-3">
					    <a class="btm2 d-table mx-auto" href="<?php bloginfo('url');?>/wp-content/uploads/2019/10/DMC-Catalog.pdf'" target="_blank">DOWNLOAD COURSE CATALOG</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $j++; endwhile; wp_reset_query();?>

<div class="contact-area our-vision pt-4 pb-5 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"><?php the_field('scholarship_title');?></h1>
                <span class="line w-25 d-table mx-auto mt-3"></span>
                <?php the_field('scholarship_content');?>
            </div>
        </div>
    </div>
</div>
    
<div class="laptoparea py-lg-0 py-5">
	<div class="container">
		<div class="row ">
			<div class="col-lg-6 col-md-12  align-items-center justify-content-center flex-column flex-wrap d-flex">
				<h1 class="text-lg-left text-center"><?php the_field('tuition_assistances_title');?> </h1>
				<span class="my-3"></span>
            <?php the_field('tuition_assistances_content');?>
            </div>
    		<div class="col-lg-6 col-md-12 col-sm-12 col-md-12">
			
    			<img src="<?php the_field('tuition_assistances_img');?>">
    		</div>
		</div>
	</div>
</div>

<div class="download-catlog">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12 col-sm-12 col-12 justify-content-between flex-lg-row flex-column d-flex align-items-center">
          <div class="catlog-text">
            <?php the_field('catalog_content');?>
          </div>
			<a href="<?php the_field('catalog_button_url');?>" target="_blank"  class="btm2"><?php the_field('catalog_button_text');?></a>
        </div>
      </div>
    </div>
</div>

<?php endwhile; get_footer(); ?>