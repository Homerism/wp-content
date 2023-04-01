<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta name="viewport" content="width=device-width, initial-scale =1">
<meta charset="<?php bloginfo('charset'); ?>">
<?php wp_head() ?>
	<meta charset="utf-8">
	<title>Nexus Financial Institute</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
<!--Template 2075 Digital Team http://www.tooplate.com/view/2075-digital-team-->
	<link rel="stylesheet" href="<?php echo get_theme_file_uri().'/css/bootstrap.min.css' ?>">
	<link rel="stylesheet" href="<?php echo get_theme_file_uri().'/css/font-awesome.min.css' ?>">
	<link rel="stylesheet" href="<?php echo get_theme_file_uri().'/css/animate.min.css' ?>">
	<link rel="stylesheet" href="<?php echo get_theme_file_uri().'/css/et-line-font.css' ?>">
	<link rel="stylesheet" href="<?php echo get_theme_file_uri().'/css/nivo-lightbox.css' ?>">
	<link rel="stylesheet" href="<?php echo get_theme_file_uri().'/css/nivo_themes/default/default.css' ?>">
	<link rel="stylesheet" href="<?php echo get_theme_file_uri().'/css/style.css' ?>">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<!-- preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-circle">
       <div class="sk-circle1 sk-circle"></div>
       <div class="sk-circle2 sk-circle"></div>
       <div class="sk-circle3 sk-circle"></div>
       <div class="sk-circle4 sk-circle"></div>
       <div class="sk-circle5 sk-circle"></div>
       <div class="sk-circle6 sk-circle"></div>
       <div class="sk-circle7 sk-circle"></div>
       <div class="sk-circle8 sk-circle"></div>
       <div class="sk-circle9 sk-circle"></div>
       <div class="sk-circle10 sk-circle"></div>
       <div class="sk-circle11 sk-circle"></div>
       <div class="sk-circle12 sk-circle"></div>
    </div>
</div>
<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="<?php echo site_url('/') ?>" class="navbar-brand">Nexus Financial Institute</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo site_url('/') ?>" class="smoothScroll">HOME</a></li>
				<li><a href="<?php echo site_url('/about-us') ?>" class="smoothScroll">ABOUT</a></li>
				<li><a href="<?php echo site_url('/resources') ?>" class="smoothScroll">RESOURCES</a></li>
				<li><a href="<?php echo site_url('/events') ?>" class="smoothScroll">EVENTS</a></li>
				<li><a href="<?php echo site_url('/services') ?>" class="smoothScroll">SERVICES</a></li>
				<li><a href="<?php echo site_url('/members') ?>" class="smoothScroll">MEET THE TEAM</a></li>
				<li><a href="<?php echo site_url('/calculation') ?>" class="smoothScroll">CALCULATE FINANCES</a></li>
				<?php
				if(is_user_logged_in()){
					?>
					<li><a href="<?php echo wp_logout_url(); ?>" class="smoothScroll">LOGOUT</a></li>
				<?php }
				else{ ?>
				<li><a href="<?php echo esc_url(site_url('/wp-login.php')); ?>" class="smoothScroll">LOGIN</a></li>
				<li><a href="<?php echo esc_url(site_url('/wp-signup.php')); ?>" class="smoothScroll">SIGN UP</a></li>
				<?php }
				?>
			</ul>
		</div>
	</div>
</section>