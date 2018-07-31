<?php require_once(drupal_get_path('theme','nexuse').'/tpl/header.tpl.php'); ?>

<div id="page-heading" >
	<div class="wrap">
		<div id="page-heading-left">
			<h1 id="page-title"><span><?php print drupal_get_title(); ?></span></h1>
		</div>
	</div>
</div>
<!-- End Page Title -->
<div id="body" class="content-page">
	<?php
		print $messages;
        unset($page['content']['system_main']['default_message']);
    ?>
	<?php  if($page['content']):?>
	<div class="wrap-column">
		<div class="full-column">
			<div id="tax_content_page" class="post-grid-container">
				<?php print render($page['content']) ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
</div>
<?php require_once(drupal_get_path('theme','nexuse').'/tpl/footer.tpl.php'); ?>