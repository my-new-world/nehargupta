<?php print render($title_prefix); ?>
<?php if ($rows): ?>

<div class="column1">
	<div class="wrap-no-fullwidth">
		<ul class="filters">
			<li><span class="active" data-filter="*">View All</span></li>
			<?php print $rows; ?>
		</ul>
	</div>
	<div class="cleared"></div>
</div>
<?php endif; ?>
