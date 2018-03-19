<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_author
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');

$group_id = (int) $params->get('author_group') ;

$db = JFactory::getDbo();
$db->setQuery(
	'SELECT u.`id`,u.`name` FROM #__users u '.
	'LEFT JOIN #__user_usergroup_map AS m ON m.user_id=u.id '.
	'WHERE m.group_id='.$db->quote($group_id)
);

$author_list = $db->loadObjectList();

require JModuleHelper::getLayoutPath('mod_author', $params->get('layout', 'default'));
