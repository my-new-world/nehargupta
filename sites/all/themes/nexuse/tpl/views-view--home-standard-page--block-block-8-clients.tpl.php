<?php print render($title_prefix); ?>
<?php if ($rows): ?>

<div class="wrap-column">
	<div class="content-column1  column-last">
		<div class="widget-entry">
			<div class="column1">
				<div class="logo-container"><?php print $rows; ?>

					<?php if ($attachment_after): ?>
					<?php print $attachment_after; ?>
					<?php endif; ?>

				</div>
			</div>
		</div>
		<!-- end widget entry -->
	</div>
	<div class="cleared"></div>
</div>
<?php endif; ?>
