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
<title><?php echo $this->title; ?></title>
</head>
<body>
<div><b><?php echo $this->error->get('code'); ?> - <?php echo $this->error->get('message'); ?></b></div>
<?php if($this->debug) echo '<div>'.$this->renderBacktrace().'</div>'; ?>
</body>
</html>