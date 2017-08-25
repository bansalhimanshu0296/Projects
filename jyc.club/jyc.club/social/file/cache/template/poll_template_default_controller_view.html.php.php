<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:57 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Poll
 * @version 		$Id: view.html.php 2501 2011-04-04 20:13:13Z Raymond_Benc $
 */
 
 

?>
<div class="item_view">
	<?php
						Phpfox::getLib('template')->getBuiltFile('poll.block.entry');						
						?>
	<div <?php if ($this->_aVars['aPoll']['view_id'] == 1): ?>style="display:none;" class="js_moderation_on"<?php endif; ?>>
<?php Phpfox::getBlock('feed.comment', array()); ?>
	</div>
</div>
