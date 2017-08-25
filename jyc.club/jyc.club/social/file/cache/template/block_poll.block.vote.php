<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:57 pm */ ?>
<?php if (! isset ( $this->_aVars['aPoll']['voted'] )): ?>
<?php if (! PHPFOX_IS_AJAX): ?>
<div id="vote_<?php echo $this->_aVars['aPoll']['poll_id']; ?>">
<?php endif; ?>
	<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('current'); ?>" id="js_poll_form_<?php echo $this->_aVars['aPoll']['poll_id']; ?>">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
		<div><input type="hidden" name="val[poll_id]" value="<?php echo $this->_aVars['aPoll']['poll_id']; ?>" /></div>
<?php if (isset ( $this->_aVars['aPoll']['answer'] )): ?>
<?php if (count((array)$this->_aVars['aPoll']['answer'])):  foreach ((array) $this->_aVars['aPoll']['answer'] as $this->_aVars['answer']): ?>
<?php if (! empty ( $this->_aVars['answer']['answer'] )): ?>
		<div class="p_2">
			<label <?php if (! isset ( $this->_aVars['aPoll']['poll_is_in_feed'] )): ?>onclick="$('#js_submit_vote<?php if (isset ( $this->_aVars['iKey'] )): ?>_<?php echo $this->_aVars['iKey'];  endif; ?>').show(); $('.js_poll_answer<?php if (isset ( $this->_aVars['iKey'] )): ?>_<?php echo $this->_aVars['iKey'];  endif; ?>').attr('checked', false); $(this).find('.js_poll_answer<?php if (isset ( $this->_aVars['iKey'] )): ?>_<?php echo $this->_aVars['iKey'];  endif; ?>').attr('checked', true);"<?php endif; ?>>
<?php if (! isset ( $this->_aVars['aPoll']['poll_is_in_feed'] )): ?><input class="checkbox js_poll_answer<?php if (isset ( $this->_aVars['iKey'] )): ?>_<?php echo $this->_aVars['iKey'];  endif; ?>" type="radio" name="val[answer]" value="<?php echo $this->_aVars['answer']['answer_id']; ?>" style="vertical-align:middle;" /><?php endif; ?>
			<span title="<?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['answer']['answer']); ?>"><?php echo Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getLib('phpfox.parse.output')->split(Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['answer']['answer']), 50), 150, '...'); ?></span>
			</label>
		</div>
<?php endif; ?>
<?php endforeach; endif; ?>
<?php endif; ?>
		<div class="p_4" id="js_submit_vote<?php if (isset ( $this->_aVars['iKey'] )): ?>_<?php echo $this->_aVars['iKey'];  endif; ?>" style="display:none;">
<?php if (isset ( $this->_aVars['aPoll']['view_id'] ) && ! isset ( $this->_aVars['bDesign'] ) && $this->_aVars['aPoll']['view_id'] == 1): ?>
			<div class="extra_info js_moderation_off">
<?php echo Phpfox::getPhrase('poll.cannot_cast_a_vote_when_a_poll_is_pending_approval'); ?>
			</div>
<?php endif; ?>
			<div <?php if (! isset ( $this->_aVars['aPoll']['poll_is_in_feed'] ) && ( isset ( $this->_aVars['aPoll']['view_id'] ) && ! isset ( $this->_aVars['bDesign'] ) && $this->_aVars['aPoll']['view_id'] == 1 )): ?>style="display:none;" class="js_moderation_on"<?php endif; ?>>
			<input type="button" value="<?php echo Phpfox::getPhrase('poll.submit_your_vote'); ?>" class="button" onclick="$(this).parent().hide(); $(this).parents('.p_4:first').find('.js_poll_image_ajax:first').show(); $('#js_poll_form_<?php echo $this->_aVars['aPoll']['poll_id']; ?>').ajaxCall('poll.addVote');return false;" />&nbsp;<input type="button" class="button button_off" onclick="$('#js_poll_form_<?php echo $this->_aVars['aPoll']['poll_id']; ?>')[0].reset(); $('#js_submit_vote<?php if (isset ( $this->_aVars['iKey'] )): ?>_<?php echo $this->_aVars['iKey'];  endif; ?>').hide();" value="<?php echo Phpfox::getPhrase('poll.cancel_uppercase'); ?>" />
		</div>
		<div class="js_poll_image_ajax" style="display:none;">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'ajax/add.gif','class' => 'v_middle')); ?>
		</div>
</div>

</form>

<?php if (! PHPFOX_IS_AJAX): ?>
</div>
<?php endif;  endif; ?>

<?php if (! isset ( $this->_aVars['aPoll']['poll_is_in_feed'] ) && ( ( ( isset ( $this->_aVars['aPoll']['voted'] ) ) || ( ! Phpfox ::getUserParam('poll.can_vote_in_own_poll') && ( $this->_aVars['aPoll']['user_id'] == Phpfox ::getUserId())) || Phpfox ::getUserParam('poll.view_poll_results_before_vote') || ( isset ( $this->_aVars['bDesign'] ) && $this->_aVars['bDesign'] ) ) )): ?>
<div class="votes"<?php if (! PHPFOX_IS_AJAX): ?> id="vote_list_<?php echo $this->_aVars['aPoll']['poll_id']; ?>"<?php endif; ?>>
<?php if (count((array)$this->_aVars['aPoll']['answer'])):  foreach ((array) $this->_aVars['aPoll']['answer'] as $this->_aVars['aAnswer']): ?>
	<div class="answers_container<?php if (Phpfox ::getUserParam('poll.highlight_answer_voted_by_viewer') && isset ( $this->_aVars['aPoll']['voted'] ) && $this->_aVars['aPoll']['answer_id'] == $this->_aVars['aAnswer']['answer_id']): ?> user_answered_this<?php endif; ?>">
		<div><?php echo $this->_aVars['aAnswer']['answer']; ?></div>
<?php if (( ( isset ( $this->_aVars['aPoll']['user_voted_this_poll'] ) && ( ( $this->_aVars['aPoll']['user_voted_this_poll'] == false && Phpfox ::getUserParam('poll.view_poll_results_before_vote')) || ( $this->_aVars['aPoll']['user_voted_this_poll'] == true && Phpfox ::getUserParam('poll.view_poll_results_after_vote')))) || ( ! isset ( $this->_aVars['aPoll']['user_voted_this_poll'] ) ) ) || ( ( isset ( $this->_aVars['bDesign'] ) && $this->_aVars['bDesign'] ) )): ?>
<?php if (! isset ( $this->_aVars['bDesign'] )): ?>
		<div class="extra_info">
<?php if (isset ( $this->_aVars['aAnswer']['vote_percentage'] )): ?>
				&nbsp;<?php echo $this->_aVars['aAnswer']['vote_percentage']; ?>% (<?php echo Phpfox::getPhrase('poll.total_votes_votes', array('total_votes' => $this->_aVars['aAnswer']['total_votes'])); ?>)
<?php else: ?>
<?php echo Phpfox::getPhrase('poll.votes_0'); ?>
<?php endif; ?>
		</div>
<?php endif; ?>
		<div class="poll_answer_container js_sample_outer" style="border:1px solid #<?php if (isset ( $this->_aVars['aPoll']['border'] ) && ( $this->_aVars['aPoll']['border'] != '' )):  echo $this->_aVars['aPoll']['border'];  else: ?>000<?php endif; ?>; background:<?php if (isset ( $this->_aVars['aPoll']['background'] ) && ( $this->_aVars['aPoll']['background'] != '' )): ?>#<?php echo $this->_aVars['aPoll']['background'];  else: ?>b70000<?php endif; ?>;">
			<div class="poll_answer_percentage js_sample_percent percentage" style="background:<?php if (isset ( $this->_aVars['aPoll']['percentage'] ) && ( $this->_aVars['aPoll']['percentage'] != '' )): ?>#<?php echo $this->_aVars['aPoll']['percentage'];  else: ?>#298ADA<?php endif; ?>; <?php if (isset ( $this->_aVars['bDesign'] ) && $this->_aVars['bDesign']): ?>width:40%;<?php else:  if (isset ( $this->_aVars['aAnswer']['vote_percentage'] )): ?>width:<?php echo $this->_aVars['aAnswer']['vote_percentage'];  elseif (! Phpfox ::getUserParam('poll.can_vote_in_own_poll')): ?>width:0<?php endif; ?>%;<?php endif; ?>">&nbsp;</div>
		</div>
<?php endif; ?>
	</div>
<?php endforeach; else: ?>
<?php echo Phpfox::getPhrase('poll.no_answers_to_show'); ?>
<?php endif; ?>
	
<?php if (isset ( $this->_aVars['aPoll']['answer'] ) && count ( $this->_aVars['aPoll']['answer'] ) && ! isset ( $this->_aVars['bDesign'] ) && $this->_aVars['aPoll']['total_votes'] > 0 && ( ( Phpfox ::getUserParam('poll.can_view_user_poll_results_own_poll') && $this->_aVars['aPoll']['user_id'] == Phpfox ::getUserId()) || Phpfox ::getUserParam('poll.can_view_user_poll_results_other_poll'))): ?>
	<div class="poll_result_link">
		<a href="#" onclick="$Core.box('poll.pageVotes', 400, 'poll_id=<?php echo $this->_aVars['aPoll']['poll_id']; ?>'); return false;"><?php echo Phpfox::getPhrase('poll.view_results'); ?></a>
	</div>
<?php endif; ?>
</div>
<?php endif; ?>
