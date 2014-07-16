<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <?php wp_head(); ?>
</head>
<body>
<header class="main-header">
	<div class="l-logo-con">
		<a href="<?php echo get_site_url(); ?>" alt="ParcOffice"><img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" width="134px" height="22px" class="main-logo"></a>
	</div>
	<nav class="main-nav">
		<ul class="l-horizontal-nav">
			<li><a href="<?php echo get_page_link(28); ?>">People</a></li>
			<li class="main-nav-dd-btn">
				<a href="<?php echo get_page_link(18); ?>">Projects</a>
				<div class="main-nav-dd-con">
					<ul class="main-nav-dd">
						<li><a href="<?php echo get_page_link(20); ?>">Objects</a></li>
						<li><a href="<?php echo get_page_link(22); ?>">Science</a></li>
						<li><a href="<?php echo get_page_link(24); ?>">Spaces</a></li>
						<li><a href="<?php echo get_page_link(26); ?>">Knowledge</a></li>
					</ul>
				</div>
			</li>
			<li><a href="<?php echo get_page_link(32); ?>">Office</a></li>
			<li class="last"><a href="<?php echo get_page_link(30); ?>">Press</a></li>
		</ul>
	</nav>
</header>