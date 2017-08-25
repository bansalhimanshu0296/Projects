<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:51 pm */ ?>
<?php
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_User
 * @version 		$Id: browse.html.php 2137 2010-11-15 13:37:06Z Raymond_Benc $
 * 
 */

?>
<div class="table_header">
<?php echo Phpfox::getPhrase('user.member_search'); ?>
</div>
<div class="table">
	<div class="table_left">
<?php echo Phpfox::getPhrase('user.show_users_who_have_not_logged_in_for'); ?>:
	</div>
	<div class="table_right">
		<input type="text" id="inactive_days" size="3" value="1"> <?php echo Phpfox::getPhrase('user.days'); ?>
	</div>
	<div class="clear"></div>
</div>

<div class="table">
	<div class="table_left">
<?php echo Phpfox::getPhrase('user.send_mails_in_batches_of'); ?>
	</div>
	<div class="table_right">
		<input type="text" id="mails_per_batch" size="3" value="0">
		<div class="extra_info">
<?php echo Phpfox::getPhrase('user.enter_0_for_all_at_once'); ?>
		</div>
	</div>
	<div class="clear"></div>
</div>

<div class="table">
	<div class="table_left"></div>
	<div class="table_right">
		<div class="extra_info"><?php echo Phpfox::getPhrase('user.this_feature_uses_the_language'); ?></div>
	</div>
	<div class="clear"></div>
</div>

<div class="table_clear">
	<input type="submit" value="<?php echo Phpfox::getPhrase('user.get_members_count'); ?>" class="button" id="btnSearch" />
	<input type="submit" value="<?php echo Phpfox::getPhrase('user.process_mailing_job'); ?>" class="button" id="btnProcess"/>
	<input type="submit" value="<?php echo Phpfox::getPhrase('user.stop_mailing_job'); ?>" class="button" id="btnStop" />
</div>

<div id="progress"></div>
