<?php $shortname = "sell_theme"; ?>
<footer id="footer">
	<div class="footer_widgets_cont">
		<div class="container">
			<div class="footer_widget_col">
				<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 1') ) : ?>
				<?php endif; ?>
			</div> <!-- //footer_widget_col -->
			<!-- <div class="footer_widget_col">
				<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 2') ) : ?>
				<?php endif; ?>
			</div> 
			<div class="footer_widget_col footer_widget_col_last">
				<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 3') ) : ?>
				<?php endif; ?>
			</div> -->
			<div class="clear"></div>
		</div> <!-- //container -->
	</div> <!-- //footer_widgets_cont -->
	<div class="footer_social">
	
	<?php if(get_option($shortname.'_facebook_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_facebook_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.png" alt="facebook" /></a>
		<?php } ?>
		<?php if(get_option($shortname.'_twitter_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_twitter_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.png" alt="twitter" /></a>
		<?php } ?>
		<?php if(get_option($shortname.'_linkedin_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_linkedin_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/linkedin-icon.png" alt="linkedin" /></a>
		<?php } ?>
		
		<?php if(get_option($shortname.'_google_plus_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/google-plus-icon.png" alt="google plus" /></a>
		<?php } ?>
		<?php if(get_option($shortname.'_picasa_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_picasa_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/picasa-icon.png" alt="social" /></a>
		<?php } ?>
		<?php if(get_option($shortname.'_pinterest_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.png" alt="pinterest" /></a>
		<?php } ?>
		<?php if(get_option($shortname.'_youtube_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_youtube_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/youtube-icon.png" alt="youtube" /></a>
		<?php } ?>
		<?php if(get_option($shortname.'_vimeo_link','') != '') { ?>
			<a href="<?php echo get_option($shortname.'_vimeo_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/vimeo-icon.png" alt="vimeo" /></a>
		<?php } ?>
		
		<div class="clear"></div>
	</div><!--//footer_social-->
	

	</div>

	</div>
</footer><!--//footer-->

		<?php wp_footer(); ?>

		<!-- Own scripts -->
	   <script src="<?php bloginfo('stylesheet_directory'); ?>/js/preloader.js" type="text/javascript"></script> 
	   <script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js" type="text/javascript"></script>

		<!-- Extra scripts from extern src -->
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.infinitescroll.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-easing-1.3.js" type="text/javascript"></script> 
	   <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.touchSwipe.min.js" type="text/javascript"></script>  
	   <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.isotope2.min.js" type="text/javascript"></script> 
	   <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.ba-bbq.min.js" type="text/javascript"></script>  
	   <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.form.js" type="text/javascript"></script> 
	   <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.fancybox.pack.js" type="text/javascript"></script>
	   <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.slicknav.js"></script>
	   <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-finger-v0.1.0.min.js" type="text/javascript"></script>
	   <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.isotope.load.js" type="text/javascript"></script>

	   <script src="<?php bloginfo('stylesheet_directory'); ?>/js/packery-mode.pkgd.min.js" type="text/javascript"></script>
	   <script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js" type="text/javascript"></script> 
	   <script src="<?php bloginfo('stylesheet_directory'); ?>/js/input.fields.js" type="text/javascript"></script>
	   <script src="<?php bloginfo('stylesheet_directory'); ?>/behaviors/manual-trigger.js" type="text/javascript"></script>
	   <script src="<?php bloginfo('stylesheet_directory'); ?>/js/flickerplate.min.js" type="text/javascript"></script>
		<!-- <script src="<?php bloginfo('stylesheet_directory'); ?>/js/retina-1.1.0.min.js"></script> -->
	</body>
</html>