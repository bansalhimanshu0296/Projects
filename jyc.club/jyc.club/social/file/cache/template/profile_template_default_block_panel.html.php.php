<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:55 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: panel.html.php 414 2009-04-17 23:31:59Z Raymond_Benc $
 */
 
 

?>
<section class="profile_panel_banner">
<?php if (( ! empty ( $this->_aVars['aCoverPhoto']['destination'] ) )): ?>
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('id' => 'js_photo_cover_position','server_id' => $this->_aVars['aCoverPhoto']['server_id'],'path' => 'photo.url_photo','file' => $this->_aVars['aCoverPhoto']['destination'],'suffix' => '_1024','style' => 'position: relative; top:'.$this->_aVars['sLogoPosition'].'px;')); ?>
<?php endif; ?>
	<h1>
		<a href="<?php if (isset ( $this->_aVars['aUser']['link'] ) && ! empty ( $this->_aVars['aUser']['link'] )):  echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aUser']['link']);  else:  echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aUser']['user_name']);  endif; ?>" title="<?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aUser']['full_name']); ?>">
<?php echo Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getLib('phpfox.parse.output')->split(Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aUser']['full_name']), 30), 50, '...'); ?>
		</a>

		<div class="profile_panel_action">
			<ul>
<?php if (Phpfox ::getUserId() == $this->_aVars['aUser']['user_id']): ?>

<?php else: ?>
<?php if (Phpfox ::isModule('mail') && Phpfox ::getService('user.privacy')->hasAccess('' . $this->_aVars['aUser']['user_id'] . '' , 'mail.send_message' )): ?>
				<li><a href="#" class="send_message js_hover_title" onclick="$Core.composeMessage({user_id: <?php echo $this->_aVars['aUser']['user_id']; ?>}); return false;"><span class="js_hover_info"><?php echo Phpfox::getPhrase('profile.send_message'); ?></span></a></li>
<?php endif; ?>
<?php if (Phpfox ::isUser() && Phpfox ::isModule('friend') && Phpfox ::getUserParam('friend.can_add_friends') && ! $this->_aVars['aUser']['is_friend'] && $this->_aVars['aUser']['is_friend_request'] !== 2 || true): ?>
				<li id="js_add_friend_on_profile" class="js_hover_title<?php if (! $this->_aVars['aUser']['is_friend'] && $this->_aVars['aUser']['is_friend_request'] === 3): ?> js_profile_online_friend_request<?php endif; ?>">
					<a href="#" onclick="return $Core.addAsFriend('<?php echo $this->_aVars['aUser']['user_id']; ?>');" title="<?php echo Phpfox::getPhrase('profile.add_to_friends'); ?>" class="add_to_friends">
						<span class="js_hover_info"><?php if (! $this->_aVars['aUser']['is_friend'] && $this->_aVars['aUser']['is_friend_request'] === 3):  echo Phpfox::getPhrase('profile.confirm_friend_request');  else:  echo Phpfox::getPhrase('profile.add_to_friends');  endif; ?></span>
					</a>
				</li>
<?php endif; ?>
<?php if ($this->_aVars['bCanPoke'] && Phpfox ::getService('user.privacy')->hasAccess('' . $this->_aVars['aUser']['user_id'] . '' , 'poke.can_send_poke' )): ?>
				<li id="liPoke">
					<a href="#" id="section_poke" onclick="$Core.box('poke.poke', 400, 'user_id=<?php echo $this->_aVars['aUser']['user_id']; ?>'); return false;" class="poke_user js_hover_title"><span class="js_hover_info"><?php echo Phpfox::getPhrase('poke.poke', array('full_name' => '')); ?></span></a>
				</li>
<?php endif; ?>
<?php (($sPlugin = Phpfox_Plugin::get('profile.template_block_menu_more')) ? eval($sPlugin) : false); ?>
<?php if (Phpfox ::getUserParam('core.can_gift_points')): ?>
				<li>
					<a href="#?call=core.showGiftPoints&amp;height=120&amp;width=400&amp;user_id=<?php echo $this->_aVars['aUser']['user_id']; ?>" class="inlinePopup js_gift_points js_hover_title">
						<span class="js_hover_info"><?php echo Phpfox::getPhrase('core.gift_points'); ?></span>
					</a>
				</li>
<?php endif; ?>
<?php endif; ?>
			</ul>
		</div>
	</h1>
</section>

<?php if ($this->_aVars['bRefreshPhoto']): ?>
	<?php echo '
		<style type="text/css">
			#js_photo_cover_position
			{
				cursor:move;
			}
		</style>
		<script type="text/javascript">
		var sCoverPosition = \'0\';	
		$Behavior.positionCoverPhoto = function(){			
			$(\'#js_photo_cover_position\').draggable(\'destroy\').draggable({
				axis: \'y\',
				cursor: \'move\',	
				stop: function(event, ui){
					var sStop = $(this).position();
					sCoverPosition = sStop.top;			
				}
			});	
		}
		</script>
	'; ?>

<?php endif;  if ($this->_aVars['bRefreshPhoto']): ?>
	<div class="cover_photo_change">
<?php echo Phpfox::getPhrase('user.drag_to_reposition_cover'); ?>
		<form method="post" action="#">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
			<ul class="table_clear_button">
				<li id="js_cover_update_loader_upload" style="display:none;"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'ajax/add.gif','class' => 'v_middle')); ?></li>		
				<li class="js_cover_update_li"><div><input type="button" class="button button_off" value="<?php echo Phpfox::getPhrase('user.cancel_cover_photo'); ?>" name="cancel" onclick="window.location.href='<?php echo Phpfox::getLib('phpfox.url')->makeUrl('profile'); ?>';" /></div></li>
				<li class="js_cover_update_li"><div><input type="button" class="button" value="<?php echo Phpfox::getPhrase('user.save_changes'); ?>" name="save" onclick="$('.js_cover_update_li').hide(); $('#js_cover_update_loader_upload').show(); $.ajaxCall('user.updateCoverPosition', 'position=' + sCoverPosition); return false;" /></div></li>
			</ul>
			<div class="clear"></div>
		
</form>

	</div>
<?php endif; ?>

<?php if (Phpfox ::getUserId() == $this->_aVars['aUser']['user_id']): ?>
<div class="item_bar">
	<div class="item_bar_action_holder">
		<ul>
			<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('user.profile'); ?>"><?php echo Phpfox::getPhrase('profile.edit_profile'); ?></a></li>
<?php if (Phpfox ::getUserParam('profile.can_change_cover_photo')): ?>
			<li>
				<a href="#" id="js_change_cover_photo" onclick="$('#cover_section_menu_drop').toggle(); return false;">
<?php if (empty ( $this->_aVars['aUser']['cover_photo'] )):  echo Phpfox::getPhrase('user.add_a_cover');  else:  echo Phpfox::getPhrase('user.change_cover');  endif; ?>
				</a>
<?php if (Phpfox ::getUserParam('profile.can_change_cover_photo')): ?>
				<div id="cover_section_menu_drop" style="display:none;">
					<ul>
						<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('profile.photo'); ?>"><?php echo Phpfox::getPhrase('user.choose_from_photos'); ?></a></li>
						<li><a href="#" onclick="$('#cover_section_menu_drop').hide(); $Core.box('profile.logo', 500); return false;"><?php echo Phpfox::getPhrase('user.upload_photo'); ?></a></li>
<?php if (! empty ( $this->_aVars['aUser']['cover_photo'] )): ?>
						<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('profile', array('coverupdate' => '1')); ?>"><?php echo Phpfox::getPhrase('user.reposition'); ?></a></li>
						<li><a href="#" onclick="$('#cover_section_menu_drop').hide(); $.ajaxCall('user.removeLogo'); return false;"><?php echo Phpfox::getPhrase('user.remove'); ?></a></li>
<?php endif; ?>
					</ul>
				</div>
<?php endif; ?>
			</li>
<?php endif; ?>
		</ul>
	</div>
</div>
<?php endif; ?>

<div class="profile_panel">
<?php echo $this->_aVars['sProfileImage']; ?>

	<ul class="profile_panel_menu">
<?php if (count((array)$this->_aVars['aProfileLinks'])):  foreach ((array) $this->_aVars['aProfileLinks'] as $this->_aVars['aProfileLink']): ?>
		<li class="<?php if (isset ( $this->_aVars['aProfileLink']['is_selected'] )): ?> active<?php endif; ?>">
			<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aProfileLink']['url']); ?>" class="ajax_link"><?php echo $this->_aVars['aProfileLink']['phrase']; ?></a>
<?php if (isset ( $this->_aVars['aProfileLink']['sub_menu'] ) && is_array ( $this->_aVars['aProfileLink']['sub_menu'] ) && count ( $this->_aVars['aProfileLink']['sub_menu'] )): ?>
<?php endif; ?>
		</li>
<?php endforeach; endif; ?>
	</ul>
</div>

