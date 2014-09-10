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
?>
<html<?php echo $MobileJoomla->getXmlnsString(); ?>>
<head>
<title><?php echo $this->title; ?></title>
</head>
<body>
	<p><b><?php echo $this->error->get('code'); ?> - <?php echo $this->error->get('message'); ?></b></p>
	<?php if($this->debug) echo '<p>'.$this->renderBacktrace().'</p>'; ?>
</body>
</html>