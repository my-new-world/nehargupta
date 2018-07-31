<?php
/**
 * @file
 * Default theme implementation to display a node.
 */
global $base_root, $base_url;

  $style = 'large'; //image style
  if(isset($node->field_image_blog)){
  $imageone = @$node->field_image_blog['und'][0]['uri'];
  }else{
  $imageone = '';
  }

  if($node->field_blog_format){
  $blog_format = @$node->field_blog_format['und'][0]['value'];
  }else{
  $blog_format = '0';
  }

  $blog_style = theme_get_setting('blog_style', 'nexuse');
  if(empty($blog_style))
    $blog_style = 'on';
	
  if($page){
  ?>

<div id="page-heading" >
	<div class="wrap">
		<div class="post-entry-categories">
			<?php print strip_tags(render($content['field_blog_category']),'<a>');?>
		</div>
		<div class="post-entry-title">
			<h2><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
		</div>
		<div class="post-entry-meta"> By <a href="<?php print $base_url.'/user/'.$uid; ?>">
			<?php 
$username = $node->name;
print $username;
?>
			</a> /<?php print format_date($node->created, 'custom', 'j.n.Y');?> / <?php print $comment_count.' '.t('Comments'); ?></div>
	</div>
</div>
<!-- End Page Title -->
<div id="body" class="content-page">
<div class="wrap">
<div class="big-column left">
<div class="post type-post status-publish format-standard has-post-thumbnail hentry category-design category-inspiration category-technology tag-badge tag-work">
	<div class="post-entry-single">
		<div class="post-entry-media">
			<?php if($blog_format == '0'){ ?>
			<a href="<?php print $node_url; ?>"><?php print theme('image', array('path' => $imageone, 'style_name' => '', 'attributes'=>array('alt'=>$title)));?></a>
			<?php } elseif($blog_format == '1'){ ?>
			<div class="post-flexslider">
				<div class="flexslider flexslider-post-single">
					<ul class="slides">
						<?php 
						foreach($node->field_image_blog['und'] as $key => $value){
					 	 $image_uri  = $node->field_image_blog['und'][$key]['uri'];
					 	 print '<li>'
								.theme('image', array('path' => $image_uri, 'style_name' => '', 'attributes'=>array('alt'=>$title)))
								.'</li>';
					}
				   ?>
					</ul>
				</div>
			</div>
			<?php } elseif ($blog_format == '2'){
        	$video_id = $node->field_video_id['und'][0]['value'];
        	?>
			<div class="youtube-container">
				<iframe src="http://www.youtube.com/embed/<?php print $video_id; ?>" frameborder="0" allowfullscreen></iframe>
			</div>
			<?php } elseif ($blog_format == '3') {
        	$video_id = $node->field_video_id['und'][0]['value'];
        	?>
			<div class="vimeo-container">
				<iframe src="http://player.vimeo.com/video/<?php print $video_id; ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			<?php } ?>
		</div>
		<div class="post-entry-body">
			<div class="post-entry-content content"><?php print @$node->body['und'][0]['value'];?>
				<div class="cleared"></div>
			</div>
			<div class="post-entry-bottom-left">
				<div class="post-entry-tags">
					<?php print strip_tags(render($content['field_tags']),'<a>');?>
				</div>
			</div>
			<div class="post-entry-bottom-right">
				<div class="custom-share-button facebook"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php print $base_root.$node_url; ?>"><i class="fa fa-facebook"></i></a></div>
				<div class="custom-share-button twitter"><a target="_blank" href="https://twitter.com/intent/tweet?source=webclient&amp;text=<?php print $title; ?>+<?php print $base_root.$node_url; ?>"><i class="fa fa-twitter"></i></a></div>
				<div class="custom-share-button google"><a target="_blank" href="https://plus.google.com/share?url=<?php print $base_root.$node_url; ?>&amp;title=<?php print $title; ?>"><i class="fa fa-google-plus"></i></a></div>
				<div class="cleared"></div>
			</div>
			<div class="cleared"></div>
		</div>
	</div>
	<!-- End Post Entry -->
	<div class="post-relative">
		<div class="post-section-title"><span><?php print t('Related Posts') ?></span></div>
		<?php print getRelatedPosts('blog',$id) ?>
		<div class="cleared"></div>
		<div class="cleared"></div>
	</div>
</div>	

<!-- End main content -->
<?php print render($content['comments'])?>

<!--
=============================================
=============== End Single Page =============
=============================================
-->
<?php
  } else {  	
?>
<?php if(arg(0) == 'taxonomy') { ?>
<div class="column3_1">
	<div class="post-cell ">
		<div class="post-cell-thumb"><a href="<?php print $node_url; ?>"><?php print theme('image', array('path' => $imageone, 'style_name' => 'image_720x477', 'attributes'=>array('alt'=>$title)));?></a></div>
		<div class="post-cell-detail">
			<h2 class="post-cell-title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
			<div class="post-cell-meta"><span><?php print format_date($node->created, 'custom', 'M j,Y');?></span> / <span>
					<?php print strip_tags(render($content['field_blog_category']),'<a>');?>
				</span>
			</div>
			<div class="post-cell-content">
				<?php
            hide($content['links']);
            hide($content['field_tags']);
            hide($content['field_image_blog']);
            hide($content['field_blog_format']);
            hide($content['field_video_id']);
            hide($content['comments']);
            hide($content['field_blog_category']);
            print render($content);
          ?>
			</div>
			<div class="post-cell-button content"><a class="post-entry-button" href="<?php print $node_url;?>" >
				<?php  print t(' Read More'); ?>
				</a></div>
		</div>
	</div>
</div>

<?php } else { ?>
<?php if(!empty($blog_style) && $blog_style=='on') { ?>
<div class="post-entry">
	<div class="post type-post status-publish format-standard has-post-thumbnail hentry category-design category-inspiration category-technology tag-badge tag-work">
		<div class="post-entry-media"><a href="<?php print $node_url; ?>"><?php print theme('image', array('path' => $imageone, 'style_name' => '', 'attributes'=>array('alt'=>$title)));?></a></div>
		<div class="post-entry-body">
			<div class="post-entry-categories">
				<?php print strip_tags(render($content['field_blog_category']),'<a>');?>
			</div>
			<div class="post-entry-title">
				<h2><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
			</div>
			<div class="post-entry-meta"> By <a href="<?php print $base_url.'/user/'.$uid; ?>">
				<?php 
$username = $node->name;
print $username;
?>
				</a> /<?php print format_date($node->created, 'custom', 'j.n.Y');?> / <?php print $comment_count.' '.t('Comments'); ?></div>
			<div class="post-entry-content content">
				<?php
            hide($content['links']);
            hide($content['field_tags']);
            hide($content['field_image_blog']);
            hide($content['field_blog_format']);
            hide($content['field_video_id']);
            hide($content['comments']);
            hide($content['field_blog_category']);
            print render($content);
          ?>
				<div class="cleared"></div>
			</div>
			<div class="post-entry-bottom">
				<div class="post-entry-bottom-left"><a class="post-entry-button" href="<?php print $node_url;?>" >
					<?php  print t(' Read More'); ?>
					</a></div>
				<div class="post-entry-bottom-right">
					<div class="post-entry-share">
						<div class="custom-share-button facebook"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php print $base_root.$node_url; ?>"><i class="fa fa-facebook"></i></a></div>
						<div class="custom-share-button twitter"><a target="_blank" href="https://twitter.com/intent/tweet?source=webclient&amp;text=<?php print $title; ?>+<?php print $base_root.$node_url; ?>"><i class="fa fa-twitter"></i></a></div>
						<div class="custom-share-button google"><a target="_blank" href="https://plus.google.com/share?url=<?php print $base_root.$node_url; ?>&amp;title=<?php print $title; ?>"><i class="fa fa-google-plus"></i></a></div>
					</div>
					<div class="cleared"></div>
				</div>
				<div class="cleared"></div>
			</div>
		</div>
	</div>
</div>
<!-- End Post Entry -->
<?php
  	} else {

?>
<div class="column3_1 ">
	<div class="post-cell ">
		<div class="post-cell-thumb"><a href="<?php print $node_url; ?>"><?php print theme('image', array('path' => $imageone, 'style_name' => '', 'attributes'=>array('alt'=>$title)));?></a></div>
		<div class="post-cell-detail">
			<h2 class="post-cell-title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
			<div class="post-cell-meta"><span><?php print format_date($node->created, 'custom', 'M j,Y');?></span> / <span>
			<?php print strip_tags(render($content['field_blog_category']),'<a>');?>
				</span></div>
			<div class="post-cell-content">
				<?php
            hide($content['links']);
            hide($content['field_tags']);
            hide($content['field_image_blog']);
            hide($content['field_blog_format']);
            hide($content['field_video_id']);
            hide($content['comments']);
            hide($content['field_blog_category']);
            print render($content);
          ?>
			</div>
			<div class="post-cell-button content"><a class="post-entry-button" href="<?php print $node_url;?>" >
				<?php  print t(' Read More'); ?>
				</a></div>
		</div>
	</div>
</div>
<?php
  	} 
?>
<?php
  	} 
?>
<?php
  	} 
?>
