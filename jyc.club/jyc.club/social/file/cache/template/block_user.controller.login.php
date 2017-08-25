<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:47 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_User
 * @version 		$Id: login.html.php 3445 2011-11-03 13:11:23Z Raymond_Benc $
 */
 
 

 echo $this->_aVars['sCreateJs']; ?>
<div class="main_break">
	<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl("user.login"); ?>" id="js_login_form" onsubmit="<?php echo $this->_aVars['sGetJsForm']; ?>">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
		<div class="table">
			<div class="table_right table_right_input">
				<input type="text" name="val[login]" id="login" value="<?php echo $this->_aVars['sDefaultEmailInfo']; ?>" size="40" placeholder="<?php if (Phpfox ::getParam('user.login_type') == 'user_name'):  echo Phpfox::getPhrase('user.user_name');  elseif (Phpfox ::getParam('user.login_type') == 'email'):  echo Phpfox::getPhrase('user.email');  else:  echo Phpfox::getPhrase('user.login');  endif; ?>" />
			</div>
		</div>
		
		<div class="table">
			<div class="table_right table_right_input">
				<input type="password" name="val[login_password]" id="login_password" value="" size="40" placeholder="<?php echo Phpfox::getPhrase('user.password'); ?>" />
			</div>
			<div class="clear"></div>
		</div>

<?php (($sPlugin = Phpfox_Plugin::get('user.template_controller_login_end')) ? eval($sPlugin) : false); ?>
		
		<div class="table_clear">
			<div class="table_button"><input type="submit" value="<?php echo Phpfox::getPhrase('user.login_button'); ?>" class="button" /></div>
			<label class="table_button"><input type="checkbox" class="checkbox" name="val[remember_me]" value="" /> <?php echo Phpfox::getPhrase('user.remember'); ?></label>
		</div>

<?php (($sPlugin = Phpfox_Plugin::get('user.template.login_header_set_var')) ? eval($sPlugin) : false); ?>
<?php if (isset ( $this->_aVars['bCustomLogin'] )): ?>
		<div class="p_top_8">
<?php echo Phpfox::getPhrase('user.or_login_with'); ?>:
			<div class="p_top_4">
<?php (($sPlugin = Phpfox_Plugin::get('user.template_controller_login_block__end')) ? eval($sPlugin) : false); ?>
			</div>
		</div>
<?php endif; ?>
		
		<div class="table_lost_password">
			<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('user.password.request'); ?>"><?php echo Phpfox::getPhrase('user.forgot_your_password'); ?></a>
		</div>	
	
</form>
	
</div>
