<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:54 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Photo
 * @version 		$Id: view.html.php 6489 2013-08-22 08:55:19Z Fern $
 */
 
 

?>

<?php if (! $this->_aVars['bIsTheater']): ?>
<div id="view_photo_click_image_holder"></div>
<a rel="<?php echo $this->_aVars['aForms']['photo_id']; ?>" class="thickbox photo_holder_image view_photo_click_image" href="<?php echo $this->_aVars['sCurrentPhotoUrl']; ?>"></a>
<?php else: ?>
<div id="js_current_page_url" style="display:none;"><?php if ($this->_aVars['iForceAlbumId'] > 0): ?>albumid_<?php echo $this->_aVars['iForceAlbumId'];  else:  if (isset ( $this->_aVars['feedUserId'] )): ?>userid_<?php echo $this->_aVars['feedUserId']; ?>/<?php endif;  endif; ?></div>

<?php if (isset ( $this->_aVars['aForms']['view_id'] ) && $this->_aVars['aForms']['view_id'] == 1): ?>
<div class="message js_moderation_off">
<?php echo Phpfox::getPhrase('photo.image_is_pending_approval'); ?>
</div>
<?php endif; ?>

<div id="photo_view_theater_mode" class="photo_view_box_holder">

	<div class="photo_view_box_image photo_holder_image" <?php if (isset ( $this->_aVars['aPhotoStream']['next']['photo_id'] )): ?>onclick="tb_show('', '<?php echo $this->_aVars['aPhotoStream']['next']['link'];  if ($this->_aVars['iForceAlbumId'] > 0): ?>albumid_<?php echo $this->_aVars['iForceAlbumId'];  else:  if (isset ( $this->_aVars['feedUserId'] )): ?>userid_<?php echo $this->_aVars['feedUserId']; ?>/<?php endif;  endif; ?>', this);" rel="<?php echo $this->_aVars['aPhotoStream']['next']['photo_id']; ?>"<?php endif; ?>>		
		 <div id="photo_view_tag_photo">
			<a href="#" id="js_tag_photo"><?php echo Phpfox::getPhrase('photo.tag_this_photo'); ?></a>
		</div>
		<div id="photo_view_ajax_loader"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'ajax/loader.gif')); ?></div>
<?php if ($this->_aVars['aPhotoStream']['total'] > 1): ?>
			<div class="photo_next_previous">
				<ul>
<?php if (isset ( $this->_aVars['aPhotoStream']['previous']['photo_id'] )): ?>
				<li class="previous"><a href="<?php echo $this->_aVars['aPhotoStream']['previous']['link'];  if ($this->_aVars['iForceAlbumId'] > 0): ?>albumid_<?php echo $this->_aVars['iForceAlbumId'];  else:  if (isset ( $this->_aVars['feedUserId'] )): ?>userid_<?php echo $this->_aVars['feedUserId']; ?>/<?php endif;  endif; ?>"<?php if ($this->_aVars['bIsTheater']): ?> class="thickbox photo_holder_image" rel="<?php echo $this->_aVars['aPhotoStream']['previous']['photo_id']; ?>"<?php endif; ?>><?php echo Phpfox::getPhrase('photo.previous'); ?></a></li>
<?php endif; ?>

<?php if (isset ( $this->_aVars['aPhotoStream']['next']['photo_id'] )): ?>
				<li class="next"><a href="<?php echo $this->_aVars['aPhotoStream']['next']['link'];  if ($this->_aVars['iForceAlbumId'] > 0): ?>albumid_<?php echo $this->_aVars['iForceAlbumId'];  else:  if (isset ( $this->_aVars['feedUserId'] )): ?>userid_<?php echo $this->_aVars['feedUserId']; ?>/<?php endif;  endif; ?>"<?php if ($this->_aVars['bIsTheater']): ?> class="thickbox photo_holder_image" rel="<?php echo $this->_aVars['aPhotoStream']['next']['photo_id']; ?>"<?php endif; ?>><?php echo Phpfox::getPhrase('photo.next'); ?></a></li>
<?php endif; ?>
				</ul>
				<div class="clear"></div>
			</div>
<?php endif; ?>
		
			<div class="photo_view_box_image_holder">
<?php if (isset ( $this->_aVars['aPhotoStream']['next']['photo_id'] )): ?>
				<a href="<?php echo $this->_aVars['aPhotoStream']['next']['link'];  if ($this->_aVars['iForceAlbumId'] > 0): ?>albumid_<?php echo $this->_aVars['iForceAlbumId'];  else:  if (isset ( $this->_aVars['feedUserId'] )): ?>userid_<?php echo $this->_aVars['feedUserId']; ?>/<?php endif;  endif; ?>"<?php if ($this->_aVars['bIsTheater']): ?> class="thickbox photo_holder_image" rel="<?php echo $this->_aVars['aPhotoStream']['next']['photo_id']; ?>"<?php endif; ?>>
<?php endif; ?>
<?php if ($this->_aVars['aForms']['user_id'] == Phpfox ::getUserId()): ?>
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('id' => 'js_photo_view_image','server_id' => $this->_aVars['aForms']['server_id'],'path' => 'photo.url_photo','file' => $this->_aVars['aForms']['destination'],'suffix' => '_1024','max_width' => 1024,'max_height' => 1024,'title' => $this->_aVars['aForms']['title'],'time_stamp' => true,'onmouseover' => "$('.photo_next_previous .next a').addClass('is_hover_active');",'onmouseout' => "$('.photo_next_previous .next a').removeClass('is_hover_active');")); ?>
<?php else: ?>
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('id' => 'js_photo_view_image','server_id' => $this->_aVars['aForms']['server_id'],'path' => 'photo.url_photo','file' => $this->_aVars['aForms']['destination'],'suffix' => '_1024','max_width' => 1024,'max_height' => 1024,'title' => $this->_aVars['aForms']['title'],'onmouseover' => "$('.photo_next_previous .next a').addClass('is_hover_active');",'onmouseout' => "$('.photo_next_previous .next a').removeClass('is_hover_active');")); ?>
<?php endif; ?>
<?php if (isset ( $this->_aVars['aPhotoStream']['next']['photo_id'] )): ?>
				</a>
<?php endif; ?>
			</div>
		</div>

		<div class="photo_box_content">
			<div class="photo_view_in_photo">
				<b><?php echo Phpfox::getPhrase('photo.in_this_photo'); ?>:</b> <span id="js_photo_in_this_photo"></span>
			</div>

			<div class="photo_view_box_comment">
<?php (($sPlugin = Phpfox_Plugin::get('photo.template_controller_view_view_box_comment_1')) ? eval($sPlugin) : false); ?>
				<div class="photo_view_box_comment_padding">
<?php (($sPlugin = Phpfox_Plugin::get('photo.template_controller_view_view_box_comment_2')) ? eval($sPlugin) : false); ?>
					<div id="js_photo_view_box_title">
<?php (($sPlugin = Phpfox_Plugin::get('photo.template_controller_view_view_box_comment_3')) ? eval($sPlugin) : false); ?>
						<div class="row_title">
							<div class="row_title_image">
								<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aForms']['user_name']); ?>" class="no_ajax_link"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aForms'],'suffix' => '_50_square','max_width' => 50,'max_height' => 50,'no_link' => true)); ?></a>
							</div>
							<div class="row_title_info" style="position:relative;">
								<div class="photo_view_box_user"><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aForms']['user_name']); ?>" class="no_ajax_link"><?php echo Phpfox::getLib('phpfox.parse.output')->shorten($this->_aVars['aForms']['full_name'], 50); ?></a></div>
								<ul class="extra_info_middot">
									<li><?php echo Phpfox::getLib('date')->convertTime($this->_aVars['aForms']['time_stamp']); ?></li>
<?php if (! empty ( $this->_aVars['aForms']['album_id'] )): ?>
									<li>&middot;</li>
									<li><?php echo Phpfox::getPhrase('photo.in'); ?> <a href="<?php echo $this->_aVars['aForms']['album_url']; ?>"><?php echo Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getLib('phpfox.parse.output')->split(Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['album_title']), 45), 75, '...'); ?></a> </li>
<?php endif; ?>
								</ul>
							</div>
						</div>

<?php if (( Phpfox ::getUserParam('photo.can_edit_own_photo') && $this->_aVars['aForms']['user_id'] == Phpfox ::getUserId()) || Phpfox ::getUserParam('photo.can_edit_other_photo') || ( Phpfox ::getUserParam('photo.can_delete_own_photo') && $this->_aVars['aForms']['user_id'] == Phpfox ::getUserId()) || Phpfox ::getUserParam('photo.can_delete_other_photos')): ?>
						<div class="item_bar">
							<div class="item_bar_action_holder">
<?php if ($this->_aVars['aForms']['view_id'] == '1' && Phpfox ::getUserParam('photo.can_approve_photos')): ?>
								<a href="#" class="item_bar_approve item_bar_approve_image" onclick="return false;" style="display:none;" id="js_item_bar_approve_image"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'ajax/add.gif')); ?></a>
								<a href="#" class="item_bar_approve" onclick="$(this).hide(); $('#js_item_bar_approve_image').show(); $.ajaxCall('photo.approve', 'inline=true&amp;id=<?php echo $this->_aVars['aForms']['photo_id']; ?>'); return false;"><?php echo Phpfox::getPhrase('photo.approve'); ?></a>
<?php endif; ?>
								<a href="#" class="item_bar_action"><span><?php echo Phpfox::getPhrase('photo.actions'); ?></span></a>
								<ul>
<?php Phpfox::getBlock('photo.menu', array()); ?>
								</ul>
							</div>
						</div>
<?php endif; ?>

<?php if ($this->_aVars['aForms']['description']): ?>
						<div id="js_photo_description_<?php echo $this->_aVars['aForms']['photo_id']; ?>" class="extra_info" itemprop="description">
<?php echo Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getLib('phpfox.parse.output')->parse($this->_aVars['aForms']['description']), 200, 'photo.read_more', true); ?>
						</div>
<?php endif; ?>
					</div>

<?php if (Phpfox ::isModule('tag') && isset ( $this->_aVars['aForms']['tag_list'] )): ?>
<?php Phpfox::getBlock('tag.item', array('sType' => 'photo','sTags' => $this->_aVars['aForms']['tag_list'],'iItemId' => $this->_aVars['aForms']['photo_id'],'iUserId' => $this->_aVars['aForms']['user_id'])); ?>
<?php endif; ?>

<?php (($sPlugin = Phpfox_Plugin::get('photo.template_default_controller_view_extra_info')) ? eval($sPlugin) : false); ?>

					<div id="js_photo_view_comment_holder" <?php if ($this->_aVars['aForms']['view_id'] != 0): ?>style="display:none;" class="js_moderation_on"<?php endif; ?>>
<?php Phpfox::getBlock('feed.comment', array()); ?>
				</div>
			</div>
		</div>

	</div>
</div>

<script type="text/javascript">
function customPhotoTagImage(){
	$Core.photo_tag.init({<?php echo $this->_aVars['sPhotoJsContent']; ?>});
}
</script>
<?php endif; ?>
