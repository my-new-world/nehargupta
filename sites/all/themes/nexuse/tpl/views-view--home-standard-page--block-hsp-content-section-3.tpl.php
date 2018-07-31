<?php print render($title_prefix); ?>
<?php if ($rows): ?>

<div class="no-wrap">
	<div class="content-column1  column-last">
		<div class="widget-entry">
			<div class="column1">
				<div class="portfolio-board-container"><?php print $rows; ?>
					
					<?php if ($attachment_after): ?>
					<?php print $attachment_after; ?>
					<?php endif; ?>
					<div class="cleared"></div>
				</div>
			</div>
			<div class="cleared"></div>
		</div>
		<!-- end widget entry -->
	</div>
	<div class="cleared"></div>
</div>
<!-- end wrap-column no-wrap -->
<?php endif; ?>
