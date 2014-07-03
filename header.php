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
			<li><a href="#add-link">People</a></li>
			<li><a href="#add-link">Projects</a></li>
			<li><a href="#add-link">Office</a></li>
			<li><a href="#add-link" class="last">Press</a></li>
		</ul>
	</nav>
</header>