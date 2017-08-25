<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:49 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Admincp
 * @version 		$Id: entry.html.php 1300 2009-12-07 00:39:10Z Raymond_Benc $
 */
 
 

?><tr class="checkRow<?php if (is_int ( $this->_aVars['iKey'] / 2 )): ?> tr<?php else:  endif; ?>">
	<td class="is_sortable_icon" data-sort-id="<?php echo $this->_aVars['aMenu']['menu_id']; ?>"></td>
	<td>
		<div class="js_item_is_active"<?php if (! $this->_aVars['aMenu']['is_active']): ?> style="display:none;"<?php endif; ?>>
		<a href="#?call=admincp.updateMenuActive&amp;id=<?php echo $this->_aVars['aMenu']['menu_id']; ?>&amp;active=0" class="js_item_active_link" title="Enable"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/bullet_green.png','alt' => '')); ?></a>
		</div>
		<div class="js_item_is_not_active"<?php if ($this->_aVars['aMenu']['is_active']): ?> style="display:none;"<?php endif; ?>>
		<a href="#?call=admincp.updateMenuActive&amp;id=<?php echo $this->_aVars['aMenu']['menu_id']; ?>&amp;active=1" class="js_item_active_link" title="Disable"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/bullet_red.png','alt' => '')); ?></a>
		</div>
	</td>
	<td><?php echo $this->_aVars['aMenu']['name']; ?></td>
	<td><?php echo $this->_aVars['aMenu']['url_value']; ?></td>
	<td class="action_list">
			<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.menu.add.', array('id' => $this->_aVars['aMenu']['menu_id'])); ?>"><?php echo Phpfox::getPhrase('admincp.edit'); ?></a>
<?php if ($this->_aVars['aMenu']['total_children'] > 0): ?>
			<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.menu', array('parent' => $this->_aVars['aMenu']['menu_id'])); ?>"><?php echo Phpfox::getPhrase('admincp.manage_children_total_children', array('total_children' => $this->_aVars['aMenu']['total_children'])); ?></a>
<?php endif; ?>
			<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.menu.', array('delete' => $this->_aVars['aMenu']['menu_id'])); ?>" class="is_delete"><?php echo Phpfox::getPhrase('admincp.delete'); ?></a>
	</td>
</tr>
