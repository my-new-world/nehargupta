	<div id="footer">
		
		<div class="wrap-column">
			<?php  if($page['footer_widget']):?>
			<div id="footer-widget-container">
				<?php print render($page['footer_widget']); ?>
				<div class="cleared"></div>
			</div>
			<?php endif; ?>
			<!-- End Footer Widget Container-->
		</div>
	</div>
	<!-- End Footer -->
	<div id="footer-bottom">
		<div class="wrap">
			<?php $footer_copyright = theme_get_setting('footer_copyright_message', 'nexuse'); ?>
			<?php if(!empty($footer_copyright)) :?>
				<div id="footer-copyright"> 
					<?php print $footer_copyright ?>
				</div>
			<?php endif; ?>
			
			<?php $footer_right = theme_get_setting('footer_right_link', 'nexuse'); ?>
			<?php if(!empty($footer_right)) :?>
				<div id="footer-right">
					<?php print $footer_right ?>
				</div>
			<?php endif; ?>
			<div class="cleared"></div>
		</div>
	</div>
	<!-- End Footer Bottom -->
</div>
<!-- End Page -->