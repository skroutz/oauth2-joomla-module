<?php
/**
 * @package    SkroutzEasy module for Joomla 1.5.x and 1.6.x+
 * @copyright  Copyright (c) 2014 Skroutz S.A. - http://www.skroutz.gr
 * @link       http://developers.skroutz.gr/authorization
 * @license    MIT
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// Include the syndicate functions only once
require_once (dirname(__FILE__).DS.'helper.php');

$type 	= modSkroutzEasyHelper::getType();
$return	= modSkroutzEasyHelper::getReturnURL($params, $type);

$logout_hidden_inputs = modSkroutzEasyHelper::getLogoutHiddenInputs($type);

$user =& JFactory::getUser();

require(JModuleHelper::getLayoutPath('mod_skroutzeasy'));
