<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 9:00 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Profile
 * @version 		$Id: header.html.php 3990 2012-03-09 15:28:08Z Raymond_Benc $
 */
 
 

?>
<div id="js_cover_photo_iframe_loader_error"></div>
<div id="js_cover_photo_iframe_loader_upload" style="display:none;"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'ajax/add.gif','class' => 'v_middle')); ?> <?php echo Phpfox::getPhrase('user.uploading_image'); ?></div>
<form id="js_activity_feed_form" enctype="multipart/form-data" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('photo.frame'); ?>" method="post" target="js_cover_photo_iframe_loader">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
	<div><input type="hidden" name="val[action]" value="upload_photo_via_share" /></div>
	<div><input type="hidden" name="val[is_cover_photo]" value="1" /></div>
<?php if (isset ( $this->_aVars['iPageId'] ) && ! empty ( $this->_aVars['iPageId'] )): ?>
		<div>
			<input type="hidden" name="val[page_id]" value="<?php echo $this->_aVars['iPageId']; ?>" />
		</div>
<?php endif; ?>
	<div class="table">
		<div class="table_left">
<?php echo Phpfox::getPhrase('user.select_a_photo'); ?>:
		</div>
		<div class="table_right">
			<div><input type="file" name="image[]" id="global_attachment_photo_file_input" value="" /></div>	
		</div>
	</div>
	<div class="table_clear">		
		<div><input type="submit" value="<?php echo Phpfox::getPhrase('user.upload'); ?>" class="button" onclick="$('#js_cover_photo_iframe_loader_error').hide(); $('#js_cover_photo_iframe_loader_upload').show(); $('#js_activity_feed_form').hide();" /></div>
	</div>	
	<iframe id="js_cover_photo_iframe_loader" name="js_cover_photo_iframe_loader" height="200" width="500" frameborder="1" style="display:none;"></iframe>

</form>

