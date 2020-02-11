<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KS7GDPD');</script>
<!-- End Google Tag Manager -->
<meta name="google-site-verification" content="WCT0gpd1AOqZ72_lUlpjMXPLZppHy-9KRM8k1vhPbjw" />

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <title>
        <?php
            wp_title('|', 'right', true);
            bloginfo('title');
        ?>
    </title>
    <link href="<?php bloginfo('template_url');?>/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">
    <link rel="icon" href="<?php echo site_url();?>/wp-content/uploads/2019/09/cropped-Delmon_Logo_Favicon_512x512-32x32.jpg" sizes="32x32" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3eac6449b7.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KS7GDPD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header>
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-md-10 col-sm-10">
            <ul class="contact-detais d-flex">
              <li><i class="fas fa-phone-alt"></i><?php echo ot_get_option('mobile');?></li>
              <li><i class="far fa-envelope"></i><?php echo ot_get_option('email');?></li>
              <li><i class="fas fa-map-marker-alt"></i><?php echo ot_get_option('address');?></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <ul class="social d-flex justify-content-end">
              <li><a href="<?php echo ot_get_option('facebook');?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="<?php echo ot_get_option('linkedin');?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
				<li><a href="<?php echo ot_get_option('youtube');?>" target="_blank"><i class="fab fa-youtube"></i></a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navbar navbar-expand-lg p-0">
              <a class="navbar-brand" href="<?php bloginfo('url');?>"><img src="<?php echo ot_get_option('logo');?>"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
              </button>
            
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <?php 
                    $nav_menu = array( 
                        'menu' => 'Header-Menu',
                        'container' => false,
                        'menu_class' => 'dropdown-menu',
                        'echo' => true, 
                        'fallback_cb' => 'wp_page_menu', 
                        'items_wrap' => '<ul class="navbar-nav">%3$s</ul>', 
                        'depth' => 5, 
                        'walker' => new wp_bootstrap_navwalker() );
                    wp_nav_menu( $nav_menu);
                ?>
                <button onclick="location.href='<?php echo ot_get_option('request_info_btn_link');?>';"><?php echo ot_get_option('request_info_btn');?></button>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>