<?php 

/*******************************************************************************************/
/*
/*		Designed by 'AS Designing'
/*		Web: http://www.asdesigning.com
/*		Web: http://www.astemplates.com
/*		License: GNU/GPL
/*
/*******************************************************************************************/

defined( '_JEXEC' ) or die( 'Restricted access' );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/tmpl.general.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/tmpl.content.css" type="text/css" />

	<?php 
    include 'params.php';
    include 'styles.php';
    ?>

    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/virtuemart2.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/tmpl.component.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/<?php echo $tmpl_style; ?>" type="text/css" />  
    
    <script type="text/javascript" src="templates/<?php echo $this->template ?>/scripts/general.js"></script>
    
    <?php 


switch ($menu_id)
{
    case '580';
        $tmpl_style = 'style.default.css';
        $_SESSION['tmpl_style'] = 'style.default.css';
        break;    
    case '581';
        $tmpl_style = 'style.silver.css';
        $_SESSION['tmpl_style'] = 'style.silver.css';
        break;    
    case '582';
        $tmpl_style = 'style.classic.css';
        $_SESSION['tmpl_style'] = 'style.classic.css';        
        break;    
    case '583';
        $tmpl_style = 'style.bluerain.css';
        $_SESSION['tmpl_style'] = 'style.bluerain.css';        
        break;    
    case '584';
        $tmpl_style = 'style.redautumn.css';
        $_SESSION['tmpl_style'] = 'style.redautumn.css';
        break;    
}

if(isset($_SESSION['tmpl_style']))
{
    $tmpl_style = $_SESSION['tmpl_style'];
}

?>

    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/<?php echo $tmpl_style; ?>" type="text/css" />

<?php

include 'styles.php';

?>
  
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/tmpl.custom.css" type="text/css" />
    
</head>

<body>
	<div id="cmp_content">
    	<div id="cmp_colmain">
            <jdoc:include type="message" />
            <jdoc:include type="component" />
        </div>
    </div>
</body>
</html>
