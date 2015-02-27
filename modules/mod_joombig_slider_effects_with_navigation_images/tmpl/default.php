<?php
/**
* @title		joombig slider effects with navigation images module
* @website		http://www.joombig.com
* @copyright	Copyright (C) 2013 joombig.com. All rights reserved.
* @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<script>
jQuery.noConflict();
</script>
<link href="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_slider_effects_with_navigation_images/assets/css/demo1.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_slider_effects_with_navigation_images/assets/css/quake.slider.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_slider_effects_with_navigation_images/assets/css/quake.skin.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_slider_effects_with_navigation_images/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_slider_effects_with_navigation_images/assets/js/quake.slider.js" type="text/javascript"></script>
<script src="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_slider_effects_with_navigation_images/assets/js/demo.js" type="text/javascript"></script>
<script src="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_slider_effects_with_navigation_images/assets/js/slidereffectwithnavigation.js" type="text/javascript"></script>
	
<?php
$document->addScript('modules/mod_joombig_slider_effects_with_navigation_images/assets/js/quake.slider.js');
$document->addScriptDeclaration('
		var  call_pause_time;
		call_pause_time = '.$pause_time.';
');
$document->addScript('modules/mod_joombig_slider_effects_with_navigation_images/assets/js/slidereffectwithnavigation.js');
$document->addScriptDeclaration('
		var  call_width, call_img_thumb;
		call_width = '.$width_module.';
		call_img_thumb = '.$img_thumb.';
');

?>
	
<?php
// add your stylesheet
$document->addStyleSheet( 'modules/mod_joombig_slider_effects_with_navigation_images/assets/css/quake.skin.css' );
// style declaration
$document->addStyleDeclaration( '
	.quake-slider
	{
		width: '.$width_module.'px;
		height: '.$height_module.'px;
	}
	.quake-slider-wrapper{
		left:'.$left_module.'px;
	}
	.quake-dn{
		background-size:'.$width_module.'px '.$height_module.'px;
	}
	.quake-nav
	{
		width: '.($width_module+10).'px;
	}
	.quake-nav-wrapper.inside
	{
		width:'.$width_box_thumb.'px;
	}
' );
?>
	
<div class="wrapper_main"style="width:<?php echo $width_module;?>px;height:<?php echo $height_module+35;?>px;">
	<!-- Quake Image Slider -->
	<div class="quake-slider">
		<div class="quake-slider-images">
			<?php 
				$count1=1;
				foreach($lists as $item) { 
			?>
			<a target="_blank" href="javascript:"> <img src="<?php echo $item->image ?>" alt="<?php echo $item->title ?>" /> </a>
			
			<?php	
				$count1++;}
			?>
		</div>
	</div>
	<!-- /Quake Image Slider -->
</div>

