<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 9:15 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Mail
 * @version 		$Id: compose.html.php 4921 2012-10-22 13:47:30Z Miguel_Espinoza $
 */
 
 

 echo $this->_aVars['sCreateJs']; ?>

<div id="js_ajax_compose_error_message"></div>
<div>
<?php if (PHPFOX_IS_AJAX): ?>
		<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('mail.compose'); ?>" id="js_form_mail" onsubmit="<?php (($sPlugin = Phpfox_Plugin::get('mail.template_controller_compose_ajax_onsubmit')) ? eval($sPlugin) : false); ?> $Core.processForm('#js_mail_compose_submit'); $(this).ajaxCall('mail.composeProcess'); return false;">
<?php else: ?>
		<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('mail.compose'); ?>" id="js_form_mail" onsubmit="<?php echo $this->_aVars['sGetJsForm']; ?>">
<?php endif; ?>
	
<?php if (isset ( $this->_aVars['iPageId'] )): ?>
		<div><input type="hidden" name="val[page_id]" value="<?php echo $this->_aVars['iPageId']; ?>"></div>
		<div><input type="hidden" name="val[sending_message]" value="<?php echo $this->_aVars['iPageId']; ?>"></div>
<?php endif; ?>
	
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
	<div><input type="hidden" name="val[attachment]" class="js_attachment" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['attachment']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['attachment']) : (isset($this->_aVars['aForms']['attachment']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['attachment']) : '')); ?>
" /></div>
<?php if (isset ( $this->_aVars['bIsThreadForward'] ) && $this->_aVars['bIsThreadForward']): ?>
	<div><input type="hidden" name="val[forwards]" value="<?php echo $this->_aVars['sThreadsToForward']; ?>" /></div>
	<div><input type="hidden" name="val[forward_thread_id]" value="<?php echo $this->_aVars['sForwardThreadId']; ?>" /></div>
<?php endif; ?>
<?php if (PHPFOX_IS_AJAX && isset ( $this->_aVars['aUser']['user_id'] )): ?>
	<div><input type="hidden" name="id" value="<?php echo $this->_aVars['aUser']['user_id']; ?>" /></div>
	<div><input type="hidden" name="val[to][]" value="<?php echo $this->_aVars['aUser']['user_id']; ?>" /></div>
<?php else: ?>
		<div class="table">
			<div class="table_left">
<?php echo Phpfox::getPhrase('mail.to'); ?>:
			</div>
			<div class="table_right">					
				<div id="js_mail_search_friend_placement" style="width:410px;"></div>
				<div id="js_mail_search_friend"></div>
				<script type="text/javascript">
				var bRun = true;
				$Behavior.loadSearchFriendsCompose = function()
				{
					bRun = false;
<?php if (Phpfox ::getUserParam('mail.restrict_message_to_friends') == true): ?>
						$Core.searchFriends({
							'id': '#js_mail_search_friend',
							'placement': '#js_mail_search_friend_placement',
							'width': '<?php if (Phpfox ::isMobile()): ?>90%<?php else: ?>400px<?php endif; ?>',
							'max_search': 10,
							'input_name': 'val[to]',
							'default_value': '<?php echo Phpfox::getPhrase('mail.search_friends_by_their_name'); ?>',
							'inline_bubble': true
						});		
<?php else: ?>
						$Core.searchFriends({
							'id': '#js_mail_search_friend',
							'placement': '#js_mail_search_friend_placement',
							'width': '<?php if (Phpfox ::isMobile()): ?>90%<?php else: ?>400px<?php endif; ?>',
							'max_search': 10,
							'input_name': 'val[to]',
							'default_value': '<?php echo Phpfox::getPhrase('mail.search_friends_by_their_name'); ?>',
							'inline_bubble': true,
							'is_mail' : true
						});		
<?php endif; ?>
				}
				// if (bRun)$Behavior.loadSearchFriendsCompose();
				</script>				
			</div>
		</div>
<?php endif; ?>
<?php if (! Phpfox ::getParam('mail.threaded_mail_conversation')): ?>
		<div class="table">
			<div class="table_left">			
				<label for="subject"><?php echo Phpfox::getPhrase('mail.subject'); ?>:</label>			
			</div>
			<div class="table_right">
				<input type="text" name="val[subject]" id="subject" value="<?php if (isset ( $this->_aVars['iPageId'] )):  echo Phpfox::getPhrase('mail.claiming_page_title', array('title' => $this->_aVars['aPage']['title']));  else:  $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['subject']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['subject']) : (isset($this->_aVars['aForms']['subject']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['subject']) : ''));  endif; ?>" size="40" style="<?php if (Phpfox ::isMobile()): ?>width:90%;<?php else: ?>width:400px;<?php endif; ?>" tabindex="1" />
			</div>
			<div class="clear"></div>
		</div>
<?php endif; ?>
		<div class="table">
			<div class="table_left">
				<label for="message"><?php echo Phpfox::getPhrase('mail.message'); ?>:</label>
			</div>
			<div class="table_right" id="js_compose_new_message">
<?php if (PHPFOX_IS_AJAX): ?>
				<?php Phpfox::getBlock('attachment.share');  echo Phpfox::getLib('phpfox.editor')->get('message', array (
  'id' => 'message',
  'rows' => '2',
  'tabindex' => '2',
)); ?>
<?php else: ?>
				<?php Phpfox::getBlock('attachment.share');  echo Phpfox::getLib('phpfox.editor')->get('message', array (
  'id' => 'message',
)); ?>
<?php endif; ?>
			</div>
			<div class="clear"></div>
		</div>
		
<?php if (Phpfox ::isModule('captcha') && Phpfox ::getUserParam('mail.enable_captcha_on_mail')): ?>
<?php Phpfox::getBlock('captcha.form', array('sType' => 'mail')); ?>
<?php endif; ?>
		
		<div class="table_clear" style="position:relative;">
<?php if (! Phpfox ::getParam('mail.threaded_mail_conversation')): ?>
			<div style="position:absolute; right:0px;">
				<label><input type="checkbox" name="val[copy_to_self]" value="1" class="v_middle" /><?php echo Phpfox::getPhrase('mail.send_a_copy_to_myself'); ?></label>
			</div>
<?php endif; ?>
<?php if (PHPFOX_IS_AJAX): ?>
			<div id="js_mail_compose_submit">
				<ul class="table_clear_button">
					<li><input type="submit" value="<?php echo Phpfox::getPhrase('mail.submit'); ?>" class="button" /></li>
					<li class="table_clear_ajax"></li>
				</ul>
				<div class="clear"></div>
			</div>			
<?php else: ?>
				<input type="submit" value="<?php echo Phpfox::getPhrase('mail.send'); ?>" class="button" />
<?php endif; ?>
		</div>
		
	
</form>

</div>


<?php if (isset ( $this->_aVars['sMessageClaim'] )): ?>
	<script type="text/javascript">
		$('#js_compose_new_message #message').html('<?php echo $this->_aVars['sMessageClaim']; ?>');
	</script>
<?php endif; ?>
