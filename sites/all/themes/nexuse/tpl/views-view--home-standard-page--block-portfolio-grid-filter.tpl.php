<?php print render($title_prefix); ?>
<?php if ($rows): ?>

<div class="wrap-column">
	<div class="content-column1  column-last">
		<div class="widget-entry">
			<?php if ($header): ?>
			<?php print $header; ?>
			<?php endif; ?>
			<div class="cleared"></div>
			<div class="portfolio-grid">
				<div class="portfolio-filter-container"><?php print $rows; ?></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
