<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<script src="//use.typekit.net/qsy1uie.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory').'/css/normalize.css'; ?>">
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory').'/style.css'; ?>">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory').'/js/randomColor.js'; ?>"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<did class="overlay"></div>
<header class="header">
	<div class="branding" style="background-image:url('<?php echo get_theme_mod('custom_logo_setting'); ?>');"></div>
	<span class="branding-detail">Beta</span>
</header>
<div id="container">
    <div id="content">
    	
