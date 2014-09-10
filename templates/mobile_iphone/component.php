<?php
/**
 * Mobile Joomla!
 * http://www.mobilejoomla.com
 *
 * @version		0.9.12
 * @license		http://www.gnu.org/licenses/gpl-2.0.htm GNU/GPL
 * @copyright	(C) 2008-2011 MobileJoomla!
 * @date		February 2011
 */
defined('_JEXEC') or die('Restricted access');

defined('_MJ') or die('Incorrect usage of Mobile Joomla.');

$MobileJoomla =& MobileJoomla::getInstance();

$MobileJoomla->showXMLheader();
$MobileJoomla->showDocType();

$base = $this->baseurl."/templates/".$this->template;

?>
<!doctype html>
<html <?php echo $MobileJoomla->getXmlnsString(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php echo $MobileJoomla->getContentString(); ?>"/>
<?php $MobileJoomla->showHead(); ?>
	<style type="text/css" media="screen">@import "<?php echo $base;?>/jqtouch-src/jqtouch/jqtouch.min.css";</style>
	<style type="text/css" media="screen">@import "<?php echo $base;?>/jqtouch-src/themes/apple/theme.min.css";</style>
	<style type="text/css" media="screen">@import "<?php echo $base;?>/mj_iphone.css";</style>
	<script src="<?php echo $base;?>/jqtouch-src/jqtouch/jquery.1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo $base;?>/jqtouch-src/jqtouch/jqtouch.js" type="application/x-javascript" charset="utf-8"></script>
	<script src="<?php echo $base;?>/mj_iphone.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
<div<?php echo ($MobileJoomla->_ishomepage) ? ' id="home"' : '';?> class="current">
<?php $MobileJoomla->showMessage(); ?>
<?php $MobileJoomla->showComponent(); ?>
</div>
</body>
</html>