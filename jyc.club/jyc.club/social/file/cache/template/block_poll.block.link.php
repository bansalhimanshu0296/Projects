<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:57 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Blog
 * @version 		$Id: link.html.php 2501 2011-04-04 20:13:13Z Raymond_Benc $
 */
 
 

?>		
<?php if (( $this->_aVars['aPoll']['bCanEdit'] )): ?>
<?php if (! isset ( $this->_aVars['bDesign'] ) || $this->_aVars['bDesign'] == false): ?>
							<li>
								<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('poll.add', array('id' => $this->_aVars['aPoll']['poll_id'])); ?>">
<?php echo Phpfox::getPhrase('poll.edit'); ?>
								</a>	
							</li>
<?php endif; ?>
<?php endif; ?>
<?php if (! isset ( $this->_aVars['bIsCustomPoll'] )): ?>
<?php if (( ( Phpfox ::getUserParam('poll.poll_can_delete_own_polls') && $this->_aVars['aPoll']['user_id'] == Phpfox ::getUserId()) || Phpfox ::getUserParam('poll.poll_can_delete_others_polls'))): ?>
<?php if (! isset ( $this->_aVars['bDesign'] ) || $this->_aVars['bDesign'] == false): ?>
							<li class="item_delete">
								<a <?php if (isset ( $this->_aVars['bIsViewingPoll'] )): ?>href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('poll', array('delete' => $this->_aVars['aPoll']['poll_id'])); ?>" class="sJsConfirm"<?php else: ?>href="#" onclick="deletePoll(<?php echo $this->_aVars['aPoll']['poll_id']; ?>); return false;"<?php endif; ?>>
<?php echo Phpfox::getPhrase('poll.delete'); ?>
								</a>
							</li>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
