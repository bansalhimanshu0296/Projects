<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 9:13 pm */ ?>
<div class="user_panel">
	<div class="up_image">
<?php echo $this->_aVars['user_image']; ?>
	</div>
	<div class="up_name">
<?php echo '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['user']['user_name'] . '"><a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['user']['user_name'], ((empty($this->_aVars['user']['user_name']) && isset($this->_aVars['user']['profile_page_id'])) ? $this->_aVars['user']['profile_page_id'] : null))) . '">' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['user']['user_id'], $this->_aVars['user']['full_name']), Phpfox::getParam('user.maximum_length_for_full_name')) . '</a></span>'; ?>
	</div>
	<div class="up_links">
		<ul>
			<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('user.profile'); ?>">Edit Profile</a></li>
			<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('user.privacy'); ?>">Privacy Settings</a></li>
			<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('user.setting'); ?>">Account Settings</a></li>
			<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('user.photo'); ?>">Profile Photo</a></li>
			<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('user.logout'); ?>">Logout</a></li>
		</ul>
	</div>
</div>
