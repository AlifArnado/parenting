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
					<a href="<?php esc_url(home_url()); ?>"> <img src=" <?php echo get_template_directory_uri(). '/images/logo.png'; ?>" class="img-responsive" /> </a>
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

	<nav class="main-menu">
	
	<?php 
		$icon_right      = array( 'rev-08.png','rev-09.png','rev-10.png',
							'rev-11.png','rev-12.png','rev-13.png',
							'rev-14.png','rev-15.png');

		$link_name_right = array( "Mom & Baby Health",
							"Maternity Shopping",
							"Fitness",
							"Early Learning",
							"Planning a Party",
							"Child Care",
							"Fun & Dining",
							"Baby Products and Nursery"
						);
	?>
	
		<ul>
			<?php for ($i = 1 ; $i < count($icon_right); $i++ ): ?>
			<li>
				<a href="#">
					<img src="<?php echo get_template_directory_uri(). '/images/web layout '.$icon_right[$i].''; ?>" class="menu">
					<span class="nav-text">
						<?php echo $link_name_right[$i]; ?>
					</span>
				</a>
			</li>
			<?php endfor ?>
		</ul>
	</nav>

	<?php 
		$icon_left      = array( 'rev-16.png','rev-17.png','rev-18.png',
							'rev-19.png');

		$link_name_left = array( "Top Moms",
							"Experts",
							"Events",
							"For Business"
						);
	?>

	<nav class="rightbar-menu">
		<ul class="menu-right">
			<?php for ($a = 1; $a < count($link_name_left); $a++): ?>
				<li>
					<a href="#">
						<span class="nav-text"><?php echo $link_name_left[$a]; ?></span>
						<img src="<?php echo get_template_directory_uri(). '/images/web layout '.$icon_left[$a].''; ?>" class="menu">
					</a>
				</li>
			<?php endfor ?>
		</ul>
	</nav>


	<!-- content -->
	<section id="news">
		<div class="row">
			<div class="col-sm-6 li-news">
				<?php if (have_posts()): ?>
					<?php while (have_posts()): the_post(); ?>
						<div class="news-box">
							<h1><?php the_title(); ?></h1>
							<div class="detail row">
								<div class="col-sm-4 col-xs-6 dates">
									<li><?php the_time(); ?></li>
								</div>
								<div class="col-sm-4 col-xs-6 author">
									by Mommy Lia
								</div>
								<div class="col-sm-4 col-xs-12 rating">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
						</div>
					<?php endwhile ?>
				<?php endif ?>
			</div>

			<div class="col-sm-6 grid-news">
				<?php if (have_posts()): ?>
					<?php while (have_posts()): the_post(); ?>

						<div class="news-box2">
							<div class="news-img">
								<img src="<?php echo get_template_directory_uri(). '/images/n1.JPG'; ?>" class="img-responsive" />
							</div>
							<div class="news-cont">
								<h1><?php the_title(); ?></h1>
								<p>
									<?php the_content(); ?>
									<a href="<?php the_permalink(); ?>"><span class="more">see more</span></a>
								</p>
							</div>
						</div>

					<?php endwhile ?>
				<?php endif ?>
			</div>
		</div>
	</section>
	



        



</body>
</html>