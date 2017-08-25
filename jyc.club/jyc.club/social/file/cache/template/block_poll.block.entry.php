<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:57 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Poll
 * @version 		$Id: entry.html.php 5074 2012-12-06 10:37:26Z Raymond_Benc $
 */
 
 

 if (isset ( $this->_aVars['bIsViewingPoll'] )): ?>
    <div class="item_info">
<?php echo Phpfox::getLib('date')->convertTime($this->_aVars['aPoll']['time_stamp']); ?> <?php echo Phpfox::getPhrase('poll.by'); ?> <?php echo '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aPoll']['user_name'] . '"><a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aPoll']['user_name'], ((empty($this->_aVars['aPoll']['user_name']) && isset($this->_aVars['aPoll']['profile_page_id'])) ? $this->_aVars['aPoll']['profile_page_id'] : null))) . '">' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aPoll']['user_id'], $this->_aVars['aPoll']['full_name']), Phpfox::getParam('user.maximum_length_for_full_name')) . '</a></span>'; ?>
    </div>
    
<?php if (isset ( $this->_aVars['bIsViewingPoll'] ) && ( isset ( $this->_aVars['aPoll']['view_id'] ) && ! isset ( $this->_aVars['bDesign'] ) && $this->_aVars['aPoll']['view_id'] == 1 )): ?>
	<div class="message js_moderation_off" id="js_approve_message">
<?php echo Phpfox::getPhrase('poll.this_poll_is_being_moderated_and_no_votes_can_be_added_until_it_has_been_approved'); ?>
	</div>	
<?php endif; ?>

<?php if (( isset ( $this->_aVars['aPoll']['view_id'] ) && $this->_aVars['aPoll']['view_id'] == 1 && Phpfox ::getUserParam('poll.poll_can_moderate_polls')) || $this->_aVars['aPoll']['bCanEdit'] || ( ! isset ( $this->_aVars['bIsCustomPoll'] ) && ( isset ( $this->_aVars['aPoll']['user_id'] ) && $this->_aVars['aPoll']['user_id'] == Phpfox ::getUserId() && Phpfox ::getUserParam('poll.poll_can_delete_own_polls')))): ?>
	<div class="item_bar">
		<div class="item_bar_action_holder">
<?php if (isset ( $this->_aVars['aPoll']['view_id'] ) && $this->_aVars['aPoll']['view_id'] == 1 && Phpfox ::getUserParam('poll.poll_can_moderate_polls')): ?>
				<a href="#" class="item_bar_approve item_bar_approve_image" onclick="return false;" style="display:none;" id="js_item_bar_approve_image"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'ajax/add.gif')); ?></a>			
				<a href="#" class="item_bar_approve" onclick="$(this).hide(); $('#js_item_bar_approve_image').show(); $.ajaxCall('poll.moderatePoll','iResult=0&amp;iPoll=<?php echo $this->_aVars['aPoll']['poll_id']; ?>&amp;inline=true'); return false;"><?php echo Phpfox::getPhrase('poll.approve'); ?></a>
<?php endif; ?>
			<a href="#" class="item_bar_action"><span><?php echo Phpfox::getPhrase('poll.actions'); ?></span></a>		
			<ul>
				<?php
						Phpfox::getLib('template')->getBuiltFile('poll.block.link');						
						?>
			</ul>			
		</div>
	</div>
<?php endif;  endif; ?>

<?php if (isset ( $this->_aVars['aPoll'] )): ?>
<div id="poll_holder_<?php echo $this->_aVars['aPoll']['poll_id']; ?>"<?php if (! isset ( $this->_aVars['bIsViewingPoll'] )): ?> class="<?php if (isset ( $this->_aVars['aPoll']['view_id'] ) && ( ! isset ( $this->_aVars['bDesign'] ) && $this->_aVars['aPoll']['view_id'] == 1 && ( Phpfox ::getUserParam('poll.poll_can_moderate_polls') || ( $this->_aVars['aPoll']['user_id'] == Phpfox ::getUserId())))): ?> <?php endif;  if (isset ( $this->_aVars['bIsViewingPoll'] ) || ( isset ( $this->_aVars['bDesign'] ) && $this->_aVars['bDesign'] )): ?>row1 row_first<?php else:  if (isset ( $this->_aPhpfoxVars['iteration']['polls'] ) && is_int ( $this->_aPhpfoxVars['iteration']['polls'] / 2 )): ?>row1<?php else: ?>row2<?php endif;  if (isset ( $this->_aPhpfoxVars['iteration']['polls'] ) && $this->_aPhpfoxVars['iteration']['polls'] == 1): ?> row_first<?php endif;  endif; ?>"<?php endif; ?>>
	
	<div class="vote_holder_<?php echo $this->_aVars['aPoll']['poll_id']; ?>">		
		
<?php if (! isset ( $this->_aVars['bIsViewingPoll'] )): ?>
		<div class="row_title">
			
			<div class="row_title_image">	
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aPoll'],'suffix' => '_50_square','max_width' => 50,'max_height' => 50)); ?>
<?php if (! isset ( $this->_aVars['bDesign'] ) && ( Phpfox ::getUserParam('poll.poll_can_moderate_polls') || $this->_aVars['aPoll']['bCanEdit'] || ( isset ( $this->_aVars['aPoll']['user_id'] ) && $this->_aVars['aPoll']['user_id'] == Phpfox ::getUserId() && Phpfox ::getUserParam('poll.poll_can_delete_own_polls')))): ?>
				<div class="row_edit_bar_parent">
					<div class="row_edit_bar_holder">
						<ul>
							<?php
						Phpfox::getLib('template')->getBuiltFile('poll.block.link');						
						?>
						</ul>			
					</div>
					<div class="row_edit_bar">				
						<a href="#" class="row_edit_bar_action"><span><?php echo Phpfox::getPhrase('poll.actions'); ?></span></a>							
					</div>
				</div>
<?php endif; ?>
<?php if (! isset ( $this->_aVars['bDesign'] ) && Phpfox ::getUserParam('poll.poll_can_moderate_polls')): ?>
				<a href="#<?php echo $this->_aVars['aPoll']['poll_id']; ?>" class="moderate_link" rel="poll"><?php echo Phpfox::getPhrase('poll.moderate'); ?></a>							
<?php endif; ?>
			</div>			
			
			<div class="row_title_info">
				<header>
					<h1><span id="poll_view_<?php echo $this->_aVars['aPoll']['poll_id']; ?>"><a href="<?php echo Phpfox::permalink('poll', $this->_aVars['aPoll']['poll_id'], $this->_aVars['aPoll']['question'], false, null, (array) array (
)); ?>" id="poll_inner_title_<?php echo $this->_aVars['aPoll']['poll_id']; ?>" class="link"><?php echo Phpfox::getLib('phpfox.parse.output')->split(Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aPoll']['question']), 55, '...'), 40); ?></a></span></h1>
				</header>
				<div class="extra_info">
<?php echo Phpfox::getLib('date')->convertTime($this->_aVars['aPoll']['time_stamp']); ?> <?php echo Phpfox::getPhrase('poll.by'); ?> <?php echo '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aPoll']['user_name'] . '"><a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aPoll']['user_name'], ((empty($this->_aVars['aPoll']['user_name']) && isset($this->_aVars['aPoll']['profile_page_id'])) ? $this->_aVars['aPoll']['profile_page_id'] : null))) . '">' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aPoll']['user_id'], $this->_aVars['aPoll']['full_name']), Phpfox::getParam('user.maximum_length_for_full_name')) . '</a></span>'; ?>
				</div>			
					
<?php endif; ?>
			
<?php if (isset ( $this->_aVars['aPoll']['image_path'] ) && $this->_aVars['aPoll']['image_path'] != ''): ?>
			<div class="item_image" style="width:<?php echo Phpfox::getParam('poll.poll_max_image_pic_size'); ?>px;">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('thickbox' => true,'server_id' => $this->_aVars['aPoll']['server_id'],'title' => $this->_aVars['aPoll']['question'],'path' => 'poll.url_image','file' => $this->_aVars['aPoll']['image_path'],'suffix' => $this->_aVars['sSuffix'],'max_width' => 'poll.poll_max_image_pic_size','max_height' => 'poll.poll_max_image_pic_size')); ?>
			</div>
			<div class="item_image_content" style="margin-left:<?php echo Phpfox::getParam('poll.poll_max_image_pic_size'); ?>px;">
<?php endif; ?>
			
			<div id="js_poll_results_<?php echo $this->_aVars['aPoll']['poll_id']; ?>" class="item_content">
				<?php
						Phpfox::getLib('template')->getBuiltFile('poll.block.vote');						
						?>
			</div>	

<?php if (! isset ( $this->_aVars['bDesign'] ) && isset ( $this->_aVars['bIsViewingPoll'] ) && $this->_aVars['aPoll']['total_votes'] > 0 && ( ( Phpfox ::getUserParam('poll.can_view_user_poll_results_own_poll') && $this->_aVars['aPoll']['user_id'] == Phpfox ::getUserId()) || Phpfox ::getUserParam('poll.can_view_user_poll_results_other_poll'))): ?>
<?php if (isset ( $this->_aVars['aPoll']['user_voted_this_poll'] ) && ( $this->_aVars['aPoll']['user_voted_this_poll'] == false && Phpfox ::getUserParam('poll.view_poll_results_before_vote')) || ( $this->_aVars['aPoll']['user_voted_this_poll'] == true && Phpfox ::getUserParam('poll.view_poll_results_after_vote'))): ?>
			<div class="votes_holder">
<?php if (! isset ( $this->_aVars['bIsCustomPoll'] )): ?>
				<div id="votes"><a name="votes"></a></div>
				<h3><?php echo Phpfox::getPhrase('poll.members_votes_total_votes', array('total_votes' => $this->_aVars['aPoll']['total_votes'])); ?></h3>			
<?php if (! Phpfox ::getUserParam('poll.can_view_hidden_poll_votes') && $this->_aVars['aPoll']['hide_vote'] == '1' && Phpfox ::getUserId() != $this->_aVars['aPoll']['user_id']): ?>
				<div class="message">
<?php echo Phpfox::getPhrase('poll.votes_are_hidden_for_this_poll'); ?>
				</div>
<?php else: ?>
				<div id="js_votes">
<?php Phpfox::getBlock("poll.votes", array('page' => '0')); ?>
				</div>
			</div>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
	
<?php if (isset ( $this->_aVars['aPoll']['image_path'] ) && $this->_aVars['aPoll']['image_path'] != ''): ?>
		</div>
	<div class="clear"></div>
<?php endif; ?>
	
<?php if (! isset ( $this->_aVars['bIsViewingPoll'] ) && isset ( $this->_aVars['aPoll']['aFeed'] )): ?>
<?php Phpfox::getBlock('feed.comment', array('aFeed' => $this->_aVars['aPoll']['aFeed'])); ?>
<?php endif; ?>
	
<?php if (! isset ( $this->_aVars['bIsViewingPoll'] )): ?>
			</div>	
			<div class="clear"></div>
		</div>
<?php endif; ?>
	</div>	
	
</div>	
<?php endif; ?>
