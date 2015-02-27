<?php
/** 
# @author Bryan Keller
# Email : admin@sanantoniocomputerrepair.net
# URL : www.frontallobemarketing.com
# Copyright (c) 2014 Frontal Lobe Marketing
# License GNU GPL
*/

defined( '_JEXEC' ) or die( 'Restricted access' );
require_once dirname(__FILE__).'/helper.php';
$slidesocialconnect = modSlideSocialConnect::getSlideSocialConnect($params);
require JModuleHelper::getLayoutPath('mod_slidesocialconnect', $params->get('layout', 'default'));
?>