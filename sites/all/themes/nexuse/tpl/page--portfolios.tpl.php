<?php require_once(drupal_get_path('theme','nexuse').'/tpl/header.tpl.php'); ?>

<div id="page-heading" >
	<div class="wrap">
		<div id="page-heading-left">
			<h1 id="page-title"><span><?php print drupal_get_title(); ?></span></h1>
		</div>
	</div>
</div>
<?php 
		if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
			print render($tabs);
		endif;
		print $messages;
		unset($page['content']['system_main']['default_message']);
	?>
	<div class="cleared"></div>
<!-- End Page Title -->
<div id="body" class="content-page">
	
	<?php  if($page['content']):?>
	<div class="wrap">
		<div class="full-column"><?php print render($page['content']) ?></div>
	</div>
	<?php endif; ?>
	<?php  if($page['relation_portfolio']):?>
	<?php print render($page['relation_portfolio']) ?>
	<?php endif; ?>
</div>
<?php require_once(drupal_get_path('theme','nexuse').'/tpl/footer.tpl.php'); ?>

