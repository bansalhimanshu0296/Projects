<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:44 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Feed
 * @version 		$Id: display.html.php 2284 2011-02-01 15:58:18Z Raymond_Benc $
 */
 
 

?>
				<div class="global_attachment_holder_section" id="global_attachment_link">	
					<div class="js_preview_content_holder_action" id="global_attachment_link_holder">
						<div>
							<span class="js_attach_holder"><input type="text" name="val[link][url]" value="http://" id="js_global_attach_value" onfocus="if (this.value == 'http://') { this.value = ''; }" onblur="if (this.value == '') { this.value = 'http://' }" class="global_link_input" /></span>
							<input type="button" value="<?php echo Phpfox::getPhrase('link.attach'); ?>" id="js_global_attach_link" class="button global_link_input_button" />
						</div>			
						<div class="extra_info">
<?php echo Phpfox::getPhrase('link.paste_a_link_you_would_like_to_attach'); ?>
						</div>
					</div>
					<div class="js_preview_content_holder" id="js_preview_link_attachment"></div>
					<div id="js_global_attachment_link_cancel" class="p_4 t_right" style="display:none;">
						<a href="#" onclick="$('#js_preview_link_attachment').html(''); $('#global_attachment_link_holder').show(); $('#activity_feed_submit').attr('disabled','disabled').addClass('button_not_active');$('#js_global_attach_value').val('http://'); return false;"><?php echo Phpfox::getPhrase('link.cancel'); ?></a>
					</div>
				</div>	
