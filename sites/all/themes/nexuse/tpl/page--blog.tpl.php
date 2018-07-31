<?php require_once(drupal_get_path('theme','nexuse').'/tpl/header.tpl.php'); ?>
<?php

$blog_style = theme_get_setting('blog_style', 'nexuse');
if(empty($blog_style)) $blog_style = 'on';

		if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])):
			print render($tabs);
		endif;
		print $messages;
		unset($page['content']['system_main']['default_message']);
?>
<div class="cleared"></div>
<?php	
if(arg(0)=='node'){
	
	if($page['content']): 
		print render($page['content']); 
	endif;
?>
<div class="small-column right">
	<?php if($page['right_sidebar_blog']): print render($page['right_sidebar_blog']); endif;?>
</div>
<!-- End Small Column -->
<div class="cleared"></div>
</div>
</div>

<?php } else {
	
	if(!empty($blog_style) && $blog_style=='on'){ ?>
<div id="page-heading" >
	<div class="wrap">
		<h1 id="page-title">
			<?php print drupal_get_title(); ?>
		</h1>
	</div>
</div>
<!-- End Page Title -->
<div id="body" class="content-page">
	<div class="wrap">
		<div class="big-column left">
			<?php  if($page['content']): print render($page['content']); endif; ?>
			<!-- End Big Column -->
		</div>
		<div class="small-column right">
			<?php if($page['right_sidebar_blog']): print render($page['right_sidebar_blog']); endif;?>
		</div>
		<!-- End Small Column -->
		<div class="cleared"></div>
	</div>
</div>
<?php 
	} else { 
?>
<div id="page-heading" >
	<div class="wrap">
		<h1 id="page-title">
			<?php print drupal_get_title(); ?>
		</h1>
	</div>
</div>
<div id="body" class="content-page">
	
	<div class="wrap-column">
		<div class="full-column">
			<div id="single_blog" class="post-grid-container">
				<?php  if($page['content']): print render($page['content']); endif; ?>
			</div>
		</div>
	</div>
</div>
<?php
	}
?>
<?php
} 
?>
<?php require_once(drupal_get_path('theme','nexuse').'/tpl/footer.tpl.php'); ?>
