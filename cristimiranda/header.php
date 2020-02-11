<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<title>
	    <?php
	        bloginfo('title');
	    ?>
	</title>
	
    <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/css/helper.css">
    <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/css/owl.theme.default.min.css">
	<link rel="icon" type="image/png" href="http://cristi-miranda.com/wp-content/uploads/2019/07/favicon-32x32.png" sizes="32x32">
    <script src="https://kit.fontawesome.com/3eac6449b7.js"></script>
    <style>
    .progress .progress-bar {
        -webkit-animation: progress-bar-stripes 0.5s linear infinite;
        -o-animation: progress-bar-stripes 0.5s linear infinite;
        animation: progress-bar-stripes 0.5s linear infinite;
    }
    .progress {
        background-color: #ffc00375;
    }
    .strip-modal .modal-body:before {
    content: " ";
    position: absolute;
    left: 0;
    TOP: 0;
    WIDTH: 100%;
    HEIGHT: 100%;
    BACKGROUND: #000000c4;
}
.wpcf7-response-output.wpcf7-display-none.wpcf7-validation-errors {
    display: none !important;
}
div.wpcf7-mail-sent-ok {
    border: 2px solid #398f14;
    display: none !important;
}
span.ajax-loader {
    display: none !important;
}
.asp_product_item_amount_input_container {
WIDTH: 100%;
display: flex;
flex-direction: column;
}

.asp_product_item_amount_input_container input {
width: 100%;
order: 2;
background: transparent;
border: 1px solid white;
height: 45px;
padding: 10px;
margin-bottom: 15px;
margin-top: 10px;
color:white !important;
}

.asp_product_item_amount_input_container .asp_product_item_amount_currency_label {
order: 1;
width: 100%;
padding: 0 !important;
color: white;
font-size: 21px;
}
#error_explanation_05d3ed8162427d
{
order:3;
font-size:14px;
}
.asp_product_item_amount_input_container input::placeholder {
color: white;
letter-spacing: 0.5px;
font-size: 16px;
}
span#error_explanation_05d3ed90a4fa83 {
    order: 3;
    color: white;
    position: relative;
}

.stripe-button-el span {
background: none !important;
box-shadow: unset !important;
background-image: none !important;
text-shadow: unset !important;
}

.stripe-button-el {
display: table !important;
margin: 20px auto !important;
background-image: unset;
background: unset;
border-radius: 0 !important;
}

.asp_product_buy_btn_container {
width: 100%;
}

.stripe-button-el {
padding: 7px 32px !important;
letter-spacing: 0.8px !important;;
font-size: 17px !important;;
border: 1px solid yellow !important;
background: transparent !important;;
height: auto;
border-radius: 0 !important;
display: inline-block;
vertical-align: middle;
-webkit-transform: perspective(1px) translateZ(0);
transform: perspective(1px) translateZ(0);
position: relative;
-webkit-transition-property: color;
transition-property: color;
-webkit-transition-duration: 0.3s;
transition-duration: 0.3s;
background: var(--main-color);
font-size: var(--v16);
font-weight: var(--v900);
color: white;
letter-spacing: 0.3px;
}

.stripe-button-el:before {
content: "";
position: absolute;
z-index: -1;
top: 0;
bottom: 0;
left: 0;
right: 0;
background: var(--secondy-color);
-webkit-transform: scaleY(0);
transform: scaleY(0);
-webkit-transform-origin: 50%;
transform-origin: 50%;
-webkit-transition-property: transform;
transition-property: transform;
-webkit-transition-duration: 0.3s;
transition-duration: 0.3s;
-webkit-transition-timing-function: ease-out;
transition-timing-function: ease-out;
}

.stripe-button-el:hover:before {
webkit-transform: scaleY(1);
transform: scaleY(1);
}
.stripe-button-el:hover span
{
color:black ;
}
span#error_explanation_05d3ed5c7632dc {
order: 3;
color: white;
font-size: 12px;
}
.strip-modal .modal-body form
{
position:relative
}
.asp_product_item_amount_input_container input:focus {
    outline: 0;
}
span#error_explanation_05d3ed90a4fa83 {
    order: 3;
    color: white;
    position: relative;
}
.btn-def:focus, input:focus {
    outline: unset !important;
}
.chose-method ul li img {
    max-width: 100%;
    height: auto;
}

.chose-method ul li {
    flex: 0 0 110px;
    max-width: 110px;
    overflow: hidden;
        padding: 0 10px;
}

input[type="image"] {
    max-width: 100%;
}
    </style>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header id="myHeader" class="d-flex justify-content-center flex-column">
        <div class="top-bar TopArea">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-10 col-12">
                        <div class="hover-on-off">
                            <div id="demos">
                                <div class="owl-carousel" id="Product">
                                    <?php
                                		$menu_gallery = array(
                                		    'post_type'=>'menu_gallery',
                                		    'order'=>'ASC'
                                		    );
                                		$mg_query= new WP_Query($menu_gallery);
                                		while($mg_query->have_posts()): $mg_query->the_post();
                                		$menu_image = wp_get_attachment_url(get_post_thumbnail_id($result->ID));
                                	?>
                                    <div class="item">
                                        <figure><img src="<?php echo $menu_image; ?>" alt="<?php the_title();?>"></figure>
                                    </div>
                                    <?php endwhile; wp_reset_query(); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-2 col-12">
                        <div class="ModalLink">
                            <a href="JavaScript:Void(0);" class="btn-def"  data-toggle="modal" data-target="#Loginmodal"> Login </a>
                            <a href="JavaScript:Void(0);" class="btn-def" data-toggle="modal" data-target="#sing-up-modal"> Signup </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="elm">
            
                <i class="fas fa-angle-double-down"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-fixed-top p-0">
                        <a class="navbar-brand logo" href="<?php echo get_home_url();?>">
                            <img src="<?php echo ot_get_option('header_logo'); ?>" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <?php
                              $nav_menu = array(
                                    'theme_location'  =>'primary',
                                    'menu'            =>'main-menu',
                                    'container'       => 'false',
                                    'menu_class'      => '',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'items_wrap'      => '<ul class="navbar-nav">%3$s</ul>',
                                    'depth' => 5,
                                    'walker' => new wp_bootstrap_navwalker()
                              );
                              wp_nav_menu($nav_menu);
                            ?> 
                           
                            <div class="hed-socil">
                                <ul class="p-0 m-0 list-none d-flex">
                                    <li><a href="<?php echo ot_get_option('facebook'); ?>" target="_blank"><i
                          class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="<?php echo ot_get_option('instagram'); ?>" target="_blank"><i class="fab fa-instagram"
                          aria-hidden="true"></i></a></li>
                                    <li><a href="<?php echo ot_get_option('twitter'); ?>" target="_blank"><i class="fab fa-twitter"
                          aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </header>