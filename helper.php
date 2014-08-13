<?php
/**
 * @package    SkroutzEasy module for Joomla 1.5.x and 1.6.x+
 * @copyright  Copyright (c) 2014 Skroutz S.A. - http://www.skroutz.gr
 * @link       http://developers.skroutz.gr/authorization
 * @license    MIT
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

class modSkroutzEasyHelper
{
	function getReturnURL($params, $type)
	{
		if($itemid =  $params->get($type))
		{
			$menu =& JSite::getMenu();
			$item = $menu->getItem($itemid); //var_dump($menu);die;
			if ($item)
			{
				$url = JRoute::_($item->link.'&Itemid='.$itemid, false);
			}
			else
			{
				// stay on the same page
				$uri = JFactory::getURI();
				$url = $uri->toString(array('path', 'query', 'fragment'));
			}

		}
		else
		{
			// stay on the same page
			$uri = JFactory::getURI();
			$url = $uri->toString(array('path', 'query', 'fragment'));
		}

		return base64_encode($url);
	}

	function getLogoutHiddenInputs($type)
	{
		$version = new JVersion;
		$joomla = $version->getShortVersion();

		if (substr($joomla,0,3) == '1.5') {
			// Joomla 1.5
			$html = "<input type=\"hidden\" name=\"option\" value=\"com_user\" />";
			$html .= "<input type=\"hidden\" name=\"task\" value=\"$type\" />";
		} else {
			// Joomla 1.6, 2.5
			$html = "<input type=\"hidden\" name=\"option\" value=\"com_users\" />";
			$html .= "<input type=\"hidden\" name=\"task\" value=\"user.$type\" />";
		}

		return $html;
	}

	function getType()
	{
		$user = & JFactory::getUser();
		return (!$user->get('guest')) ? 'logout' : 'login';
	}
}
