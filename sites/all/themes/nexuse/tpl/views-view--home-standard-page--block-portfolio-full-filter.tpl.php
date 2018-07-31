<?php print render($title_prefix); ?>
<?php if ($rows): ?>

<div class="no-wrap">
	<div class="content-column1  column-last">
		<div class="widget-entry">
			<?php if ($header): ?>
			<?php print $header; ?>
			<?php endif; ?>
			<div class="column1">
				<div class="portfolio-filter-container portfolio-board-container">
					<?php print $rows; ?></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
