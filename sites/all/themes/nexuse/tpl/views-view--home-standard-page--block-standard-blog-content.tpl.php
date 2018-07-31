<?php print render($title_prefix); ?>
<?php if ($rows): ?>
<?php print $rows; ?>
<?php if ($pager): ?>	
<div class="paginate"><?php print $pager; ?></div>
<?php endif; ?>
<?php endif; ?>
