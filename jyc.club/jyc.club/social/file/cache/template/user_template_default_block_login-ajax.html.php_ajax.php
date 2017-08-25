<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 9:09 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_User
 * @version 		$Id: login-ajax.html.php 2013 2010-11-01 13:12:53Z Raymond_Benc $
 */
 
 

 if ($this->_aVars['bIsAJaxAdminCp']): ?>
<div class="error_message">
<?php echo Phpfox::getPhrase('admincp.you_have_logged_out_of_the_site'); ?>
</div>
<script type="text/javascript">
	window.location.href = '<?php echo Phpfox::getLib('phpfox.url')->makeUrl('user.login'); ?>';
</script>
<?php else: ?>
<div class="error_message">
<?php echo Phpfox::getPhrase('user.you_need_logged_that'); ?>
</div>
<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl("user.login"); ?>" id="js_login_form">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
	<div class="p_top_4">
		<label for="js_email"><?php if (Phpfox ::getParam('user.login_type') == 'user_name'):  echo Phpfox::getPhrase('user.user_name');  elseif (Phpfox ::getParam('user.login_type') == 'email'):  echo Phpfox::getPhrase('user.email');  else:  echo Phpfox::getPhrase('user.login');  endif; ?></label>:
		<div class="p_4">
			<input type="text" name="val[login]" id="js_email" value="" size="30" style="width:90%;" />
		</div>
	</div>
	
	<div class="p_top_4">
		<label for="js_password"><?php echo Phpfox::getPhrase('user.password'); ?>:</label> 
		<div class="p_4">
			<input type="password" name="val[password]" id="js_password" value="" size="30" style="width:90%;" />
			<div class="p_top_8">
				<label><input type="checkbox" name="val[remember_me]" value="" class="checkbox" /> <?php echo Phpfox::getPhrase('user.remember'); ?></label>
			</div>
		</div>
	</div>
	
	<div class="p_top_8">
<?php if (Phpfox ::getParam('user.allow_user_registration')): ?>
		<div style="position:absolute; right:15px;">
			<input type="button" value="<?php echo Phpfox::getPhrase('user.register_for_an_account'); ?>" class="button" onclick="window.location.href = '<?php echo Phpfox::getLib('phpfox.url')->makeUrl('user.register'); ?>';" />
		</div>			
<?php endif; ?>
		<input type="submit" value="<?php echo Phpfox::getPhrase('user.login_button'); ?>" class="button" />
	</div>

</form>

<?php endif; ?>
