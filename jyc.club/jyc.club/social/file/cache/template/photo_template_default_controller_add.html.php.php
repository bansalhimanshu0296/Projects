<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 9:01 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond_Benc
 * @package 		Phpfox
 * @version 		$Id: add.html.php 6934 2013-11-22 14:26:35Z Fern $
 */
 
 

 if (false && Phpfox ::isMobile()): ?>
<div class="extra_info">
<?php echo Phpfox::getPhrase('photo.photos_unfortunately_cannot_be_uploaded_via_mobile_devices_at_this_moment'); ?>
</div>
<?php else: ?>
<div id="js_upload_error_message"></div>

<div id="js_photo_form_holder">
	<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('photo.frame'); ?>" id="js_photo_form" enctype="multipart/form-data" target="js_upload_frame" onsubmit="return startProcess(true, true);">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
		
<?php if ($this->_aVars['sModuleContainer']): ?>
		<div><input type="hidden" name="val[callback_module]" value="<?php echo $this->_aVars['sModuleContainer']; ?>" /></div>
<?php endif; ?>
<?php if ($this->_aVars['iItem']): ?>
		<div><input type="hidden" name="val[callback_item_id]" value="<?php echo $this->_aVars['iItem']; ?>" /></div>
		<div><input type="hidden" name="val[group_id]" value="<?php echo $this->_aVars['iItem']; ?>" /></div>
		<div><input type="hidden" name="val[parent_user_id]" value="<?php echo $this->_aVars['iItem']; ?>" /></div>
<?php endif; ?>
		
<?php (($sPlugin = Phpfox_Plugin::get('photo.template_controller_upload_form')) ? eval($sPlugin) : false); ?>
<?php if (Phpfox ::getUserParam('photo.can_create_photo_album')): ?>
			<div class="table" id="album_table">
				<div class="table_left">
<?php echo Phpfox::getPhrase('photo.photo_album'); ?>
				</div>
				<div class="table_right_text">
					<span id="js_photo_albums"<?php if (! count ( $this->_aVars['aAlbums'] )): ?> style="display:none;"<?php endif; ?>>
						<select name="val[album_id]" id="js_photo_album_select" style="width:200px;" onchange="if (empty(this.value)) { $('#js_photo_privacy_holder').slideDown(); } else { $('#js_photo_privacy_holder').slideUp(); }">
							<option value=""><?php echo Phpfox::getPhrase('photo.select_an_album'); ?>:</option>
<?php if (count((array)$this->_aVars['aAlbums'])):  foreach ((array) $this->_aVars['aAlbums'] as $this->_aVars['aAlbum']): ?>
									<option value="<?php echo $this->_aVars['aAlbum']['album_id']; ?>"<?php if ($this->_aVars['iAlbumId'] == $this->_aVars['aAlbum']['album_id']): ?> selected="selected"<?php endif; ?>><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aAlbum']['name']); ?></option>
<?php endforeach; endif; ?>
						</select>
					</span>&nbsp;(<a href="#" onclick="$Core.box('photo.newAlbum', 500, 'module=<?php echo $this->_aVars['sModuleContainer']; ?>&amp;item=<?php echo $this->_aVars['iItem']; ?>'); return false;"><?php echo Phpfox::getPhrase('photo.create_a_new_photo_album'); ?></a>)
				</div>
			</div>		
<?php endif; ?>
		
<?php if (! $this->_aVars['sModuleContainer'] && Phpfox ::getParam('photo.allow_photo_category_selection') && Phpfox ::getService('photo.category')->hasCategories()): ?>
		<div class="table">
			<div class="table_left">
				<label for="category"><?php echo Phpfox::getPhrase('photo.category'); ?>:</label>
			</div>
			<div class="table_right">
<?php Phpfox::getBlock('photo.drop-down', array()); ?>
			</div>
		</div>		
<?php endif; ?>
		
		<div class="table_extra" id="js_photo_privacy_holder" <?php if ($this->_aVars['iAlbumId']): ?> style="display:none;"<?php endif; ?>>
<?php if ($this->_aVars['sModuleContainer']): ?>
			<div><input type="hidden" id="privacy" name="val[privacy]" value="0" /></div>
			<div><input type="hidden" id="privacy_comment" name="val[privacy_comment]" value="0" /></div>
<?php else: ?>
<?php if (Phpfox ::isModule('privacy')): ?>
					<div class="table">
						<div class="table_left">
<?php echo Phpfox::getPhrase('photo.photo_s_privacy'); ?>:
						</div>
						<div class="table_right">	
<?php Phpfox::getBlock('privacy.form', array('privacy_name' => 'privacy','privacy_info' => 'photo.control_who_can_see_these_photo_s','default_privacy' => 'photo.default_privacy_setting')); ?>
						</div>			
					</div>
					<div class="table">
						<div class="table_left">
<?php echo Phpfox::getPhrase('photo.comment_privacy'); ?>:
						</div>
						<div class="table_right">	
<?php Phpfox::getBlock('privacy.form', array('privacy_name' => 'privacy_comment','privacy_info' => 'photo.control_who_can_comment_on_these_photo_s','privacy_no_custom' => true)); ?>
						</div>			
					</div>		
<?php endif; ?>
<?php endif; ?>
		</div>		
<?php if (isset ( $this->_aVars['sMethod'] ) && $this->_aVars['sMethod'] == 'massuploader'): ?>
			<div><input type="hidden" name="val[method]" value="massuploader" /></div>
			<div class="table mass_uploader_table">
				<div id="swf_photo_upload_button_holder">
					<div class="swf_upload_holder">
						<div id="swf_photo_upload_button"></div>
					</div>
					
					<div class="swf_upload_text_holder">
						<div class="swf_upload_progress"></div>
						<div class="swf_upload_text">
<?php echo Phpfox::getPhrase('photo.select_photo_s'); ?>
						</div>
					</div>				
				</div>
				<div class="extra_info">
<?php echo Phpfox::getPhrase('photo.you_can_upload_a_jpg_gif_or_png_file'); ?>
<?php if ($this->_aVars['iMaxFileSize'] !== null): ?>
						<br />
<?php echo Phpfox::getPhrase('photo.the_file_size_limit_is_file_size_if_your_upload_does_not_work_try_uploading_a_smaller_picture', array('file_size' => Phpfox::getLib('phpfox.file')->filesize($this->_aVars['iMaxFileSize']))); ?>
<?php endif; ?>
				</div>			
			</div>
			<div class="mass_uploader_link"><?php echo Phpfox::getPhrase('photo.upload_problems_try_the_basic_uploader', array('link' => $this->_aVars['sMethodUrl'])); ?></div>	
<?php else: ?>
			<div class="table">
				<div class="table_left">
<?php echo Phpfox::getPhrase('photo.select_photo_s'); ?>:
				</div>
				<div class="table_right">
					<div id="js_photo_upload_input"></div>
					
					<div class="extra_info">
<?php echo Phpfox::getPhrase('photo.you_can_upload_a_jpg_gif_or_png_file'); ?>
<?php if ($this->_aVars['iMaxFileSize'] !== null): ?>
						<br />
<?php echo Phpfox::getPhrase('photo.the_file_size_limit_is_file_size_if_your_upload_does_not_work_try_uploading_a_smaller_picture', array('file_size' => Phpfox::getLib('phpfox.file')->filesize($this->_aVars['iMaxFileSize']))); ?>
<?php endif; ?>
					</div>
				</div>
			</div>
<?php if (isset ( $this->_aVars['bRawFileInput'] ) && $this->_aVars['bRawFileInput']): ?>
				<input type="button" name="Filedata" id="Filedata" value="Choose photo">
<?php else: ?>
				<div class="table_clear js_upload_button_link">
					<input type="submit" value="<?php echo Phpfox::getPhrase('photo.upload'); ?>" class="button" />
				</div>		
<?php endif; ?>
<?php endif; ?>
		
	
</form>

</div>
<div id="js_photo_form_holder_loading" class="t_center" style="display:none;">
	<span style="margin-left:4px; margin-right:4px; font-size:9pt; font-weight:normal;">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'ajax/large.gif','alt' => '','class' => 'v_middle')); ?>
<?php echo Phpfox::getPhrase('core.uploading'); ?>
	</span>
</div>
<?php endif; ?>

<?php if (Phpfox ::getParam('core.site_wide_ajax_browsing')): ?>
		<script type="text/javascript">
				$Behavior.checkHTML5Setting = function()
				{
<?php if (Phpfox ::getParam('photo.html5_upload_photo')): ?>
						$('.js_upload_button_link').hide();
<?php else: ?>
						$('.js_upload_button_link').show();
<?php endif; ?>
				}
		</script>
<?php endif; ?>

