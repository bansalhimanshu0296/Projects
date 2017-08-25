<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 9:16 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Mail
 * @version 		$Id: view.html.php 3369 2011-10-28 16:04:06Z Raymond_Benc $
 */
 
 

?>
<div id="js_main_mail_thread_holder">
	
	<div class="item_bar">
		<div class="item_bar_action_holder">
			<a href="#" class="item_bar_action"><span><?php echo Phpfox::getPhrase('mail.actions'); ?></span></a>	
			<ul>				
<?php if (Phpfox ::isModule('report')): ?>
				<li><a href="#?call=report.add&amp;height=210&amp;width=400&amp;type=mail&amp;id=<?php echo $this->_aVars['aThread']['thread_id']; ?>" class="inlinePopup" title="<?php echo Phpfox::getPhrase('mail.report_this_message'); ?>"><?php echo Phpfox::getPhrase('mail.report'); ?></a></li>
<?php endif; ?>
<?php if (isset ( $this->_aVars['aThread']['user_is_archive'] ) && $this->_aVars['aThread']['user_is_archive']): ?>
				<li class="item_delete"><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('mail', array('action' => 'unarchive','id' => $this->_aVars['aThread']['thread_id'])); ?>" onclick="return confirm('<?php echo Phpfox::getPhrase('mail.are_you_sure', array('phpfox_squote' => true)); ?>')"><?php echo Phpfox::getPhrase('mail.unarchive'); ?></a></li>				
<?php else: ?>
				<li class="item_delete"><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('mail', array('action' => 'archive','id' => $this->_aVars['aThread']['thread_id'])); ?>" onclick="return confirm('<?php echo Phpfox::getPhrase('mail.are_you_sure', array('phpfox_squote' => true)); ?>')"><?php echo Phpfox::getPhrase('mail.archive'); ?></a></li>
<?php endif; ?>
				<li class="item_delete"><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('mail', array('action' => 'forcedelete','id' => $this->_aVars['aThread']['thread_id'])); ?>" onclick="return confirm('<?php echo Phpfox::getPhrase('mail.are_you_sure', array('phpfox_squote' => true)); ?>')"><?php echo Phpfox::getPhrase('mail.delete_conversation'); ?></a></li>
			</ul>				
		</div>		
	</div>	
	
	<div id="js_mail_thread_current_cnt"><?php echo $this->_aVars['sCurrentPageCnt']; ?></div><br />
	<div id="feed_view_more_loader">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'ajax/add.gif')); ?>
	</div>	
<?php if (count ( $this->_aVars['aMessages'] ) >= 10): ?>
	<a href="#" id="js_mail_thread_view_more" class="global_view_more no_ajax_link" rel="<?php echo $this->_aVars['aThread']['thread_id']; ?>"><?php echo Phpfox::getPhrase('mail.view_more'); ?></a>
<?php endif; ?>
	<div id="mail_threaded_view_more_messages"></div>
<?php if (count((array)$this->_aVars['aMessages'])):  $this->_aPhpfoxVars['iteration']['messages'] = 0;  foreach ((array) $this->_aVars['aMessages'] as $this->_aVars['aMail']):  $this->_aPhpfoxVars['iteration']['messages']++; ?>

	<?php
						Phpfox::getLib('template')->getBuiltFile('mail.block.entry');						
						?>
<?php endforeach; endif; ?>
	<div id="mail_threaded_new_message"></div>
	<div id="mail_threaded_new_message_scroll"></div>
	<div class="mail_thread_form_holder">
		<div class="mail_thread_form_holder_inner">		
<?php echo $this->_aVars['sCreateJs']; ?>
			<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('mail.thread', array('id' => $this->_aVars['aThread']['thread_id'])); ?>" id="js_form_mail" onsubmit="if (<?php echo $this->_aVars['sGetJsForm']; ?>) { $Core.addThreadMail(this); } return false;">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
				<div><input type="hidden" name="val[thread_id]" value="<?php echo $this->_aVars['aThread']['thread_id']; ?>" /></div>
				<div><input type="hidden" name="val[attachment]" class="js_attachment" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['attachment']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['attachment']) : (isset($this->_aVars['aForms']['attachment']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['attachment']) : '')); ?>
" /></div>
				<div class="table" id="js_mail_textarea">
					<?php Phpfox::getBlock('attachment.share');  echo Phpfox::getLib('phpfox.editor')->get('message', array (
  'id' => 'message',
  'rows' => '8',
)); ?>
				</div>
				<div class="table_clear">
					<input type="submit" value="<?php echo Phpfox::getPhrase('mail.send'); ?>" class="button" id="js_mail_submit" />
				</div>
			
</form>

		</div>
	</div>	
	
<?php Phpfox::getBlock('core.moderation'); ?>
	
</div>
