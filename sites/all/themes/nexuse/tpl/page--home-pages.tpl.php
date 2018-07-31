<?php require_once(drupal_get_path('theme','nexuse').'/tpl/header.tpl.php');?>

<div id="body">
	<?php 
		if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
			print render($tabs);
		endif;
		print $messages;
		unset($page['content']['system_main']['default_message']);
	?>
	<?php  if($page['content']):?>
	<?php print render($page['content']); ?>
	<div class="cleared"></div>
	<?php endif; ?>
	<?php  if($page['content_section']): print render($page['content_section']); endif; ?>
	
</div>
<?php require_once(drupal_get_path('theme','nexuse').'/tpl/footer.tpl.php'); ?>