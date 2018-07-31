<?php require_once(drupal_get_path('theme','nexuse').'/tpl/header.tpl.php');?>


<div id="page-heading" >
	<div class="wrap">
		<h1 id="page-title"><?php print drupal_get_title(); ?></h1>
	</div>
</div>

<div id="body">
	<?php 
		if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
			print render($tabs);
		endif;
		print $messages;
		unset($page['content']['system_main']['default_message']);
	?>
	<?php  if($page['right_sidebar']): /*Right Sidebar*/?>
		<div class="wrap content-page">
			<div class="big-column left">
	<?php endif; ?>
	<?php  
		/* ================================
	    * Content Section and Content 
		* =================================
		*/
	?>
	
	
	<?php  if($page['content']):?>
	<?php print render($page['content']); ?>
	<div class="cleared"></div>
	<?php endif; ?>
	<?php  if($page['content_section']): print render($page['content_section']); endif; ?>
	<?php  
		/* ================================
	    * End Content Section and Content 
		* =================================
		*/
	?>	
	<?php  if($page['right_sidebar']): /*Right Sidebar*/?>
			</div>
			<!-- End Big Column -->
			<div class="small-column right">
				<?php if($page['right_sidebar']): print render($page['right_sidebar']); endif;?>
			</div>
			<!-- End Small Column -->
			<div class="cleared"></div>
		</div>
	<?php endif; ?>
	
</div>
<?php require_once(drupal_get_path('theme','nexuse').'/tpl/footer.tpl.php'); ?>
