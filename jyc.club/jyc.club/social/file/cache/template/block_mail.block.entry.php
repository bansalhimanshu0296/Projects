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
<div class="row1 mail_thread_holder<?php if (( ! PHPFOX_IS_AJAX && $this->_aPhpfoxVars['iteration']['messages'] == count ( $this->_aVars['aMessages'] ) ) || ( PHPFOX_IS_AJAX && isset ( $this->_aVars['bIsLastMessage'] ) && $this->_aVars['bIsLastMessage'] )): ?> is_last_message<?php endif; ?>">	
	<div class="row_title">		
<?php if (! defined ( 'PHPFOX_IS_ADMIN_NEW' )): ?>
		<div class="row_title_image">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aMail'],'suffix' => '_50_square','max_width' => 50,'max_height' => 50)); ?>
			<a href="#<?php echo $this->_aVars['aMail']['message_id']; ?>" class="moderate_link" rel="mail"><?php echo Phpfox::getPhrase('mail.moderate'); ?></a>
		</div>
<?php endif; ?>
		<div class="row_title_info">			
			<div class="mail_action">
				<ul>
<?php if ($this->_aVars['aMail']['is_mobile']): ?>
					<li class="js_hover_title"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/mobile.png')); ?><span class="js_hover_info"><?php echo Phpfox::getPhrase('mail.sent_via_a_mobile_device'); ?></span></li>
<?php endif; ?>
					<li><span class="extra_info"><?php echo Phpfox::getLib('date')->convertTime($this->_aVars['aMail']['time_stamp']); ?></span></li>					
				</ul>
			</div>			
			<div class="mail_thread_user">		
<?php echo '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aMail']['user_name'] . '"><a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aMail']['user_name'], ((empty($this->_aVars['aMail']['user_name']) && isset($this->_aVars['aMail']['profile_page_id'])) ? $this->_aVars['aMail']['profile_page_id'] : null))) . '">' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aMail']['user_id'], $this->_aVars['aMail']['full_name']), Phpfox::getParam('user.maximum_length_for_full_name')) . '</a></span>'; ?>
			</div>	
			<div>
<?php echo Phpfox::getLib('phpfox.parse.output')->split(Phpfox::getLib('phpfox.parse.output')->parse($this->_aVars['aMail']['text']), 100); ?>
			</div>			
	
			
<?php if (isset ( $this->_aVars['aMail']['attachments'] )): ?>
<?php Phpfox::getBlock('attachment.list', array('sType' => 'mail','attachments' => $this->_aVars['aMail']['attachments'])); ?>
<?php endif; ?>
			
<?php if (isset ( $this->_aVars['aMail']['forwards'] ) && count ( $this->_aVars['aMail']['forwards'] )): ?>
			<div class="mail_thread_forward">
<?php if (count((array)$this->_aVars['aMail']['forwards'])):  $this->_aPhpfoxVars['iteration']['submessages'] = 0;  foreach ((array) $this->_aVars['aMail']['forwards'] as $this->_aVars['aSubMail']):  $this->_aPhpfoxVars['iteration']['submessages']++; ?>

					<?php
						Phpfox::getLib('template')->getBuiltFile('mail.block.forward');						
						?>
<?php endforeach; endif; ?>
			</div>
<?php endif; ?>
			
		</div>
	</div>		
</div>
