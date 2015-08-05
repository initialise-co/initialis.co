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
<script type="text/javascript">
	
	var c1 = randomColor({hue: 'blue',luminosity: 'bright',count: 1});
	var c2 = randomColor({hue: 'blue',luminosity: 'light',count: 1});

	$(document).on('ready', function(){
		$('#container').css('background', 'linear-gradient(60deg, '+ c1 + ', ' + c2 + ')');
	});

</script>
</head>
<body <?php body_class(); ?>>
<div class="overlay"></div>
<div id="container">
	<header class="header">
		<div class="branding" style="background-image:url('<?php echo get_theme_mod('custom_logo_setting'); ?>');"></div>
		<span class="branding-detail">Beta</span>
	</header>
	<div class="content">

    	
