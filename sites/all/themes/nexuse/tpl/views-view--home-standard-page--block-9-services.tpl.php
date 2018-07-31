<?php print render($title_prefix); ?>
<?php if ($rows): ?>

<div class="wrap-column">
	<div class="content-column1  column-last">
		<div class="widget-entry"><?php print $rows; ?>

			<?php if ($attachment_before): ?>
			<?php print $attachment_before; ?>
			<?php endif; ?>

			<?php if ($attachment_after): ?>
			<?php print $attachment_after; ?>
			<?php endif; ?>

		</div>
		<!-- end widget entry -->
	</div>
	<div class="cleared"></div>
</div>
<!-- end wrap-column no-wrap -->
<?php endif; ?>
