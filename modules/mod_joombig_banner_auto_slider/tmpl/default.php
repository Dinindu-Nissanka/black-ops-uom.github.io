<?php
/**
* @title		joombig banner auto slider module
* @website		http://www.joombig.com
* @copyright	Copyright (C) 2013 joombig.com. All rights reserved.
* @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>

<link rel="stylesheet" href="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_banner_auto_slider/assets/css/settings.css" type="text/css" />
<?php
if ($enable_jQuery == 1) {?>
	<script src="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_banner_auto_slider/assets/script/jquery.min.js" type="text/javascript"></script>
<?php }?>
<script src="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_banner_auto_slider/assets/script/jquery-noconflict.js" type="text/javascript"></script>
<script>
		var  call_width_module, call_height_module;
		call_width_module  = <?php echo $width_module;?>;
		call_height_module = <?php echo $height_module;?>;
</script>
<script src="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_banner_auto_slider/assets/script/caption.js" type="text/javascript"></script>

<script src="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_banner_auto_slider/assets/script/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
<script src="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_banner_auto_slider/assets/script/jquery.themepunch.revolution.min.js" type="text/javascript"></script>	

<style>
	#rev_slider_1_1, #rev_slider_1_1_wrapper{
		width:<?php echo $width_module;?>px; 
		height:<?php echo $height_module;?>px;
	}
<?php if ($display_bullets == 0){?>
		.tp-bullets{
			display:none; 
		}
<?php }?>
</style>
<div id="banner_auto_slider_main" value="1" style="width:<?php echo $width_module;?>px;"> 
<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper" style="float:left;left:<?php echo $left_module ;?>px;background-color:transparent;padding:0px;margin:0;padding-bottom:5px;">
	<div id="rev_slider_1_1" class="rev_slider" style="display:none;">
<ul>	
<?php 
	$count1=1;
	foreach($lists as $item) { ?>
	<li data-transition="<?php echo $animation_style;?>" data-slotamount="7" data-masterspeed="300" >
		<img src="<?php echo $item->image ?>"  alt="<?php echo $item->title ?>"  data-bgposition="center top" data-bgfit="<?php echo $width_module ?>px <?php echo $height_module ?>px" data-bgrepeat="no-repeat">
	</li>
<?php	
	$count1++;}
?>		
</ul>
<?php if($display_bannertimer == 1){?>
	<div class="tp-bannertimer"></div>
<?php }?>
</div>
</div>	
<div style="clear:both;"></div>	
</div>	