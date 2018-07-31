<?php
	if ($content['#node']->comment and !($content['#node']->comment == 1 and $content['#node']->comment_count)) { ?>

<div id="comment-section">
	<div class="comment-number post-section-title"><span><?php print $content['#node']->comment_count.' '.t('Comments')?></span></div>
	<div class="title-line"></div>
	<div id="comment-container">
		<!-- comment-post -->
		<ul>
			<?php print render($content['comments']); ?>
		</ul>
	</div>
</div>
<div id="comment-form" class="content">
	<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">
			<div class="title_reply_label"><span><?php print t('Leave Your Comment') ?></span></div>
			<div class="title-line"></div>
			<small><a rel="nofollow" id="cancel-comment-reply-link" href="" style="display:none;"><?php print t('Cancel reply')?></a></small></h3>
		<?php print str_replace('resizable', '', render($content['comment_form'])); ?></div>
</div>
<div class="cleared"></div>
<?php
	}
?>
