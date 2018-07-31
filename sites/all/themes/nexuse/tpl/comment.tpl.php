<li class="comment even thread-even depth-1">
	<div class="comment-entry" >
		<div class="comment-avatar">
			<?php
        if($picture){
          print $picture;
        }  else {
          print '<img src="http://placehold.it/45x45" alt="Default User Picture" />';
        }

      ?>
		</div>
		<div class="comment-info">
			<div class="comment-author">
				<?php print theme('username', array('account' => $content['comment_body']['#object'], 'attributes' => array('class' => 'url'))) ?>
			</div>
			<div class="comment-date">
				<?php print format_date($node->created, 'custom', 'F j, Y g:i a'); ?>
			</div>
			<span class="comment-reply">
				<?php print strip_tags(render($content['links']),'<a>'); ?>
			</span>
			<div class="comment-content content">
				<?php hide($content['links']); print render($content) ?>
			</div>
		</div>
		<div class="cleared"></div>
	</div>
</li>
