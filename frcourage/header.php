<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	  <title></title>
    <link href="<?php bloginfo('template_url');?>/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url');?>/css/responsive-css.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url');?>/css/animate.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3eac6449b7.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.js"></script>
 
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
       	<style>
	.navbar-brand
	{
		color: white;
	}
	ul.navbar-nav> li> a
	{
		color: white;
	}
	

.BrandsArea ul {
    display: flex;
    flex-wrap: wrap;
}

.BrandsArea ul li {
    width: calc(100% / 2);
    padding: 10px;
    overflow: hidden;
}
.BrandTab a {
    color: #aaa !important;
    font-size: 12px;
    font-family: 'Varela Round', sans-serif;
    letter-spacing: .13em;
    font-weight: 400;
    text-transform: uppercase;
    border: none !important;
    margin: 0 13px 20px;
    padding: 0.5rem 1rem;
    cursor:pointer;
}

div#myDIV {
    text-align: center;
    margin-bottom: 60px;
}

.BrandsArea {
    padding-top: 60px;
}
.BrandTab a.active, .BrandTab a:hover {
    
        color:var(--primary-color) !important;
    }
    .videoplay {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.PlayVideo {
    position: relative;
}
</style>
<header class="px-3">
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-12">
    			<nav class="navbar navbar-expand-lg p-0">
                  <a class="navbar-brand" href="<?php bloginfo('url');?>">FRCOURAGE</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                   <i class="fas fa-align-justify" style="font-size:30px;color:#fff"></i>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                      
                       <?php
                            $nav_menu = array(
                                'menu' => 'Header-Menu',
                                'theme_location'    =>'primary',
                                'menu_class'      => 'navbar-nav'
                            );
                            wp_nav_menu( $nav_menu);
                        ?>
                    
                  </div>
                </nav>
    		</div>
    	</div>
    </div>
  </header>