<?php
$out = '';
if($block->region == 'content_section'){
	$out .= '<div class="'.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
	if ($block->subject || !empty($block->block_subtitle)):
		$out .= '<div class="wrap-column">
					<div class="column1">	
						<div class="content-section-heading">';
		if(!empty($block->block_subtitle)) {
			$out .= '<h2 class="content-section-subtitle"><span class="title-point"></span>';
			$out .= $block->block_subtitle.'</h2>';
		}
		if ($block->subject){
			$out .= '<h1 class="content-section-title"><span>'.$block->subject.'</span></h1>';
		}
		$out .= '<div class="content-section-line"><span></span></div>
			</div>
		</div>
		<div class="cleared"></div>
	</div>';
	endif;
	$out .= $content;
	$out .= '</div>';
	
} elseif($block->region == 'right_sidebar'){
	
	$out .= '<div class="'.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
	$out .= '<div class="sidebar-widget-content content">';
	
		if ($block->subject){
			$out .='<div class="sidebar-widget-title">'.$block->subject.'</div>';
		}

	$out .= $content;
	$out .= '</div>';
	$out .= '</div>';
		
} elseif($block->region == 'right_sidebar_blog'){
	
	$out .= '<div class="'.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
		if ($block->subject){
			$out .='<div class="sidebar-widget-title">'.$block->subject.'</div>';
		}
	$out .= $content;
	$out .= '</div>';
	
} elseif($block->region == 'relation_portfolio'){
	
	$out .= '<div class="'.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
	$out .= '<div class="portfolio-relatives">
				<div class="wrap-column">';
	
		if ($block->subject){
			$out .='<div class="wrap">
						<div class="post-section-title"><span>'.$block->subject.'</span></div>
					</div>';
		}

	$out .= $content;
	$out .= '<div class="cleared"></div></div>';
	$out .= '</div>';
	$out .= '</div>';

} elseif($block->region == 'footer_widget'){
	$out .= '<div class="footer-column">';
	$out .= '<div class="'.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
	if ($block->subject):
		$out .= '<div class="footer-widget-title">'.$block->subject.'</div>';
	endif;
	$out .= $content;
	$out .= '</div>';
	$out .= '</div>';

} elseif($block->region == 'content'){
	$out .= '<div class="'.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
	$out .= $content;
	$out .= '</div>';

} else {
	$out .= '<div class="'.$classes.'" '.$attributes.'>';
	$out .= render($title_suffix);
	if ($block->subject): 
		$out .= '<h5>'.$block->subject.'</h5>';
	endif;
	$out .= $content;
	$out .= '</div>';
}
	print $out;
?>
