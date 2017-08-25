<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:51 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond_Benc
 * @package 		Phpfox
 * @version 		$Id: index.html.php 1601 2010-05-30 05:20:59Z Raymond_Benc $
 */
 
 

?>
<div id="admincp_search_panel">
	<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.promotion.add'); ?>" id="admin_create_link">Create Promotion</a>
</div>
<div id="admincp_search_content">
<?php if (count ( $this->_aVars['aPromotions'] )): ?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo Phpfox::getPhrase('user.user_group'); ?></th>
			<th><?php echo Phpfox::getPhrase('user.upgraded_user_group'); ?></th>
			<th><?php echo Phpfox::getPhrase('user.total_activity'); ?></th>
			<th><?php echo Phpfox::getPhrase('user.total_days_registered'); ?></th>
			<th>Created On</th>
			<th class="action_title"></th>
		</tr>
<?php if (count((array)$this->_aVars['aPromotions'])):  $this->_aPhpfoxVars['iteration']['promotions'] = 0;  foreach ((array) $this->_aVars['aPromotions'] as $this->_aVars['aPromotion']):  $this->_aPhpfoxVars['iteration']['promotions']++; ?>

		<tr<?php if (is_int ( $this->_aPhpfoxVars['iteration']['promotions'] / 2 )): ?> class="tr"<?php endif; ?>>
			<td><?php echo Phpfox::getLib('locale')->convert($this->_aVars['aPromotion']['user_group_title']); ?></td>
			<td><?php echo Phpfox::getLib('locale')->convert($this->_aVars['aPromotion']['upgrade_user_group_title']); ?></td>
			<td><?php echo $this->_aVars['aPromotion']['total_activity']; ?></td>
			<td><?php echo $this->_aVars['aPromotion']['total_day']; ?></td>
			<td><?php echo Phpfox::getTime(Phpfox::getParam('core.global_update_time'), $this->_aVars['aPromotion']['time_stamp']); ?></td>
			<td class="action_list">
				<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.promotion.add', array('id' => $this->_aVars['aPromotion']['promotion_id'])); ?>"><?php echo Phpfox::getPhrase('user.edit'); ?></a>
				<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.promotion', array('delete' => $this->_aVars['aPromotion']['promotion_id'])); ?>" onclick="return confirm('<?php echo Phpfox::getPhrase('core.are_you_sure', array('phpfox_squote' => true)); ?>');" class="is_delete"><?php echo Phpfox::getPhrase('user.delete'); ?></a>
			</td>
		</tr>
<?php endforeach; endif; ?>
	</table>
<?php else: ?>
	<div class="message">
<?php echo Phpfox::getPhrase('user.no_promotions_found'); ?>
	</div>
<?php endif; ?>
</div>
