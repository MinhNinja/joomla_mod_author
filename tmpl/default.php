<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_author
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<div class="author_list <?php echo $moduleclass_sfx; ?>"   >
	<?php if(count($author_list)) : ?>
	<ul>
	<?php foreach($author_list as $author) {
		echo '<li><a href="'.JRoute::_('index.php?option=com_author&view=articles&layout=blog&author_id='.$author->id).'">'. $author->name .'</a></li>' ;
	} ?>
	</ul>
	<?php endif; ?>
</div>
