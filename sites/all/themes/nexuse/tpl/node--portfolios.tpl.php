<?php
/**
 * @file
 * Default theme implementation to display a node.
 */
global $base_root, $base_url;

  if(isset($node->field_images)){
  $imageone = $node->field_images['und'][0]['uri'];
  }else{
  $imageone = '';
  }

  if($node->field_portfolio_format){
  $portfolio_format = @$node->field_portfolio_format['und'][0]['value'];
  }else{
  $portfolio_format = '0';
  }
  
   if($page){ ?>

<div class="portfolio-single-container portfolio-single-left">
	<div class="portfolio-big-column left">
		<div class="portfolio-single-media" id="img_portfolio">
			<?php if($portfolio_format == '0'){ ?>
			<?php print theme('image', array('path' => $imageone, 'style_name' => 'image_720x477', 'attributes'=>array('alt'=>$title)));?>
			<?php } elseif($portfolio_format == '1'){ ?>
			<div class="portfolio-flexslider">
				<div class="flexslider">
					<ul class="slides">
						<?php
                foreach($node->field_images['und'] as $key => $value){
                  $image_uri  = $node->field_images['und'][$key]['uri'];
                  print '<li>'.theme('image', array('path' => $image_uri, 'style_name' => '', 'attributes'=>array('alt'=>$title))).'</li>';
                }

               ?>
					</ul>
				</div>
			</div>
			<?php } elseif ($portfolio_format == '2'){

        foreach($node->field_images['und'] as $key => $value){
          $image_uri  = $node->field_images['und'][$key]['uri'];
          $output = image_style_url('', $image_uri);
          print '<div class="image-list-each">'.theme('image', array('path' => $image_uri, 'style_name' => '', 'attributes'=>array('alt'=>$title))).'</div>';
        }

      } elseif ($portfolio_format == '3'){
        $video_id = $node->field_video_id['und'][0]['value'];
        ?>
			<div class="youtube-container">
				<iframe src="http://www.youtube.com/embed/<?php print $video_id; ?>" frameborder="0" allowfullscreen></iframe>
			</div>
			<?php } elseif ($portfolio_format == '4') {
        $video_id = $node->field_video_id['und'][0]['value'];
        ?>
			<div class="vimeo-container">
				<iframe src="http://player.vimeo.com/video/<?php print $video_id; ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			<?php } ?>
		</div>
	</div>
	<div class="portfolio-small-column right">
		<div class="portfolio-single-data">
			<div class="portfolio-single-navigation">
				<div class="portfolio-single-navigation-left"><a href="<?php print url("node/".dad_prev_next($nid, 'portfolios', 'p'));?>" rel="prev"><i class="fa fa-angle-left"></i><?php print t(' Prev Project') ?></a></div>
				<div class="portfolio-single-navigation-right"><a href="<?php print url("node/".dad_prev_next($nid, 'portfolios', 'n'));?>" rel="next"><?php print t('Next Project ') ?><i class="fa fa-angle-right"></i></a></div>
				<div class="cleared"></div>
			</div>
			<div class="portfolio-single-content content">
				<div class="portfolio-single-detail">
					<div class="portfolio-single-detail-entry">
						<div class="portfolio-single-detail-name"><?php print t('Owner') ?></div>
						<div class="portfolio-single-detail-content"><?php print @$node->field_owner['und'][0]['value'];?></div>
					</div>
					<div class="portfolio-single-detail-entry">
						<div class="portfolio-single-detail-name"><?php print t('Project') ?></div>
						<div class="portfolio-single-detail-content"><?php print @$node->title;?></div>
					</div>
				</div>
				<div class="portfolio-single-detail-entry">
					<div class="portfolio-single-detail-name"><?php print t('Category') ?></div>
					<div class="portfolio-single-detail-content">
						<?php print strip_tags(render($content['field_portfolios_categories']),'<a>');?>
					</div>
				</div>
				<?php print @$node->body['und'][0]['value'];?></div>
			<div class="portfolio-single-share">
				<div class="custom-share-button facebook"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php print $base_root.$node_url; ?>"><i class="fa fa-facebook"></i></a></div>
				<div class="custom-share-button twitter"><a target="_blank" href="https://twitter.com/intent/tweet?source=webclient&amp;text=<?php print $title; ?>+<?php print $base_root.$node_url; ?>"><i class="fa fa-twitter"></i></a></div>
				<div class="custom-share-button google"><a target="_blank" href="https://plus.google.com/share?url=<?php print $base_root.$node_url; ?>&amp;title=<?php print $title; ?>"><i class="fa fa-google-plus"></i></a></div>
				<div class="cleared"></div>
			</div>
		</div>
	</div>
	<div class="cleared"></div>
</div>
<?php
} else { 
?>
<div class="column3_1 ">
	<div class="portfolio-cell ">
		<div class="portfolio-cell-thumb">
			<div class="portfolio-cell-bg"></div>
			<a class="portfolio-cell-view" href="<?php print $node_url; ?>"><i class="fa fa-eye"></i></a><a href="<?php print $node_url; ?>">
			
<?php print theme('image', array('path' => $imageone, 'style_name' => 'image_720x477', 'attributes'=>array('alt'=>$title)));?>
			
			</a></div>
		<div class="portfolio-cell-data">
			<div class="portfolio-cell-title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></div>
			<div class="portfolio-cell-categories">
						<?php print strip_tags(render($content['field_portfolios_categories']),'<a>');?>
			</div>
		</div>
	</div>
</div>
<?php } ?>
