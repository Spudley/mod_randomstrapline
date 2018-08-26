<?php
/**
 * @package  mod_randomstrapline
 *
 * @copyright   Copyright (C) 2018 Simon Champion.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$htmlclass = $params->get('htmlclass','strapline');
$straplines = preg_split("~[\n\r]+~",$params->get('straplines'));
shuffle($straplines);
$strapline = array_pop($straplines);

require JModuleHelper::getLayoutPath('mod_randomstrapline', 'default');

