<?php
/**
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

defined('_JEXEC') or die('Restricted access');
$url = clone(JURI::getInstance());
$path = $this->baseurl.'/templates/'.$this->template;

$showleftColumn = $this->countModules('left');
$showrightColumn = $this->countModules('right');
$showuser5Column = $this->countModules('user5');


if(JRequest::getCmd('task') != 'edit') $Edit = false; else $Edit = true;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
	<jdoc:include type="head" />
	<?php
$user =& JFactory::getUser();  
if ($user->get('guest') == 1) {  
$headerstuff = $this->getHeadData();  
$headerstuff['scripts'] = array();  
$this->setHeadData($headerstuff); }  
?>
	<script src="<?php echo $path ?>/scripts/jquery-1.3.2.min.js" type="text/javascript"></script>
	<script src="<?php echo $path ?>/scripts/imagepreloader.js" type="text/javascript"></script>
    <script src="<?php echo $path ?>/scripts/cufon-yui.js" type="text/javascript"></script>
    <script src="<?php echo $path ?>/scripts/cufon-replace.js" type="text/javascript"></script>
    <script src="<?php echo $path ?>/scripts/Myriad_Pro_700.font.js" type="text/javascript"></script>
	<script type="text/javascript">
	var $j = jQuery.noConflict();
		$j(document).ready(function(){
		$j('.menu-nav li').hover(
			function() {
				$j(this).addClass("active");
				$j(this).find('> .ulwrapper').stop(false, true).fadeIn();
			},
			function() {
				$j(this).removeClass("active");        
				$j(this).find('div').stop(false, true).fadeOut('fast');
			}
		);
		$j('.ulwrapper').hover(
			function() {
				$j('.parent').addClass("active_tab");
			},
			function() {
				$j('.parent').removeClass("active_tab");        
			}
		);
		$j('.ulwrapper .ulwrapper').hover(
			function() {
				$j('.ulwrapper .parent').addClass("active_tab2");
			},
			function() {
				$j('.ulwrapper .parent').removeClass("active_tab2");        
			}
		);
	});
	preloadImages([
		'<?php echo $path ?>/images/readon_bg_hover.gif',
		'<?php echo $path ?>/images/button1_hover.gif']);

	</script>


	<!--[if IE 6]><script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script><![endif]-->

	<link rel="stylesheet" href="<?php echo $path ?>/css/constant.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $path ?>/css/template.css" type="text/css" />
	</head>

	<body id="body">

    <div class="main"> 
      <!--header-->
      <div class="header">
      	<div class="head">
            
            <jdoc:include type="modules" name="user1"  />
            <jdoc:include type="modules" name="user3" style="topmenu" />
            
            
        </div>
            
			
           
      </div>
      <jdoc:include type="modules" name="top"  /> 
      <div class="wrapper-content content-top ">
      	<div class="head_top">
        	<h1 id="logo"><a href="<?php echo $_SERVER['PHP_SELF']?>" title="Vertical Penguin | Mobile App Development | Web App Development | Small Business Hosting"><img  title="Vertical Penguin" src="/images/horizontal-logo.jpg" height="65"   alt="Vertical Penguin Logo"  /></a></h1> 
            <jdoc:include type="modules" name="user4"  />
        </div>
        <?php if ($showuser5Column && $option!="com_search" && !$Edit) : ?>
        <div class="border_block">
                   <jdoc:include type="modules" name="user5" />
        </div>
        <?php endif; ?>
        <div class="clear p3"> 
        
          <!--content-->
          <!--right-->
              <?php if ($showrightColumn && !$Edit) : ?>
              <div id="right">
                  <jdoc:include type="modules" name="right" style="wrapper_box" />
              </div>
              <?php endif;?>
             <!--left-->
              <?php if ($showleftColumn && !$Edit) : ?>
              <div id="left">
              	  <jdoc:include type="modules" name="user2" style="wrapper_box2" />
                  <jdoc:include type="modules" name="left" style="wrapper_box" />
                  
              </div>
              <?php endif;?>
              
              <!--center-->
              <div id="content">
              <div class="container" >
                <div class="clear">
                  <?php if ($this->getBuffer('message')) : ?>
                  <div class="error err-space">
                    <jdoc:include type="message" />
                  </div> <?php endif; ?>

                   
                    
                    
                    
                    
                  <jdoc:include type="component" />
                   
                </div>  
                </div>
              </div>
             
              
        </div>
      </div>
       </div>
      
      
      <!--footer-->
        <div class="footer">
        	<div class="foot">
         	<div class="copy"><?php echo JText::_('Powered by ') ?><a href="#">Joomla!</a><?php echo JText::_('. valid ') ?><a href="#">XHTML</a><?php echo JText::_(' and ') ?><a href="#">CSS</a>&nbsp;&nbsp;&nbsp;<!-- {%FOOTER_LINK} --></div>
            </div>
        </div>
        <script type="text/javascript"> Cufon.now(); </script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-553212-4");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>