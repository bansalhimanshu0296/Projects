<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:49 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Admincp
 * @version 		$Id: index.html.php 2826 2011-08-11 19:41:03Z Raymond_Benc $
 */
 
 

?>
<div id="breadcrumb_holder">
	<ul id="breadcrumb_menu" class="menu_manager">
<?php if (count((array)$this->_aVars['aMenus'])):  foreach ((array) $this->_aVars['aMenus'] as $this->_aVars['sType'] => $this->_aVars['aMenusSub']): ?>
		<li<?php if (( $this->_aVars['sType'] == 'main' )): ?> class="active"<?php endif; ?>><a href="#" data-type="<?php echo $this->_aVars['sType']; ?>"><?php echo $this->_aVars['sType']; ?></a></li>
<?php endforeach; endif; ?>
<?php if (count((array)$this->_aVars['aModules'])):  foreach ((array) $this->_aVars['aModules'] as $this->_aVars['sModule'] => $this->_aVars['aMenusSub']): ?>
		<li><a href="#" data-type="<?php echo $this->_aVars['sModule']; ?>"><?php echo $this->_aVars['sModule']; ?></a></li>
<?php endforeach; endif; ?>
	</ul>
</div>
<div id="breadcrumb_content_holder">

	<div id="admincp_search_panel">
		<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.menu.add'); ?>" id="admin_create_link">Create New Menu</a>
	</div>
	<div id="admincp_search_content">
<?php if (count((array)$this->_aVars['aMenus'])):  foreach ((array) $this->_aVars['aMenus'] as $this->_aVars['sType'] => $this->_aVars['aMenusSub']): ?>
			<table class="menu_form is_sortable" cellpadding="0" cellspacing="0"<?php if (( $this->_aVars['sType'] != 'main' )): ?> style="display:none;" <?php endif; ?> data-type="<?php echo $this->_aVars['sType']; ?>" data-ajax="admincp.updateMenuOrder">
				<tr>
					<th class="is_sortable_icon_title"></th>
					<th class="active_title"></th>
					<th><?php echo Phpfox::getPhrase('admincp.menu'); ?></th>
					<th><?php echo Phpfox::getPhrase('admincp.location'); ?></th>
					<th class="action_title"><?php echo Phpfox::getPhrase('admincp.actions'); ?></th>
				</tr>
<?php if (count((array)$this->_aVars['aMenusSub'])):  foreach ((array) $this->_aVars['aMenusSub'] as $this->_aVars['iKey'] => $this->_aVars['aMenu']): ?>
				<?php
						Phpfox::getLib('template')->getBuiltFile('admincp.block.menu.entry');						
						?>
<?php endforeach; endif; ?>
			</table>
<?php endforeach; endif; ?>
<?php if (count((array)$this->_aVars['aModules'])):  foreach ((array) $this->_aVars['aModules'] as $this->_aVars['sModule'] => $this->_aVars['aMenusSub']): ?>
			<table class="menu_form is_sortable" cellpadding="0" cellspacing="0" style="display:none;" data-type="<?php echo $this->_aVars['sModule']; ?>">
				<tr>
					<th class="is_sortable_icon_title"></th>
					<th class="active_title"></th>
					<th><?php echo Phpfox::getPhrase('admincp.menu'); ?></th>
					<th><?php echo Phpfox::getPhrase('admincp.location'); ?></th>
					<th class="action_title"><?php echo Phpfox::getPhrase('admincp.actions'); ?></th>
				</tr>
<?php if (count((array)$this->_aVars['aMenusSub'])):  foreach ((array) $this->_aVars['aMenusSub'] as $this->_aVars['iKey'] => $this->_aVars['aMenu']): ?>
				<?php
						Phpfox::getLib('template')->getBuiltFile('admincp.block.menu.entry');						
						?>
<?php endforeach; endif; ?>
			</table>
<?php endforeach; endif; ?>
	</div>
</div>


