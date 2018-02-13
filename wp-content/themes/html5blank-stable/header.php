<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
       

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="icon" href="http://emilyharrismusic.co.uk/wp-content/uploads/2016/11/Emily-Icon-120x120.png" sizes="32x32" />
<link rel="icon" href="http://emilyharrismusic.co.uk/wp-content/uploads/2016/11/Emily-Icon-250x250.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="http://emilyharrismusic.co.uk/wp-content/uploads/2016/11/Emily-Icon-250x250.png" />
<meta name="msapplication-TileImage" content="http://emilyharrismusic.co.uk/wp-content/uploads/2016/11/Emily-Icon.png" />
		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear displaynone" role="banner">

					
			</header>
			<!-- /header -->
