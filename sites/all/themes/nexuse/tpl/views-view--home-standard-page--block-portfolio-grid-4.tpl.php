<?php print render($title_prefix); ?>
<?php if ($rows): ?>

<div class="wrap-column">
	<div class="content-column1  column-last">
		<div class="widget-entry"><?php print $rows; ?>
			<div class="cleared"></div>
			<div class="cleared"></div>
			<?php if ($pager): ?>
			<div class="column1">
				<div class="wrap-no-fullwidth">
					<div class="paginate paginate-portfolio"><?php print $pager; ?></div>
				</div>
			</div>
			<div class="cleared"></div>
			<?php endif; ?>
		</div>
		<!-- end widget entry -->
	</div>
	<div class="cleared"></div>
</div>
<?php endif; ?>
