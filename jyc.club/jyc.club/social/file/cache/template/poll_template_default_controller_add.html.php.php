<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:55 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 *
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Poll
 * @version 		$Id: add.html.php 7078 2014-01-29 15:26:30Z Fern $
 */

 

 if (isset ( $this->_aVars['aForms']['poll_id'] )): ?>
<div class="view_item_link">
	<a href="<?php echo Phpfox::permalink('poll', $this->_aVars['aForms']['poll_id'], $this->_aVars['aForms']['question'], false, null, (array) array (
)); ?>"><?php echo Phpfox::getPhrase('poll.view_poll'); ?></a>
</div>
<?php endif; ?>

<script type="text/javascript">
	<?php echo '
	function plugin_addFriendToSelectList()
	{
		$(\'#js_allow_list_input\').show();
	}
	'; ?>

</script>
<?php echo $this->_aVars['sCreateJs']; ?>
<div class="main_break"></div>
<div style="display:none;" class="placeholder">
	<div style="padding-top:6px;" class="js_prev_block">
		<span>
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/arrow_up_down.png','height' => "18px",'style' => "cursor:move; vertical-align:middle;")); ?>
		</span>
		<span class="class_answer">
			<input type="text" name="val[answer][][answer]" value="" size="30" class="js_answers v_middle" />
		</span>
		<a href="#" onclick="return appendAnswer(this);">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/add.png','class' => 'v_middle')); ?>
		</a>
		<a href="#" onclick="return removeAnswer(this);">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/delete.png','class' => 'v_middle')); ?>
		</a>
	</div>
</div>


<form method="post" action="<?php if ($this->_aVars['bIsCustom']): ?>#<?php else:  echo Phpfox::getLib('phpfox.url')->makeUrl('poll.add');  if (isset ( $this->_aVars['aForms']['poll_id'] )): ?>id_<?php echo $this->_aVars['aForms']['poll_id'];  endif;  endif; ?>" name="js_poll_form" id="js_poll_form" onsubmit="<?php if ($this->_aVars['bIsCustom']): ?>if (<?php echo $this->_aVars['sGetJsForm']; ?>) { $(this).ajaxCall('poll.addCustom'); } return false;<?php else:  echo $this->_aVars['sGetJsForm'];  endif; ?>" <?php if (Phpfox ::getUserParam('poll.poll_can_upload_image')): ?>enctype="multipart/form-data"<?php endif; ?>>
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
	<div id="js_custom_privacy_input_holder">
<?php if ($this->_aVars['bIsEdit']): ?>
<?php Phpfox::getBlock('privacy.build', array('privacy_item_id' => $this->_aVars['aForms']['poll_id'],'privacy_module_id' => 'poll')); ?>
<?php endif; ?>
	</div>	

<?php if (isset ( $this->_aVars['aForms']['poll_id'] ) && isset ( $this->_aVars['aForms']['user_id'] )): ?>
	<div><input type="hidden" name="val[poll_id]" value="<?php echo $this->_aVars['aForms']['poll_id']; ?>"></div>
	<div><input type="hidden" name="val[user_id]" value="<?php echo $this->_aVars['aForms']['user_id']; ?>"></div>
<?php endif; ?>
<?php if ($this->_aVars['bIsCustom']): ?>
	<div><input type="hidden" name="val[module_id]" value="<?php echo $this->_aVars['sModuleId']; ?>"></div>
<?php endif; ?>
	
	
<?php if ($this->_aVars['bIsEdit'] && ! $this->_aVars['bCanEditTitle']): ?>
	<div style="display:none;">
<?php endif; ?>
		<div class="table">
			<div class="table_left">
<?php if (Phpfox::getParam('core.display_required')): ?><span class="required"><?php echo Phpfox::getParam('core.required_symbol'); ?></span><?php endif;  echo Phpfox::getPhrase('poll.question'); ?>:
			</div>
			<div class="table_right">
				<input tabindex="1" type="text" name="val[question]" id="question" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['question']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['question']) : (isset($this->_aVars['aForms']['question']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['question']) : '')); ?>
" size="40" />
			</div>
		</div>
		
<?php if ($this->_aVars['bIsEdit'] && ! $this->_aVars['bCanEditTitle']): ?>
	</div>
<?php endif; ?>
	
<?php if ($this->_aVars['bIsEdit'] && ! $this->_aVars['bCanEditQuestion']): ?>
	<div style="display:none;">
<?php endif; ?>
		<div class="table">
			<div class="table_left">
<?php if (Phpfox::getParam('core.display_required')): ?><span class="required"><?php echo Phpfox::getParam('core.required_symbol'); ?></span><?php endif;  echo Phpfox::getPhrase('poll.answers'); ?>:
			</div>
			<div class="table_right">
				<div class="sortable">
<?php if (isset ( $this->_aVars['aForms']['answer'] ) && count ( $this->_aVars['aForms']['answer'] )): ?>
<?php if (count((array)$this->_aVars['aForms']['answer'])):  $this->_aPhpfoxVars['iteration']['iAnswer'] = 0;  foreach ((array) $this->_aVars['aForms']['answer'] as $this->_aVars['aAnswer']):  $this->_aPhpfoxVars['iteration']['iAnswer']++; ?>

					<div class="placeholder sortable_item_<?php echo $this->_aPhpfoxVars['iteration']['iAnswer']; ?>" id="sortable_item_<?php echo $this->_aPhpfoxVars['iteration']['iAnswer']; ?>">
						<div style="padding-top:6px;" class="js_prev_block">
							<span class="js_arrow_up_down">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/arrow_up_down.png','height' => "18px",'style' => "cursor:move; vertical-align:middle;")); ?>
							</span>
							<input type="text" name="val[answer][<?php echo $this->_aPhpfoxVars['iteration']['iAnswer']; ?>][answer]" value="<?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aAnswer']['answer']); ?>" size="30" class="js_answers v_middle" />
<?php if (isset ( $this->_aVars['aAnswer']['answer_id'] )): ?>
								   <input type="hidden" name="val[answer][<?php echo $this->_aPhpfoxVars['iteration']['iAnswer']; ?>][answer_id]" class="hdnAnswerId" value="<?php echo $this->_aVars['aAnswer']['answer_id']; ?>">
<?php endif; ?>
							<a href="#" onclick="return appendAnswer(this);">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/add.png','class' => 'v_middle')); ?>
							</a>
							<a href="#" onclick="return removeAnswer(this);">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/delete.png','class' => 'v_middle')); ?>
							</a>
						</div>
						<div class="js_next_block"></div>
					</div>
<?php endforeach; endif; ?>
<?php else: ?>
<?php for ($this->_aVars['i'] = 1; $this->_aVars['i'] <= $this->_aVars['iTotalAnswers']; $this->_aVars['i']++): ?>
					<div class="placeholder sortable_item_<?php echo $this->_aVars['i']; ?>" id="sortable_item_<?php echo $this->_aVars['i']; ?>">
						<div style="padding-top:6px;" class="js_prev_block">
							<span class="js_arrow_up_down">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/arrow_up_down.png','class' => "sortingArrows",'height' => "18px")); ?>
							</span>
							<input type="text" tabindex="<?php echo $this->_aVars['i']; ?>" name="val[answer][<?php echo $this->_aVars['i']; ?>][answer]" value="" size="30" class="js_answers v_middle" />
							<a href="#" onclick="if(iMaxAnswers == 0) { iMaxAnswers = <?php echo $this->_aVars['iMaxAnswers']; ?>; } return appendAnswer(this);" >
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/add.png','class' => 'v_middle')); ?>
							</a>
							<a href="#" onclick="if(iMinAnswers == 0) { iMinAnswers = <?php echo $this->_aVars['iMin']; ?>; } return removeAnswer(this);">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/delete.png','class' => 'v_middle')); ?>
							</a>
						</div>
						<div class="js_next_block"></div>
					</div>
<?php endfor; ?>
<?php endif; ?>
				</div>
			</div>
		</div>
<?php if ($this->_aVars['bIsEdit'] && ! $this->_aVars['bCanEditQuestion']): ?>
	</div>
<?php endif; ?>
	
<?php if ($this->_aVars['bIsCustom']): ?>
		<div class="table">
			<div class="table_left">
<?php echo Phpfox::getPhrase('poll.public_votes'); ?>:
			</div>
			<div class="table_right">				
				<div class="item_is_active_holder">		
					<span class="js_item_active item_is_active"><input type="radio" name="val[hide_vote]" value="0" class="checkbox" style="vertical-align:middle;"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('hide_vote') && in_array('hide_vote', $this->_aVars['aForms']))
							
{
								echo ' checked="checked" ';
							}

							if (isset($aParams['hide_vote'])
								&& $aParams['hide_vote'] == '0')

							{

								echo ' checked="checked" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['hide_vote'])
									&& !isset($aParams['hide_vote'])
									&& $this->_aVars['aForms']['hide_vote'] == '0')
								{
								 echo ' checked="checked" ';
								}
								else
								{
									echo " checked=\"checked\"";
								}
							}
							?>
/> <?php echo Phpfox::getPhrase('poll.yes'); ?></span>
					<span class="js_item_active item_is_not_active"><input type="radio" name="val[hide_vote]" value="1" class="checkbox" style="vertical-align:middle;"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('hide_vote') && in_array('hide_vote', $this->_aVars['aForms']))
							
{
								echo ' checked="checked" ';
							}

							if (isset($aParams['hide_vote'])
								&& $aParams['hide_vote'] == '1')

							{

								echo ' checked="checked" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['hide_vote'])
									&& !isset($aParams['hide_vote'])
									&& $this->_aVars['aForms']['hide_vote'] == '1')
								{
								 echo ' checked="checked" ';
								}
								else
								{
									echo "";
								}
							}
							?>
/> <?php echo Phpfox::getPhrase('poll.no'); ?></span>
				</div>		
				<div class="extra_info">
<?php echo Phpfox::getPhrase('poll.displays_all_users_who_voted_and_what_choice_they_voted_for'); ?>
				</div>	
			</div>
		</div>		
<?php endif; ?>
	
<?php if ($this->_aVars['bIsEdit'] && ! $this->_aVars['bCanEditTitle']): ?>
	<div id="hideChoices" style="display:none;">
<?php endif; ?>
<?php if (Phpfox ::getUserParam('poll.poll_can_upload_image') && ! $this->_aVars['bIsCustom']): ?>
		<div class="table"<?php if (Phpfox ::isMobile()): ?> style="display:none;"<?php endif; ?>>
			<div class="table_left">
<?php if (Phpfox ::getParam('poll.is_image_required')):  if (Phpfox::getParam('core.display_required')): ?><span class="required"><?php echo Phpfox::getParam('core.required_symbol'); ?></span><?php endif;  endif;  echo Phpfox::getPhrase('poll.image'); ?>:
			</div>
			<div class="table_right" id="js_submit_upload_image" <?php if (isset ( $this->_aVars['aForms']['image_path'] )): ?>style="display: none;"<?php endif; ?>>
				 <input type="file" id='image' name="image" />
				<div class="extra_info">
<?php echo Phpfox::getPhrase('poll.you_can_upload_a_jpg_gif_or_png_file'); ?>
				</div>
			</div>
			<div class="table_right" id="js_event_current_image" <?php if (! isset ( $this->_aVars['aForms']['image_path'] ) || $this->_aVars['aForms']['image_path'] == ''): ?> style="display: none;"<?php endif; ?>>
<?php if (isset ( $this->_aVars['aForms']['image_path'] )): ?>
				 <div class="p_4">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('thickbox' => true,'title' => $this->_aVars['aForms']['question'],'path' => 'poll.url_image','file' => $this->_aVars['aForms']['image_path'],'suffix' => $this->_aVars['sSuffix'],'max_width' => 'poll.poll_max_image_pic_size','max_height' => 'poll.poll_max_image_pic_size')); ?>
					<br />
					<a href="#" onclick="$Core.poll.deleteImage(<?php echo $this->_aVars['aForms']['poll_id']; ?>); return false;"><?php echo Phpfox::getPhrase('poll.click_here_to_delete_this_image_and_upload_a_new_one_in_its_place'); ?></a>
				</div>
<?php endif; ?>
			</div>
		</div>
<?php endif; ?>
<?php if (! $this->_aVars['bIsCustom'] && Phpfox ::isModule('privacy')): ?>
		<div class="table">
			<div class="table_left">
<?php echo Phpfox::getPhrase('poll.privacy'); ?>:
			</div>
			<div class="table_right">	
<?php Phpfox::getBlock('privacy.form', array('privacy_name' => 'privacy','privacy_info' => 'poll.control_who_can_see_this_poll','default_privacy' => 'poll.default_privacy_setting')); ?>
			</div>			
		</div>
<?php if (Phpfox ::isModule('comment')): ?>
		<div class="table">
			<div class="table_left">
<?php echo Phpfox::getPhrase('poll.comment_privacy'); ?>:
			</div>
			<div class="table_right">	
<?php Phpfox::getBlock('privacy.form', array('privacy_name' => 'privacy_comment','privacy_info' => 'poll.control_who_can_comment_on_this_poll','privacy_no_custom' => true)); ?>
			</div>			
		</div>
<?php endif; ?>
<?php endif; ?>

		<div class="table_clear">
			<ul class="table_clear_button">
				<li><input type="submit" name="submit_poll" value="<?php if (isset ( $this->_aVars['aForms']['poll_id'] )):  echo Phpfox::getPhrase('poll.update');  else:  echo Phpfox::getPhrase('poll.submit');  endif; ?>" class="button" name="submit" /></li>
<?php if (Phpfox ::getUserParam('poll.poll_can_edit_own_polls') && Phpfox ::getUserParam('poll.can_edit_title') && ! $this->_aVars['bIsCustom'] && ! Phpfox ::isMobile()): ?>
				<li><input type="submit" name="submit_design" value="<?php echo Phpfox::getPhrase('poll.save_and_design_this_poll'); ?>" class="button button_off" name="design" /></li>
<?php if (isset ( $this->_aVars['aForms']['poll_id'] )): ?>
				<li><input type="button" value="<?php echo Phpfox::getPhrase('poll.skip_and_design_this_poll'); ?>" onclick="window.location.href = '<?php echo Phpfox::getLib('phpfox.url')->makeUrl('poll.design', array('id' => $this->_aVars['aForms']['poll_id'])); ?>';" class="button button_off" /></li>
<?php endif; ?>
<?php endif; ?>
			</ul>
			<div class="clear"></div>
		</div>
<?php if (! $this->_aVars['bIsCustom']): ?>
		<h3><?php echo Phpfox::getPhrase('poll.additional_options'); ?></h3>
		<div class="table">
			<div class="table_left">
<?php echo Phpfox::getPhrase('poll.public_votes'); ?>:
			</div>
			<div class="table_right">				
				<div class="item_is_active_holder">		
					<span class="js_item_active item_is_active"><input type="radio" name="val[hide_vote]" value="0" class="checkbox" style="vertical-align:middle;"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('hide_vote') && in_array('hide_vote', $this->_aVars['aForms']))
							
{
								echo ' checked="checked" ';
							}

							if (isset($aParams['hide_vote'])
								&& $aParams['hide_vote'] == '0')

							{

								echo ' checked="checked" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['hide_vote'])
									&& !isset($aParams['hide_vote'])
									&& $this->_aVars['aForms']['hide_vote'] == '0')
								{
								 echo ' checked="checked" ';
								}
								else
								{
									echo " checked=\"checked\"";
								}
							}
							?>
/> <?php echo Phpfox::getPhrase('poll.yes'); ?></span>
					<span class="js_item_active item_is_not_active"><input type="radio" name="val[hide_vote]" value="1" class="checkbox" style="vertical-align:middle;"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('hide_vote') && in_array('hide_vote', $this->_aVars['aForms']))
							
{
								echo ' checked="checked" ';
							}

							if (isset($aParams['hide_vote'])
								&& $aParams['hide_vote'] == '1')

							{

								echo ' checked="checked" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['hide_vote'])
									&& !isset($aParams['hide_vote'])
									&& $this->_aVars['aForms']['hide_vote'] == '1')
								{
								 echo ' checked="checked" ';
								}
								else
								{
									echo "";
								}
							}
							?>
/> <?php echo Phpfox::getPhrase('poll.no'); ?></span>
				</div>		
				<div class="extra_info">
<?php echo Phpfox::getPhrase('poll.displays_all_users_who_voted_and_what_choice_they_voted_for'); ?>
				</div>	
			</div>
		</div>		
		<div class="table">
			<div class="table_left">
<?php echo Phpfox::getPhrase('poll.randomize_answers'); ?>:
			</div>
			<div class="table_right">				
				<div class="item_is_active_holder">		
					<span class="js_item_active item_is_active">
						<input type="radio" name="val[randomize]" value="1" class="checkbox" onclick="$('.js_arrow_up_down').hide();" style="vertical-align:middle;"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('randomize') && in_array('randomize', $this->_aVars['aForms']))
							
{
								echo ' checked="checked" ';
							}

							if (isset($aParams['randomize'])
								&& $aParams['randomize'] == '1')

							{

								echo ' checked="checked" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['randomize'])
									&& !isset($aParams['randomize'])
									&& $this->_aVars['aForms']['randomize'] == '1')
								{
								 echo ' checked="checked" ';
								}
								else
								{
									echo "";
								}
							}
							?>
/> 
<?php echo Phpfox::getPhrase('poll.yes'); ?>
					</span>
					<span class="js_item_active item_is_not_active">
						<input type="radio" name="val[randomize]" value="0" class="checkbox" onclick="$('.js_arrow_up_down').show();" style="vertical-align:middle;"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('randomize') && in_array('randomize', $this->_aVars['aForms']))
							
{
								echo ' checked="checked" ';
							}

							if (isset($aParams['randomize'])
								&& $aParams['randomize'] == '0')

							{

								echo ' checked="checked" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['randomize'])
									&& !isset($aParams['randomize'])
									&& $this->_aVars['aForms']['randomize'] == '0')
								{
								 echo ' checked="checked" ';
								}
								else
								{
									echo "";
								}
							}
							?>
/> 
<?php echo Phpfox::getPhrase('poll.no'); ?>
					</span>
				</div>			
			</div>
		</div>	
		
<?php if (Phpfox ::isModule('captcha') && Phpfox ::getUserParam('poll.poll_require_captcha_challenge')): ?>
<?php Phpfox::getBlock('captcha.form', array('sType' => 'poll')); ?>
<?php endif; ?>
<?php (($sPlugin = Phpfox_Plugin::get('poll.template_controller_add_end')) ? eval($sPlugin) : false); ?>
<?php if ($this->_aVars['bIsEdit'] && ! $this->_aVars['bCanEditTitle']): ?>
	</div>
<?php endif; ?>
		<div class="table_clear">
			<ul class="table_clear_button">
				<li><input type="submit" name="submit_poll" value="<?php if (isset ( $this->_aVars['aForms']['poll_id'] )):  echo Phpfox::getPhrase('poll.update');  else:  echo Phpfox::getPhrase('poll.submit');  endif; ?>" class="button" name="submit" /></li>
<?php if (Phpfox ::getUserParam('poll.poll_can_edit_own_polls') && Phpfox ::getUserParam('poll.can_edit_title') && ! $this->_aVars['bIsCustom'] && ! Phpfox ::isMobile()): ?>
				<li><input type="submit" name="submit_design" value="<?php echo Phpfox::getPhrase('poll.save_and_design_this_poll'); ?>" class="button button_off" name="design" /></li>
<?php if (isset ( $this->_aVars['aForms']['poll_id'] )): ?>
				<li><input type="button" value="<?php echo Phpfox::getPhrase('poll.skip_and_design_this_poll'); ?>" onclick="window.location.href = '<?php echo Phpfox::getLib('phpfox.url')->makeUrl('poll.design', array('id' => $this->_aVars['aForms']['poll_id'])); ?>';" class="button button_off" /></li>
<?php endif; ?>
<?php endif; ?>
			</ul>
			<div class="clear"></div>
		</div>
<?php endif; ?>

</form>


