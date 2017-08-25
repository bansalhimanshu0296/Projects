<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:59 pm */ ?>
<?php
/**
 * [NULLED BY DARKGOTH 2014]
 *
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_User
 * @version 		$Id: browse.html.php 6960 2013-12-02 16:17:27Z Miguel_Espinoza $
 * 
 */



 if (defined ( 'PHPFOX_IS_ADMIN_SEARCH' )): ?>
<div id="admincp_search_panel">
	<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.browse'); ?>">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
		<div class="table_header">
<?php echo Phpfox::getPhrase('user.member_search'); ?>
		</div>
		<div class="table">
			<div class="table_left">
<?php echo Phpfox::getPhrase('user.search'); ?>:
			</div>
			<div class="table_right">
<?php echo $this->_aVars['aFilters']['keyword']; ?>
				<div class="extra_info">
<?php echo Phpfox::getPhrase('user.within'); ?>: <?php echo $this->_aVars['aFilters']['type']; ?>
				</div>
			</div>
			<div class="clear"></div>
		</div>

		<div id="js_admincp_search_options">

			<div class="table">
				<div class="table_left">
<?php echo Phpfox::getPhrase('user.user_group'); ?>:
				</div>
				<div class="table_right">
<?php echo $this->_aVars['aFilters']['group']; ?>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table">
				<div class="table_left">
<?php echo Phpfox::getPhrase('user.gender'); ?>:
				</div>
				<div class="table_right">
<?php echo $this->_aVars['aFilters']['gender']; ?>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table">
				<div class="table_left">
<?php echo Phpfox::getPhrase('user.location'); ?>:
				</div>
				<div class="table_right">
<?php echo $this->_aVars['aFilters']['country']; ?>
<?php Phpfox::getBlock('core.country-child', array('country_child_filter' => true,'country_child_type' => 'browse')); ?>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table">
				<div class="table_left">
<?php echo Phpfox::getPhrase('user.city'); ?>:
				</div>
				<div class="table_right">
<?php echo $this->_aVars['aFilters']['city']; ?>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table">
				<div class="table_left">
<?php echo Phpfox::getPhrase('user.zip_postal_code'); ?>:
				</div>
				<div class="table_right">
<?php echo $this->_aVars['aFilters']['zip']; ?>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table">
				<div class="table_left">
<?php echo Phpfox::getPhrase('user.ip_address'); ?>:
				</div>
				<div class="table_right">
<?php echo $this->_aVars['aFilters']['ip']; ?>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table">
				<div class="table_left">
<?php echo Phpfox::getPhrase('user.age_group'); ?>:
				</div>
				<div class="table_right">
<?php echo $this->_aVars['aFilters']['from']; ?> and <?php echo $this->_aVars['aFilters']['to']; ?>
				</div>
				<div class="clear"></div>
			</div>
			<div class="table">
				<div class="table_left">
<?php echo Phpfox::getPhrase('user.show_members'); ?>:
				</div>
				<div class="table_right">
<?php echo $this->_aVars['aFilters']['status']; ?>
				</div>
				<div class="clear"></div>
			</div>
<?php if (count((array)$this->_aVars['aCustomFields'])):  foreach ((array) $this->_aVars['aCustomFields'] as $this->_aVars['aCustomField']): ?>
				<?php
						Phpfox::getLib('template')->getBuiltFile('custom.block.foreachcustom');						
						?>
<?php endforeach; endif; ?>
			<div class="table">
				<div class="table_left">
<?php echo Phpfox::getPhrase('user.sort_results_by'); ?>:
				</div>
				<div class="table_right">
<?php echo $this->_aVars['aFilters']['sort']; ?>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		<div class="table_clear">
			<input type="submit" value="<?php echo Phpfox::getPhrase('user.search'); ?>" class="button" name="search[submit]" />
		</div>
	
</form>

</div>

<div id="admincp_search_content">
	<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('current'); ?>">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
		<table cellpadding="0" cellspacing="0" <?php if (! Phpfox ::getParam('user.randomize_featured_members') && isset ( $this->_aVars['bShowFeatured'] ) && $this->_aVars['bShowFeatured'] == 1): ?> id="js_drag_drop"<?php endif; ?>>
		<tr>
			<th style="width:10px;"><input type="checkbox" name="val[id]" value="" id="js_check_box_all" class="main_checkbox" /></th>
			<th style="width:20px;"></th>
			<th><?php echo Phpfox::getPhrase('user.user_id'); ?></th>
			<th><?php echo Phpfox::getPhrase('user.photo'); ?></th>
			<th><?php echo Phpfox::getPhrase('user.display_name'); ?></th>
			<th><?php echo Phpfox::getPhrase('user.email_address'); ?></th>
			<th><?php echo Phpfox::getPhrase('user.group'); ?></th>
			<th><?php echo Phpfox::getPhrase('user.last_activity'); ?></th>
		</tr>
<?php if (count((array)$this->_aVars['aUsers'])):  $this->_aPhpfoxVars['iteration']['users'] = 0;  foreach ((array) $this->_aVars['aUsers'] as $this->_aVars['iKey'] => $this->_aVars['aUser']):  $this->_aPhpfoxVars['iteration']['users']++; ?>

		<tr class="checkRow<?php if (is_int ( $this->_aVars['iKey'] / 2 )): ?> tr<?php else:  endif; ?>" id="js_user_<?php echo $this->_aVars['aUser']['user_id']; ?>">
			<td>
<?php if ($this->_aVars['aUser']['user_group_id'] == ADMIN_USER_ID && Phpfox ::getUserBy('user_group_id') != ADMIN_USER_ID): ?>

<?php else: ?>
				<input type="checkbox" name="id[]" class="checkbox" value="<?php echo $this->_aVars['aUser']['user_id']; ?>" id="js_id_row<?php echo $this->_aVars['aUser']['user_id']; ?>" />

<?php endif; ?>
			</td>
<?php if (! Phpfox ::getParam('user.randomize_featured_members') && isset ( $this->_aVars['bShowFeatured'] ) && $this->_aVars['bShowFeatured'] == 1): ?>
			<td class="drag_handle"><input type="hidden" name="val[ordering][<?php echo $this->_aVars['aUser']['user_id']; ?>]" value="<?php echo $this->_aVars['aUser']['featured_order']; ?>" /></td>
<?php endif; ?>
			<td>
				<a href="#" class="js_drop_down_link" title="<?php echo Phpfox::getPhrase('user.manage'); ?>"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/bullet_arrow_down.png','alt' => '')); ?></a>
				<div class="link_menu">
					<ul>
<?php if ($this->_aVars['aUser']['user_group_id'] == ADMIN_USER_ID && Phpfox ::getUserBy('user_group_id') != ADMIN_USER_ID): ?>

<?php else: ?>
						<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.add', array('id' => $this->_aVars['aUser']['user_id'])); ?>"><?php echo Phpfox::getPhrase('user.edit_user'); ?></a></li>
<?php endif; ?>
<?php if ($this->_aVars['aUser']['view_id'] == '1'): ?>
						<li class="js_user_pending_<?php echo $this->_aVars['aUser']['user_id']; ?>">
							<a href="#" onclick="$.ajaxCall('user.userPending', 'type=1&amp;user_id=<?php echo $this->_aVars['aUser']['user_id']; ?>'); return false;">
<?php echo Phpfox::getPhrase('user.approve_user'); ?>
							</a>
						</li>
						<li class="js_user_pending_<?php echo $this->_aVars['aUser']['user_id']; ?>">
							<a href="#" onclick="tb_show('<?php echo Phpfox::getPhrase('user.deny_user', array('phpfox_squote' => true)); ?>', $.ajaxBox('user.showDenyUser', 'height=240&amp;width=400&amp;iUser=<?php echo $this->_aVars['aUser']['user_id']; ?>'));return false;">
<?php echo Phpfox::getPhrase('user.deny_user'); ?>
							</a>
						</li>
						<!-- onclick="" -->
<?php endif; ?>
						<li><div  class="js_feature_<?php echo $this->_aVars['aUser']['user_id']; ?>"><?php if (! isset ( $this->_aVars['aUser']['is_featured'] ) || $this->_aVars['aUser']['is_featured'] < 0): ?><a href="#" onclick="$.ajaxCall('user.feature', 'user_id=<?php echo $this->_aVars['aUser']['user_id']; ?>&amp;feature=1'); return false;"><?php echo Phpfox::getPhrase('user.feature_user');  else: ?><a href="#" onclick="$.ajaxCall('user.feature', 'user_id=<?php echo $this->_aVars['aUser']['user_id']; ?>&amp;feature=0'); return false;"><?php echo Phpfox::getPhrase('user.unfeature_user');  endif; ?></a></div></li>
<?php if (( isset ( $this->_aVars['aUser']['pendingMail'] ) && $this->_aVars['aUser']['pendingMail'] != '' ) || ( isset ( $this->_aVars['aUser']['unverified'] ) && $this->_aVars['aUser']['unverified'] > 0 )): ?>
							<li><div class="js_verify_email_<?php echo $this->_aVars['aUser']['user_id']; ?>"> <a href="#" onclick="$.ajaxCall('user.verifySendEmail', 'iUser=<?php echo $this->_aVars['aUser']['user_id']; ?>'); return false;"><?php echo Phpfox::getPhrase('user.resend_verification_mail'); ?></a></div></li>
							<li><div class="js_verify_email_<?php echo $this->_aVars['aUser']['user_id']; ?>"> <a href="#" onclick="$.ajaxCall('user.verifyEmail', 'iUser=<?php echo $this->_aVars['aUser']['user_id']; ?>'); return false;"><?php echo Phpfox::getPhrase('user.verify_this_user'); ?></a></div></li>
<?php endif; ?>
<?php if ($this->_aVars['aUser']['user_group_id'] == ADMIN_USER_ID && Phpfox ::getUserBy('user_group_id') != ADMIN_USER_ID): ?>

<?php else: ?>
						<li id="js_ban_<?php echo $this->_aVars['aUser']['user_id']; ?>">
<?php if ($this->_aVars['aUser']['is_banned']): ?>
								<a href="#" onclick="$.ajaxCall('user.ban', 'user_id=<?php echo $this->_aVars['aUser']['user_id']; ?>&amp;type=0'); return false;">
<?php echo Phpfox::getPhrase('user.un_ban_user'); ?>
								</a>
<?php else: ?>
								<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.ban', array('user' => $this->_aVars['aUser']['user_id'])); ?>">
<?php echo Phpfox::getPhrase('user.ban_user'); ?>
								</a>
<?php endif; ?>
						</li>
<?php endif; ?>
<?php if (Phpfox ::getUserParam('user.can_delete_others_account')): ?>
<?php if ($this->_aVars['aUser']['user_group_id'] == ADMIN_USER_ID && Phpfox ::getUserBy('user_group_id') != ADMIN_USER_ID): ?>

<?php else: ?>
						    <li>
							<div class="user_delete">
							    <a href="#" onclick="tb_show('<?php echo Phpfox::getPhrase('user.delete_user', array('phpfox_squote' => true)); ?>', $.ajaxBox('user.deleteUser', 'height=240&amp;width=400&amp;iUser=<?php echo $this->_aVars['aUser']['user_id']; ?>'));return false;" title="<?php echo Phpfox::getPhrase('user.delete_user_full_name', array('full_name' => Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aUser']['full_name']))); ?>"><?php echo Phpfox::getPhrase('user.delete_user'); ?></a></div></li>
<?php endif; ?>
						
<?php endif; ?>
<?php if (Phpfox ::getUserParam('user.can_member_snoop')): ?>
							<li><div class="user_delete"><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.snoop', array('user' => $this->_aVars['aUser']['user_id'])); ?>" ><?php echo Phpfox::getPhrase('user.log_in_as_this_user'); ?></a></div></li>
<?php endif; ?>
					</ul>
				</div>
			</td>
			<td>#<?php echo $this->_aVars['aUser']['user_id']; ?></td>
			<td><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aUser'],'suffix' => '_50_square','max_width' => 50,'max_height' => 50)); ?></td>
			<td><?php echo '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aUser']['user_name'] . '"><a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aUser']['user_name'], ((empty($this->_aVars['aUser']['user_name']) && isset($this->_aVars['aUser']['profile_page_id'])) ? $this->_aVars['aUser']['profile_page_id'] : null))) . '">' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aUser']['user_id'], $this->_aVars['aUser']['full_name']), Phpfox::getParam('user.maximum_length_for_full_name')) . '</a></span>'; ?></td>
			<td><a href="mailto:<?php echo $this->_aVars['aUser']['email']; ?>"><?php if (( isset ( $this->_aVars['aUser']['pendingMail'] ) && $this->_aVars['aUser']['pendingMail'] != '' )): ?> <?php echo $this->_aVars['aUser']['pendingMail']; ?> <?php else: ?> <?php echo $this->_aVars['aUser']['email']; ?> <?php endif; ?></a><?php if (isset ( $this->_aVars['aUser']['unverified'] ) && $this->_aVars['aUser']['unverified'] > 0): ?> <span class="js_verify_email_<?php echo $this->_aVars['aUser']['user_id']; ?>" onclick="$.ajaxCall('user.verifyEmail', 'iUser=<?php echo $this->_aVars['aUser']['user_id']; ?>');"><?php echo Phpfox::getPhrase('user.verify'); ?></span><?php endif; ?></td>
			<td>
<?php if (( $this->_aVars['aUser']['status_id'] == 1 )): ?>
				<div class="js_verify_email_<?php echo $this->_aVars['aUser']['user_id']; ?>"><?php echo Phpfox::getPhrase('user.pending_email_verification'); ?></div>
<?php endif; ?>
<?php if (Phpfox ::getParam('user.approve_users') && $this->_aVars['aUser']['view_id'] == '1'): ?>
				<span id="js_user_pending_group_<?php echo $this->_aVars['aUser']['user_id']; ?>"><?php echo Phpfox::getPhrase('user.pending_approval'); ?></span>
<?php elseif ($this->_aVars['aUser']['view_id'] == '2'): ?>
<?php echo Phpfox::getPhrase('user.not_approved'); ?>
<?php else: ?>
<?php echo Phpfox::getLib('locale')->convert($this->_aVars['aUser']['user_group_title']); ?>
<?php endif; ?>
			</td>
			<td>
<?php if ($this->_aVars['aUser']['last_activity'] > 0): ?>
<?php echo Phpfox::getTime(Phpfox::getParam('core.profile_time_stamps'), $this->_aVars['aUser']['last_activity']); ?>
<?php endif; ?>
<?php if (! empty ( $this->_aVars['aUser']['last_ip_address'] )): ?>
				<div class="p_4">
					(<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.core.ip', array('search' => $this->_aVars['aUser']['last_ip_address_search'])); ?>" title="<?php echo Phpfox::getPhrase('user.view_all_the_activity_from_this_ip'); ?>"><?php echo $this->_aVars['aUser']['last_ip_address']; ?></a>)
				</div>
<?php endif; ?>
			</td>
		</tr>
<?php endforeach; endif; ?>
		</table>
		<div class="table_clear table_hover_action">
			<input type="submit" name="approve" value="<?php echo Phpfox::getPhrase('user.approve'); ?>" class="button sJsCheckBoxButton disabled" disabled="true" />
			<input type="submit" name="ban" value="<?php echo Phpfox::getPhrase('user.ban'); ?>" class="sJsConfirm button sJsCheckBoxButton disabled" disabled="true" />
			<input type="submit" name="unban" value="<?php echo Phpfox::getPhrase('user.un_ban'); ?>" class="button sJsCheckBoxButton disabled" disabled="true" />
			<input type="submit" name="verify" value="<?php echo Phpfox::getPhrase('user.verify'); ?>" class="button sJsCheckBoxButton disabled" disabled="true" />
			<input type="submit" name="resend-verify" value="<?php echo Phpfox::getPhrase('user.resend_verification_mail'); ?>" class="button sJsCheckBoxButton disabled" disabled="true" />
			<input type="submit" name="delete" value="<?php echo Phpfox::getPhrase('user.delete'); ?>" class="sJsConfirm button sJsCheckBoxButton disabled" disabled="true" />
		</div>
	
</form>

</div>

<?php if (!isset($this->_aVars['aPager'])): Phpfox::getLib('pager')->set(array('page' => Phpfox::getLib('request')->getInt('page'), 'size' => Phpfox::getLib('search')->getDisplay(), 'count' => Phpfox::getLib('search')->getCount())); endif;  $this->getLayout('pager'); ?>

<?php else: ?>

<?php if (count ( $this->_aVars['aUsers'] )):  if (count((array)$this->_aVars['aUsers'])):  $this->_aPhpfoxVars['iteration']['users'] = 0;  foreach ((array) $this->_aVars['aUsers'] as $this->_aVars['aUser']):  $this->_aPhpfoxVars['iteration']['users']++; ?>

<div itemscope itemtype="http://schema.org/Person" class="user_browse_holder">
	<meta itemprop="url" content="<?php echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aUser']['user_name']); ?>" />
		<div class="js_parent_user" id="js_parent_user_<?php echo $this->_aVars['aUser']['user_id']; ?>">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aUser'],'suffix' => '_120_square','max_width' => 120,'max_height' => 120)); ?>
			<div class="user_browse_user">
<?php echo '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aUser']['user_name'] . '"><a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aUser']['user_name'], ((empty($this->_aVars['aUser']['user_name']) && isset($this->_aVars['aUser']['profile_page_id'])) ? $this->_aVars['aUser']['profile_page_id'] : null))) . '">' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aUser']['user_id'], $this->_aVars['aUser']['full_name']), 50, '...') . '</a></span>'; ?>
			</div>
		</div>
</div>
<?php endforeach; endif; ?>
<div class="clear"></div>

<?php if (! PHPFOX_IS_AJAX): ?>
<div id="js_view_more_users"></div>
<?php endif; ?>

<?php if (!isset($this->_aVars['aPager'])): Phpfox::getLib('pager')->set(array('page' => Phpfox::getLib('request')->getInt('page'), 'size' => Phpfox::getLib('search')->getDisplay(), 'count' => Phpfox::getLib('search')->getCount())); endif;  $this->getLayout('pager'); ?>

<?php else: ?>
<div class="extra_info">
<?php if ($this->_aVars['sView'] == 'online'): ?>
<?php echo Phpfox::getPhrase('user.there_are_no_members_online');  elseif ($this->_aVars['sView'] == 'top'): ?>
<?php echo Phpfox::getPhrase('user.no_top_members_found');  elseif ($this->_aVars['sView'] == 'featured'): ?>
<?php echo Phpfox::getPhrase('user.no_featured_members');  else:  if (isset ( $this->_aVars['aCallback']['no_member_message'] )): ?>
<?php echo $this->_aVars['aCallback']['no_member_message'];  else: ?>
<?php echo Phpfox::getPhrase('user.unable_to_find_any_members_with_the_current_browse_criteria'); ?>
	<ul class="action">
		<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('user.browse'); ?>"><?php echo Phpfox::getPhrase('user.reset_browse_criteria'); ?></a></li>
	</ul>
<?php endif;  endif; ?>
</div>
<?php endif;  endif; ?>

