<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:53 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: index.html.php 2197 2010-11-22 15:26:08Z Raymond_Benc $
 */
 
 

?>
<div id="admincp_search_panel">
	<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.event.add'); ?>" id="admin_create_link">New Category</a>
</div>
<div id="admincp_search_content">
	<div id="js_menu_drop_down" style="display:none;">
		<div class="link_menu dropContent" style="display:block;">
			<ul>
				<li><a href="#" onclick="return $Core.event.action(this, 'edit');"><?php echo Phpfox::getPhrase('event.edit'); ?></a></li>
				<li><a href="#" onclick="return $Core.event.action(this, 'delete');"><?php echo Phpfox::getPhrase('event.delete'); ?></a></li>
			</ul>
		</div>
	</div>
	<div class="table_header">
		Categories
	</div>
	<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.event'); ?>">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
		<div class="table">
			<div class="sortable">
<?php echo $this->_aVars['sCategories']; ?>
			</div>
		</div>
		<div class="table_clear">
			<input type="submit" value="<?php echo Phpfox::getPhrase('event.update_order'); ?>" class="button" />
		</div>
	
</form>

</div>
