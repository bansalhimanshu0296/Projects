<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:48 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Page
 * @version 		$Id: index.html.php 1194 2009-10-18 12:43:38Z Raymond_Benc $
 */
 
 

?>
<div id="admincp_search_panel">
	<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.page.add'); ?>" id="admin_create_link">Create New Page</a>
</div>

<div id="admincp_search_content">
<?php if (count ( $this->_aVars['aPages'] )): ?>
	<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.page'); ?>">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
		<table cellpadding="0" cellspacing="0">
		<tr>
			<th>Name</th>
			<th><?php echo Phpfox::getPhrase('page.created'); ?></th>
			<th><?php echo Phpfox::getPhrase('page.active'); ?></th>
			<th class="action_title"><?php echo Phpfox::getPhrase('page.actions'); ?></th>
		</tr>
<?php if (count((array)$this->_aVars['aPages'])):  foreach ((array) $this->_aVars['aPages'] as $this->_aVars['iKey'] => $this->_aVars['aPage']): ?>
		<tr class="checkRow<?php if (is_int ( $this->_aVars['iKey'] / 2 )): ?> tr<?php else:  endif; ?>">
			<td><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aPage']['title_url']); ?>" class="targetBlank"><?php if ($this->_aVars['aPage']['is_phrase']):  echo Phpfox::getPhrase($this->_aVars['aPage']['title']);  else:  echo $this->_aVars['aPage']['title'];  endif; ?></a></td>
			<td><?php echo Phpfox::getTime(Phpfox::getParam('core.global_update_time'), $this->_aVars['aPage']['added']); ?></td>
			<td>
				<div><input type="hidden" name="val[<?php echo $this->_aVars['aPage']['page_id']; ?>][title_url]" value="<?php echo $this->_aVars['aPage']['title_url']; ?>" /></div>
				<div><input type="checkbox" name="val[<?php echo $this->_aVars['aPage']['page_id']; ?>][is_active]" value="1" <?php if ($this->_aVars['aPage']['is_active']): ?>checked="checked" <?php endif; ?>/></div>
			</td>
			<td class="action_list">
					<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.page.add.', array('id' => $this->_aVars['aPage']['page_id'])); ?>">Edit</a>
<?php if ($this->_aVars['aPage']['menu_id']): ?>
					<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.menu.add.', array('id' => $this->_aVars['aPage']['menu_id'])); ?>"><?php echo Phpfox::getPhrase('page.edit_page_menu'); ?></a>
<?php endif; ?>
					<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.page.', array('delete' => $this->_aVars['aPage']['page_id'])); ?>" class="is_delete"><?php echo Phpfox::getPhrase('page.delete'); ?></a>
			</td>
		</tr>
<?php endforeach; endif; ?>
		</table>
		<div class="table_bottom">
			<input type="submit" value="<?php echo Phpfox::getPhrase('admincp.update'); ?>" class="button" />
		</div>
	
</form>

<?php else: ?>
<?php echo Phpfox::getPhrase('page.no_pages_have_been_added'); ?>
<?php endif; ?>
</div>
