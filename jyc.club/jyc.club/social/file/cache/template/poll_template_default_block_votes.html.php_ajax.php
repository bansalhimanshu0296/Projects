<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:57 pm */ ?>
<div style="height:300px;" class="label_flow">
<?php if (count((array)$this->_aVars['aVotes'])):  $this->_aPhpfoxVars['iteration']['votes'] = 0;  foreach ((array) $this->_aVars['aVotes'] as $this->_aVars['aResult']):  $this->_aPhpfoxVars['iteration']['votes']++; ?>

	<div class="<?php if (is_int ( $this->_aPhpfoxVars['iteration']['votes'] / 2 )): ?>row1<?php else: ?>row2<?php endif;  if ($this->_aPhpfoxVars['iteration']['votes'] == 1): ?> row_first<?php endif; ?>">
		<div class="go_left" style="width:52px; text-align:center;">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aResult'],'suffix' => '_50_square','max_width' => 50,'max_height' => 50)); ?>
		</div>
		<div style="margin-left:52px;">
<?php echo Phpfox::getPhrase('poll.user_info_voted_answer_on_time_stamp', array('user_info' => '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aResult']['user_name'] . '"><a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aResult']['user_name'], ((empty($this->_aVars['aResult']['user_name']) && isset($this->_aVars['aResult']['profile_page_id'])) ? $this->_aVars['aResult']['profile_page_id'] : null))) . '">' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aResult']['user_id'], $this->_aVars['aResult']['full_name']), Phpfox::getParam('user.maximum_length_for_full_name')) . '</a></span>','answer' => Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aResult']['answer']),'time_stamp' => Phpfox::getTime(Phpfox::getParam('poll.poll_view_time_stamp'), $this->_aVars['aResult']['time_stamp']))); ?>
		</div>
		<div class="clear"></div>
	</div>
<?php endforeach; endif; ?>
</div>
