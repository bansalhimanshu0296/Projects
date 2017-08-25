<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:44 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond_Benc
 * @package 		Phpfox
 * @version 		$Id: url.html.php 3748 2011-12-09 13:13:01Z Miguel_Espinoza $
 */
 
 

 if (PHPFOX_IS_AJAX): ?>
<div id="js_video_done" style="display:none;">
	<div class="valid_message">
<?php echo Phpfox::getPhrase('video.video_successfully_added'); ?>
	</div>
</div>
<?php endif; ?>
<div id="js_video_error" class="error_message" style="display:none;"></div>
<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('video.add.url'); ?>"<?php if (PHPFOX_IS_AJAX): ?> onsubmit="$(this).ajaxCall('video.addShare'); return false;"<?php endif; ?>>
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
<?php if ($this->_aVars['sModule']): ?>
		<div><input type="hidden" name="val[callback_module]" value="<?php echo $this->_aVars['sModule']; ?>" /></div>
<?php endif; ?>
<?php if ($this->_aVars['iItem']): ?>
		<div><input type="hidden" name="val[callback_item_id]" value="<?php echo $this->_aVars['iItem']; ?>" /></div>
<?php endif; ?>
<?php if (! empty ( $this->_aVars['sEditorId'] )): ?>
		<div><input type="hidden" name="editor_id" value="<?php echo $this->_aVars['sEditorId']; ?>" /></div>
<?php endif; ?>

	<div class="table">
		<div class="table_left">
<?php echo Phpfox::getPhrase('video.video_url'); ?>:
		</div>
		<div class="table_right">
			<input type="text" name="val[url]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['url']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['url']) : (isset($this->_aVars['aForms']['url']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['url']) : '')); ?>
" size="40" style="width:90%;" />
			<div class="extra_info">
<?php echo Phpfox::getPhrase('video.click_here_to_view_a_list_of_supported_sites'); ?>
			</div>
		</div>
	</div>

	<div class="table_extra">
<?php if (! isset ( $this->_aVars['sModule'] ) || $this->_aVars['sModule'] == false): ?>
		<div class="table">
			<div class="table_left">
				<label for="category"><?php echo Phpfox::getPhrase('video.category'); ?>:</label>
			</div>
			<div class="table_right">
<?php echo $this->_aVars['sCategories']; ?>
			</div>
		</div>
<?php endif; ?>

		<div id="js_custom_privacy_input_holder_video">
<?php if (isset ( $this->_aVars['aForms']['video_id'] )): ?>
<?php Phpfox::getBlock('privacy.build', array('privacy_item_id' => $this->_aVars['aForms']['video_id'],'privacy_module_id' => 'video')); ?>
<?php endif; ?>
		</div>

<?php if (! $this->_aVars['sModule']): ?>
<?php if (Phpfox ::isModule('privacy')): ?>
		<div class="table">
			<div class="table_left">
<?php echo Phpfox::getPhrase('video.privacy'); ?>:
			</div>
			<div class="table_right">
<?php Phpfox::getBlock('privacy.form', array('privacy_name' => 'privacy','privacy_info' => 'video.control_who_can_see_this_video','privacy_custom_id' => 'js_custom_privacy_input_holder_video','default_privacy' => 'video.display_on_profile')); ?>
			</div>
		</div>
<?php endif; ?>

<?php if (Phpfox ::isModule('comment') && Phpfox ::isModule('privacy')): ?>
		<div class="table">
			<div class="table_left">
<?php echo Phpfox::getPhrase('video.comment_privacy'); ?>:
			</div>
			<div class="table_right">
<?php Phpfox::getBlock('privacy.form', array('privacy_name' => 'privacy_comment','privacy_info' => 'video.control_who_can_comment_on_this_video','privacy_no_custom' => true)); ?>
			</div>
		</div>
<?php endif; ?>
<?php endif; ?>
	</div>
	
	<div class="table_clear">
		<input type="submit" value="<?php echo Phpfox::getPhrase('video.add'); ?>" class="button" />
	</div>

</form>

