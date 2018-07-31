<?php require_once(drupal_get_path('theme','nexuse').'/tpl/header.tpl.php');?>
<?php 		print $messages;
			unset($page['content']['system_main']['default_message']);?>

<div id="body" class="content-page">
	<div class="wrap">
		<div class="full-column content">
			<?php  if($page['content']):?>
			<?php print render($page['content']) ?>
			<?php endif; ?>
			<?php  if($page['content_section']):?>
			<?php print render($page['content_section']) ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php require_once(drupal_get_path('theme','nexuse').'/tpl/footer.tpl.php'); ?>
