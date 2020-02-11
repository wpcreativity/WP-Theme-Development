<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title>
		<?php 
		wp_title('|', true, 'right');
		bloginfo('the_title');?>
	</title>
	<link href="<?php bloginfo('template_url');?>/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/pogo-slider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,500i,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
        <div class="TopArea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="Info">
	                        <ul>
		                        <li><span><i class="fa fa-mobile" aria-hidden="true"></i></span><?php echo ot_get_option('header_phone_number');?></li>
		                        <li><span><i class="fa fa-envelope" aria-hidden="true"></i></span> <?php echo ot_get_option('header_mail_id');?></li>
	                        </ul>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="Social">
                            <ul>
                                <li><a href="<?php echo ot_get_option('facebook');?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo ot_get_option('twitter');?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo ot_get_option('instagram');?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo ot_get_option('linkedin');?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo ot_get_option('pintrest');?>" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Menus" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php bloginfo('url');?>"><img src="<?php echo ot_get_option('header_logo');?>"></a>
                </div>

                <div class="collapse navbar-collapse" id="Menus">
                	<?php 
						$nav_menu = array(
							'theme_location'  =>'primary',
	                        'container'       => 'navbar',
	                        'menu_class'      => 'nav navbar-nav navbar-right'   
						);
						wp_nav_menu($nav_menu);
					?>
                </div>
            </div>
        </nav>
    </header>