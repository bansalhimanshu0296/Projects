<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:47 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond_Benc
 * @package 		Phpfox
 * @version 		$Id: register-top.html.php 4480 2012-07-06 08:03:22Z Raymond_Benc $
 */
 
 

?>
<div id="guest_panel">
	<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl(''); ?>" id="logo">SiteName</a>
<?php if (( ! $this->_aVars['hide_blocks'] )): ?>
	<ul>
		<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('user.register'); ?>" data-type="signup" class="signup no_ajax_link">Signup</a></li>
		<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('user.login'); ?>" data-type="login" class="login no_ajax_link">Login</a></li>
	</ul>
<?php endif; ?>
</div>

<?php if (( ! $this->_aVars['hide_blocks'] )): ?>
<div class="guest_panel_drop gpd_signup">
	<div class="guest_panel_drop_holder">
		<span class="gpd_close">Close</span>
		<div class="gpd_title">Signup</div>
<?php Phpfox::getBlock('user.register', array()); ?>
	</div>
</div>

<div class="guest_panel_drop gpd_login">
	<div class="guest_panel_drop_holder">
		<span class="gpd_close">Close</span>
		<div class="gpd_title">Login</div>
<?php Phpfox::getBlock('user.login-panel', array()); ?>
	</div>
</div>
<?php endif; ?>
