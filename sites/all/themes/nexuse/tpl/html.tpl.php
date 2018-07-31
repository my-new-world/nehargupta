<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html lang="<?php print $language->language; ?>">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?php print $head_title; ?></title>
<?php print $styles; ?><?php print $head; ?>
<?php
			//Tracking code
			$tracking_code = theme_get_setting('general_setting_tracking_code', 'nexuse');
			print $tracking_code;
			//Custom css
			$custom_css = theme_get_setting('custom_css', 'nexuse');
			if(!empty($custom_css)):
		?>
		<style type="text/css" media="all">
		<?php print $custom_css;?>
		</style>
		<?php
			endif;
		?>
</head>
<body class="home page page-template-default <?php print $classes;?>" <?php print $attributes;?>>
<div id="background">
	<div id="skip-link">
			<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
	</div>
	<div id="back_top"><i class="fa fa-angle-up"></i></div>
	
		<?php print $page_top; ?><?php print $page; ?><?php print $page_bottom; ?>
	
</div>
<?php print $scripts; ?>
</body>
</html>