<?php print render($title_prefix); ?>
<?php if ($rows): ?>
<div class="wrap-column">
	<div class="content-column1  column-last">
		<div class="widget-entry">
			<div class="milestones-box">
				<?php print $rows; ?>
			</div>
		</div>
	</div>
</div>

<?php endif; ?>