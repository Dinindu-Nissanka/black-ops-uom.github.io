<?php
defined('_JEXEC') or die;
/**
 *-------------------------------------------
 * Szablon został wypalony w  Diablodesign.
 * www.diablodesign.eu
 * biuro@diablodesign.eu
 * tel.666-977-944
 *-------------------------------------------
 */


require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';


$document = $this;


$templateUrl = $document->baseurl . '/templates/' . $document->template;

Artx::load("Artx_Page");


$view = $this->artx = new ArtxPage($this);


$view->componentWrapper();

JHtml::_('behavior.framework', true);
$app = JFactory::getApplication();
$tplparams	= $app->getTemplate(true)->params;
$slider_enabled = htmlspecialchars($tplparams->get('slider_enabled'));
$iconf = htmlspecialchars($tplparams->get('iconf'));
$icont = htmlspecialchars($tplparams->get('icont'));
$icond = htmlspecialchars($tplparams->get('icond'));
$iconfl = htmlspecialchars($tplparams->get('iconfl'));
$icony = htmlspecialchars($tplparams->get('icony'));
$icons = htmlspecialchars($tplparams->get('icons'));
$allicon = htmlspecialchars($tplparams->get('allicon'));
?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $document->language; ?>">
<head>
    <jdoc:include type="head" />
        <!--scroling head-->
<script src="<?php echo $templateUrl; ?>/js/scroling.js"></script>
<script type="text/javascript">
$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();	
		} else {
			$('#toTop').fadeOut();
		}
	});
 
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
});
</script>
<!--scroling koniec head-->
    <!--slideshow header start-->

  <?php if ($slider_enabled == 1) { ?><link rel="stylesheet" href="<?php echo $templateUrl; ?>/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/themes/pascal/pascal.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/themes/orman/orman.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/style.css" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo $templateUrl; ?>/js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="<?php echo $templateUrl; ?>/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script><?php } ?>
<!--slideshow header end-->
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" />

 
    
    
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.responsive.css" media="all">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Aldrich&amp;subset=latin">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script>if ('undefined' != typeof jQuery) document._artxJQueryBackup = jQuery;</script>
    <script src="<?php echo $templateUrl; ?>/jquery.js"></script>
    <script>jQuery.noConflict();</script>

    <script src="<?php echo $templateUrl; ?>/script.js"></script>
    <?php $view->includeInlineScripts() ?>
    <script>if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
    <script src="<?php echo $templateUrl; ?>/script.responsive.js"></script>
</head>
<body>
<!--scroling-->
<div id="toTop">^<?php echo $this->params->get('scroll'); ?></div>
<!--koniec scroling-->
<div id="dd-main">
<header class="dd-header"><?php echo $view->position('position-30', 'dd-nostyle'); ?>


    <div class="dd-shapes">
<div class="dd-object265287874" data-left="0.17%"><img src="<?php echo $this->params->get('logo'); ?>" width="400" height="70"></div>

            </div>



<div class="dd-textblock dd-object2093741199" data-left="10.3%">
    <form class="dd-search" name="Search" action="<?php echo $document->baseurl; ?>/index.php" method="post">
    <input type="text" value="" name="searchword">
        <input type="hidden" name="task" value="search">
<input type="hidden" name="option" value="com_search">
<input type="submit" value="" name="search" class="dd-search-button">
        </form>
</div>
                        <div id="dd-flash-area">
                    <div id="dd-flash-container">
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="44" height="307" id="dd-flash-object">
                        <param name="movie" value="<?php echo $templateUrl; ?>/images/flash.swf">
                        <param name="quality" value="high">
                    	<param name="scale" value="exactfit">
                    	<param name="wmode" value="transparent">
                    	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.30&amp;framerate1=24&amp;loop=true&amp;wmode=transparent">
                        <param name="swfliveconnect" value="true">
                        <!--[if !IE]>-->
                        <object type="application/x-shockwave-flash" data="<?php echo $templateUrl; ?>/images/flash.swf" width="44" height="307">
                            <param name="quality" value="high">
                    	    <param name="scale" value="exactfit">
                            <param name="wmode" value="transparent">
                                                    	    <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.30&amp;framerate1=24&amp;loop=true&amp;wmode=transparent">
                            <param name="swfliveconnect" value="true">
                        <!--<![endif]-->
                          	<div class="dd-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"></a></div>
                        <!--[if !IE]>-->
                        </object>
                        <!--<![endif]-->
                    </object>
                    </div>
                    </div>
<?php if ($view->containsModules('position-1', 'position-28', 'position-29')) : ?>
<nav class="dd-nav">
    <div class="dd-nav-inner">
    
<?php if ($view->containsModules('position-28')) : ?>
<div class="dd-hmenu-extra1"><?php echo $view->position('position-28'); ?></div>
<?php endif; ?>
<?php if ($view->containsModules('position-29')) : ?>
<div class="dd-hmenu-extra2"><?php echo $view->position('position-29'); ?></div>
<?php endif; ?>
<?php echo $view->position('position-1'); ?>
 
        </div>
    </nav>
<?php endif; ?>

                    
</header>
<div class="dd-sheet clearfix">
            <?php echo $view->position('position-15', 'dd-nostyle'); ?>
<?php echo $view->positions(array('position-16' => 33, 'position-17' => 33, 'position-18' => 34), 'dd-block'); ?>
<div class="dd-layout-wrapper">
                <div class="dd-content-layout">
                    <div class="dd-content-layout-row">
                        <?php if ($view->containsModules('position-7', 'position-4', 'position-5')) : ?>
<div class="dd-layout-cell dd-sidebar1">
<?php echo $view->position('position-7', 'dd-block'); ?>
<?php echo $view->position('position-4', 'dd-block'); ?>
<?php echo $view->position('position-5', 'dd-block'); ?>




                        </div>
<?php endif; ?>

                        <div class="dd-layout-cell dd-content">
                        <!--hot info-->
                        <div class="hotinfo"><marquee direction="left" scrollamount="2" scrolldelay="1" onmouseover="this.stop()" onmouseout="this.start()"><?php echo $view->position('hotinfo', 'dd-nostyle'); ?><a href="<?php echo $this->params->get('hl'); ?>"><?php echo $this->params->get('hotinfo'); ?></a>
</marquee></div>
<!--end hotinfo-->
<!--maska mod-->
<div class="slidemod"><?php echo $view->position('slideshow', 'dd-nostyle'); ?></div>
 <?php if ($slider_enabled == 1) { ?><div class="maska"><img src="<?php echo $templateUrl; ?>/images/maska.png" width="710" height="100"></div>
    <div class="maska_prawa"><img src="<?php echo $templateUrl; ?>/images/maska1.png" width="40" height="260"></div><?php } ?>
    
    <!--slideshow--><?php if ($slider_enabled == 1) { ?>
                            <div class="slideshow">

<div id="wrapper">
<div class="slider-wrapper theme-default">
            
            <div id="slider" class="nivoSlider">

<img src="<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto1'); ?>"/>
<img src="<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto2'); ?>"/>
<img src="<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto3'); ?>"/>
<img src="<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto4'); ?>"/>
<img src="<?php echo $this->baseurl ?>/<?php echo $this->params->get('foto5'); ?>"/>

</div>
</div>
</div>

<?php } ?>
<!--slideshowend-->

<!--social icon-->
 <?php if ($allicon == 1) { ?><!--ikony spolecznosciowe-->
<div class="ikony"><div class="iko">
<?php if ($iconf == 1) { ?><a href="<?php echo $this->params->get('facebook'); ?>">
<img src="<?php echo $templateUrl; ?>/images/share_icon/facebook_icon.png" width="31" height="31" /></a></div><div class="iko"><?php } ?>
<?php if ($icont == 1) { ?><a href="<?php echo $this->params->get('twitter'); ?>">
<img src="<?php echo $templateUrl; ?>/images/share_icon/twitter_icon.png" width="31" height="31" /></a></div><div class="iko"><?php } ?> 
<?php if ($icond == 1) { ?><a href="<?php echo $this->params->get('digg'); ?>">				
<img src="<?php echo $templateUrl; ?>/images/share_icon/digg_icon.png" width="31" height="31" /></a></div><div class="iko"><?php } ?> 
<?php if ($iconfl == 1) { ?><a href="<?php echo $this->params->get('flickr'); ?>">			
<img src="<?php echo $templateUrl; ?>/images/share_icon/flickr_icon.png" width="31" height="31" /></a></div><div class="iko"><?php } ?>	 
<?php if ($icony == 1) { ?><a href="<?php echo $this->params->get('youtube'); ?>">			
<img src="<?php echo $templateUrl; ?>/images/share_icon/youtube_icon.png" width="31" height="31" /></a></div><div class="iko"><?php } ?>
<?php if ($icons == 1) { ?><a href="<?php echo $this->params->get('skype'); ?>">					
<img src="<?php echo $templateUrl; ?>/images/share_icon/skype_icon.png" width="31" height="31" /></a><?php } ?></div>
</div><?php } ?><!--koniec ikony-->

<?php
  echo $view->position('position-19', 'dd-nostyle');
  if ($view->containsModules('position-2'))
    echo artxPost($view->position('position-2'));
  echo $view->positions(array('position-20' => 50, 'position-21' => 50), 'dd-article');
  echo $view->position('position-12', 'dd-nostyle');
  echo artxPost(array('content' => '<jdoc:include type="message" />', 'classes' => ' dd-messages'));
  echo '<jdoc:include type="component" />';
  echo $view->position('position-22', 'dd-nostyle');
  echo $view->positions(array('position-23' => 50, 'position-24' => 50), 'dd-article');
  echo $view->position('position-25', 'dd-nostyle');
?>



                        </div>
                    </div>
                </div>
            </div>
<?php echo $view->positions(array('position-9' => 33, 'position-10' => 33, 'position-11' => 34), 'dd-block'); ?>
<?php echo $view->position('position-26', 'dd-nostyle'); ?>


    </div>


</div>

<footer class="dd-footer">
  <div class="dd-footer-inner">
<?php if ($view->containsModules('position-27')) : ?>
    <?php echo $view->position('position-27', 'dd-nostyle'); ?>
<?php else: ?>
<div style="position:relative;padding-left:0px;padding-right:0px"><a title="RSS" class="dd-rss-tag-icon" style="position: absolute; bottom: 0px; right: 6px; line-height: 32px;" href="#"></a>Copyright © 2013. Games Site Rights Reserved.</div>
    <?php endif; ?>
<p class="dd-page-footer">
        <span id="dd-footnote-links">Designed by <a href="http://www.diablodesign.eu" target="_blank">www.diablodesign.eu</a>.</span>
    </p>
  </div>
</footer>

<?php echo $view->position('debug'); ?>
</body>
</html>