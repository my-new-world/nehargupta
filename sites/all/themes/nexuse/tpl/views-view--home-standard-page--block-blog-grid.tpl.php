<?php print render($title_prefix); ?>
<?php if ($rows): ?>

<div class="wrap-column content-page">
	<div class="full-column">
		<div class="post-grid-container"><?php print $rows; ?>
			<div class="cleared"></div>
		</div>
		<?php if ($pager): ?>
		<div class="column1">
			<div class="wrap-no-fullwidth">
				<div class="paginate paginate-portfolio"><?php print $pager; ?></div>
			</div>
		</div>
		<div class="cleared"></div>
		<?php endif; ?>
	</div>
</div>
<?php endif; ?>
