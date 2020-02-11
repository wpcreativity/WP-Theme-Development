<?php
while(have_posts()): the_post();
/*Template Name: Blog Page */
get_header(); 
$img = wp_get_attachment_url(get_post_thumbnail_id($Client_query->ID));
?>
<style>
.imageWrap, .videoWrap{
	display: none;
}
.wp-pagenavi {
    margin: 51px 0;
}
.wp-pagenavi a, .wp-pagenavi span {
    padding: 8px 15px;
    margin: 2px;
    color: var(--primary-color);
    background: transparent;
    border-radius: 0px;
    border: 1px solid #2c2c2c;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 0.5px;
}
.wp-pagenavi a:hover, .wp-pagenavi span.current {
    background: var(--primary-color);
    color: #fff;
    border: 1px solid transparent;
}
</style>
<div class="title-wraper contact-titlewraper d-flex flex-column justify-content-center align-items-center" style="background-image:url(<?php echo $img;?>);">
	<h3 class="text-center header-overlay"><?php  the_title();?></h3>
	<?php the_content();?>
</div>

<div class="blog-area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="grid">
					<div class="grid-sizer"></div>
                    <?php
                        $arys = array(
                                'post_type'=>'our_blog',
                                'order'=>'ASC',
                                'posts_per_page' => 6,
                                'paged' => get_query_var('paged')
                                );
                        $arysQuery = new wp_query($arys);
                        if($arysQuery->have_posts()):
                            while ($arysQuery->have_posts()):
                            $arysQuery->the_post();
                    ?>
					<div class="grid-item" id="<?php the_id(); ?>">
						<div class="blog-content <?php the_field("class_options_blog_content");?>">
							<?php the_field('features_image__video');?>
							<div class="inner-content">
								<div class="blog-header d-flex flex-column">
									<a class="date d-flex flex-row" href="#">
									    <span><?php the_time('F j, Y'); ?></span>
									    <span><?php echo get_comments_number($post->ID); ?> COMMENTS</span></a>
									<h1><a href=""><?php the_title();?></a></h1>
								</div>                                                   
								<div class="blog-content">
								    <?php the_content();?>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; endif; wp_reset_query();?>
				</div>
			</div>
		</div>
		<div class="row">
		    <div class="col-md-12">
    		    <div class="customPagination text-center">
    		        <?php wp_pagenavi(array( 'query' => $arysQuery )); ?>
    		    </div>
		    </div>
		</div>
	</div>
</div>

	

 <?php endwhile; get_footer(); ?>