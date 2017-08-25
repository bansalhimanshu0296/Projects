<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:44 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond_Benc
 * @package 		Phpfox
 * @version 		$Id: template-notification.html.php 2838 2011-08-16 19:09:21Z Raymond_Benc $
 */
 
 

?>
<ul class="panel_links">
	<li><a href="#" rel="user.panel" title="Settings" class="user_settings notify_drop_link"><span class="icon"></span><span class="phrase">Settings</span></a></li>
	<li><a href="#" rel="search" title="Search" class="search notify_drop_link"><span class="icon"></span><span class="phrase">Search</span></a></li>
<?php if (Phpfox ::getUserBy('profile_page_id') <= 0): ?>
<?php if (Phpfox ::isModule('friend')): ?>
<?php Phpfox::getBlock('friend.notify', array()); ?>
<?php endif; ?>
<?php if (Phpfox ::isModule('mail')): ?>
<?php Phpfox::getBlock('mail.notify', array()); ?>
<?php endif; ?>
<?php endif; ?>
<?php if (Phpfox ::isModule('notification')): ?>
<?php Phpfox::getBlock('notification.notify', array()); ?>
<?php endif; ?>
<?php if (( Phpfox ::isModule('shoutbox'))): ?>
	<li><a href="#" rel="shoutbox.panel" title="Shoutbox" class="shoutbox notify_drop_link"><span class="icon"></span><span class="phrase">Shoutbox</span></a></li>
<?php endif; ?>
</ul>
