<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<style>
    #notfound {
	position: relative;
	height: 100vh;
	background: #f6f6f6
}
#notfound .notfound {
	position: absolute;
	left: 50%;
	top: 50%;
	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%)
}
.notfound {
	max-width: 767px;
	width: 100%;
	line-height: 1.4;
	padding: 110px 40px;
	text-align: center;
	background: #fff;
	-webkit-box-shadow: 0 15px 15px -10px rgba(0, 0, 0, .1);
	box-shadow: 0 15px 15px -10px rgba(0, 0, 0, .1)
}
.notfound .notfound-404 {
	position: relative;
	height: 180px
}
.notfound .notfound-404 h1 {
	font-family: roboto, sans-serif;
	position: absolute;
	left: 50%;
	top: 50%;
	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	font-size: 165px;
	font-weight: 700;
	margin: 0;
	color: #262626;
	text-transform: uppercase
}
.notfound .notfound-404 h1>span {
	color: #00b7ff
}
.notfound h2 {
	font-family: roboto, sans-serif;
	font-size: 22px;
	font-weight: 400;
	text-transform: uppercase;
	color: #151515;
	margin-top: 0;
	margin-bottom: 25px
}
</style>
<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h1>4<span>0</span>4</h1>
        </div>
    <h2>the page you requested could not found</h2>
    </div>
</div>

<?php get_footer(); ?>
