<?php require_once(drupal_get_path('theme','nexuse').'/tpl/header.tpl.php');?>

<?php  if($page['content']):?>
<?php print render($page['page_heading']) ?>
<?php endif; ?>

<div id="body">

	<?php  if($page['right_sidebar_blog']): /*Right Sidebar*/?>
		<div class="wrap content-page">
			<div class="big-column left">
	<?php endif; ?>
	
	<?php 
		if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
			print render($tabs);
		endif;
		print $messages;
		unset($page['content']['system_main']['default_message']);
	?>
	
	<?php  if($page['content']): print render($page['content']); endif; ?>
	<?php  if($page['content_section']): print render($page['content_section']); endif; ?>

	<?php  if($page['right_sidebar_blog']): /*Right Sidebar*/?>
			</div>
			<!-- End Big Column -->
			<div class="small-column right">
				<?php if($page['right_sidebar_blog']): print render($page['right_sidebar_blog']); endif;?>
			</div>
			<!-- End Small Column -->
			<div class="cleared"></div>
		</div>
	<?php endif; ?>
	
</div>
<?php require_once(drupal_get_path('theme','nexuse').'/tpl/footer.tpl.php'); ?>
