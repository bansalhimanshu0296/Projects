<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:51 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_User
 * @version 		$Id: index.html.php 2826 2011-08-11 19:41:03Z Raymond_Benc $
 */
 
 

?>
<div id="admincp_search_panel">
	<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.group.add'); ?>" id="admin_create_link">Create User Group</a>
</div>
<div id="admincp_search_content">
	<table>
	<tr>
		<th><?php echo Phpfox::getPhrase('user.title'); ?></th>
		<th><?php echo Phpfox::getPhrase('user.users'); ?></th>
		<th class="action_title">Actions</th>
	</tr>
<?php if (count((array)$this->_aVars['aGroups']['all'])):  foreach ((array) $this->_aVars['aGroups']['all'] as $this->_aVars['iKey'] => $this->_aVars['aGroup']): ?>
	<tr class="checkRow<?php if (is_int ( $this->_aVars['iKey'] / 2 )): ?> tr<?php else:  endif; ?>">
		<td><?php echo Phpfox::getLib('phpfox.parse.output')->clean(Phpfox::getLib('locale')->convert($this->_aVars['aGroup']['title'])); ?></td>
		<td><?php if ($this->_aVars['aGroup']['user_group_id'] == 3): ?>N/A<?php else:  echo $this->_aVars['aGroup']['total_users'];  endif; ?></td>
		<td class="action_list">
<?php if (Phpfox ::getUserParam('user.can_edit_user_group')): ?>
			<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.group.add', array('id' => $this->_aVars['aGroup']['user_group_id'])); ?>">Edit</a>
<?php endif; ?>
			<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.group.activitypoints', array('id' => $this->_aVars['aGroup']['user_group_id'])); ?>">Activity Points</a>
		</td>
	</tr>
<?php endforeach; endif; ?>
	</table>
</div>
