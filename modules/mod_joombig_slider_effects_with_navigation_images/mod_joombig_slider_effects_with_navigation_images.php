<?php
/**
* @title		joombig slider effects with navigation images module
* @website		http://www.joombig.com
* @copyright	Copyright (C) 2013 joombig.com. All rights reserved.
* @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
// Path assignments
$mosConfig_absolute_path = JPATH_SITE;
$mosConfig_live_site = JURI :: base();
if(substr($mosConfig_live_site, -1)=="/") { $mosConfig_live_site = substr($mosConfig_live_site, 0, -1); }

// Include helper.php
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
require_once (dirname(__FILE__).DS.'helper.php');
$lists 					= modJoombigbannerautosliderHelper::getList($params);
$uri 					= JURI::getInstance();
$uniqid					= $module->id;
$width_module			= $params->get('width_module', "990");
$height_module 			= $params->get('height_module', "306");
$left_module 			= $params->get('left_module', "0");

$count_items=0;
foreach($lists as $item){ 
$count_items++;
}
$width_box_thumb = $count_items*22+4;

$img_thumb 			= $params->get('img_thumb', 1);
$pause_time 		= $params->get('pause_time', "4000");

$items					= count($lists);
$images					= 16;
$document 				= JFactory::getDocument();
require(JModuleHelper::getLayoutPath('mod_joombig_slider_effects_with_navigation_images'));
?>
