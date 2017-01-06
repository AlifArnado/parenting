<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<title><?php wp_title(); ?></title>
	
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
 
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<header>
		<div class="row menu-topbar">
			<!-- menu desktop -->
			<div class="col-sm-4 col-md-4 leftbar">
				<span><a href="">HELP OTHER PARENTS </a></span>
				<span><a href="">GET APP</a></span>
				<span class="search"><i class="fa fa-search" aria-hidden="true"></i></span>
			</div>
			<div class="col-xs-3 leftbarmobile hidden-md hidden-lg">
				<span class="search"><i class="fa fa-bars" aria-hidden="true"></i></span>
			</div>
			
			<div class="col-sm-4 col-xs-6 col-md-4 midbar">
				<!-- <img src="images/logo.png" class="img-responsive" /> -->
			</div>
			
			<div class="col-sm-4 col-md-4 rightbar">
				<span><a href="">SIGN UP</a></span>
				<div class="divi"></div>
				<span><a href="">LOG IN</a></span>
			</div>
			
			<div class="col-xs-3 rightbarmobile hidden-md hidden-lg">
				<span class="search"><i class="fa fa-search" aria-hidden="true"></i></span>
			</div>
			
			<!-- menu mobile -->
			<div class="mob-menu-topbar">
				<ul>
					<li><a href="">HELP OTHER PARENTS</a></li>
					<li><a href="">GET APP</a></li>
					<li><a href="">SIGN UP</a></li>
					<li><a href="">LOG IN</a></li>
				</ul>
			</div>
		</div>
		<!-- kolom pencarian mobile -->
		<div class="search-col">
			<form class="" action="#" method="post">
				<div class="form-group searchs">
					<input type="text" class="form-control" id="search">
					<button type="submit" class="btn btn-default">Go!</button>
				</div>
			</form>
		</div>
		<div class="slider">
			<!-- <div id="owl-demo" class="owl-carousel owl-theme">
				<div class="item"><img src="images/head-slider.JPG" alt=""></div>
				<div class="item"><img src="images/head-slider.JPG" alt=""></div>
				<div class="item"><img src="images/head-slider.JPG" alt=""></div>
			</div> -->
			
			<!--  <div class="navigasi">
				<a class="left carousel-control"><span><</span></a>
				<a class="right carousel-control"><span>></span></a>
			</div> -->
		</div>
	</header>