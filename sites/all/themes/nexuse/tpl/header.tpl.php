<?php global $base_url; ?>

<div id="page"  >
<div id="header">
	<div class="wrap">
		<?php if($logo):?>
		<div class="site-logo">
			<h1><a class="logo-image" href="<?php print $base_url ?>" title="<?php print $site_name; ?>"><img class="logo-normal" alt="Nexuse"  src="<?php print $logo; ?>"/><img class="logo-retina" alt="Nexuse" src="<?php print $logo; ?>" /></a></h1>
		</div>
		<?php endif; ?>
		<div class="header-sidebar">
			<div id="text-2" class="header-widget widget_text content">
				<?php $header_message = theme_get_setting('header_top_right_message', 'nexuse'); ?>
				<?php if(!empty($header_message)) :?>
				<div class="textwidget"><?php print $header_message ?></div>
				<?php endif; ?>
			</div>
			<div class="cleared"></div>
		</div>
		<div class="cleared"></div>
	</div>
</div>
<!-- End Header -->
<div id="header-bar">
	<div class="wrap">
		<div id="toggle-menu-button"><i class="fa fa-align-justify"></i></div>
		<div id="main-menu-toggle">
			<div class="wrap">
			</div>
		</div>
		<?php  if($page['main_menu']):?>
		<div class="main-menu">
			<div class="menu-main-menu-container"><?php print render($page['main_menu']) ?></div>
			<div class="cleared"></div>
		</div>
		<?php  endif;?>
		<!-- End Main Menu -->
		<?php 
			$header_social_network = theme_get_setting('header_social_network', 'nexuse');
		?>
		<div class="header-social">
			<?php print $header_social_network; ?>
			<div class="cleared"></div>
		</div>
		<div class="cleared"></div>
		<div class="cleared"></div>
	</div>
</div>
