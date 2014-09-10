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

function modChrome_chtml($module, &$params, &$attribs)
{
	if(!empty($module->content))
	{
		?>
		<div><?php
		if($module->showtitle)
		{
			?><h3><?php echo $module->title; ?></h3><?php

		}
		echo $module->content;
		?></div><?php

	}
}
