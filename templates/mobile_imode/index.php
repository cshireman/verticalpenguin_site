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

$MobileJoomla->showDocType();
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="<?php echo $MobileJoomla->getContentString(); ?>">
<?php $MobileJoomla->showHead(); ?>
</head>
<body>
<?php

$modulepos = $MobileJoomla->getPosition('header');
if($modulepos && $this->countModules($modulepos) > 0)
	$MobileJoomla->loadModules($modulepos);
$modulepos = $MobileJoomla->getPosition('header2');
if($modulepos && $this->countModules($modulepos) > 0)
	$MobileJoomla->loadModules($modulepos);
$modulepos = $MobileJoomla->getPosition('header3');
if($modulepos && $this->countModules($modulepos) > 0)
	$MobileJoomla->loadModules($modulepos);

$MobileJoomla->showMessage();

$MobileJoomla->showBreadcrumbs();

$modulepos = $MobileJoomla->getPosition('middle');
if($modulepos && $this->countModules($modulepos) > 0)
	$MobileJoomla->loadModules($modulepos);
$modulepos = $MobileJoomla->getPosition('middle2');
if($modulepos && $this->countModules($modulepos) > 0)
	$MobileJoomla->loadModules($modulepos);
$modulepos = $MobileJoomla->getPosition('middle3');
if($modulepos && $this->countModules($modulepos) > 0)
	$MobileJoomla->loadModules($modulepos);

$MobileJoomla->showComponent();

$modulepos = $MobileJoomla->getPosition('footer');
if($modulepos && $this->countModules($modulepos) > 0)
	$MobileJoomla->loadModules($modulepos);
$modulepos = $MobileJoomla->getPosition('footer2');
if($modulepos && $this->countModules($modulepos) > 0)
	$MobileJoomla->loadModules($modulepos);
$modulepos = $MobileJoomla->getPosition('footer3');
if($modulepos && $this->countModules($modulepos) > 0)
	$MobileJoomla->loadModules($modulepos);

$MobileJoomla->showFooter();
?>
</body>
</html>