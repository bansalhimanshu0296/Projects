<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:54 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond_Benc
 * @package 		Phpfox
 * @version 		$Id: link.html.php 6671 2013-09-25 10:06:46Z Fern $
 */
 
 

?>
<li class="activity_like_links">
	<a href="#" onclick="$Core.Like.Actions.doLike(<?php if ($this->_aVars['aLike']['like_is_custom']): ?>1<?php else: ?>0<?php endif; ?>, '<?php echo $this->_aVars['aLike']['like_type_id']; ?>', <?php echo $this->_aVars['aLike']['like_item_id']; ?>, <?php if (isset ( $this->_aVars['aFeed']['feed_id'] )):  echo $this->_aVars['aFeed']['feed_id'];  else: ?>0<?php endif; ?>, this); return false;" class="js_like_link_toggle js_like_link_like"<?php if ($this->_aVars['aLike']['like_is_liked']): ?> style="display:none;"<?php endif; ?>>
		<span class="icon"></span>
		<span class="phrase"><?php echo Phpfox::getPhrase('feed.like'); ?></span>
	</a>
	<a href="#" onclick="$(this).parents('.activity_action_bar:first').removeClass('is_liked'); $(this).parents('div:first').find('.js_like_link_like:first').show(); $(this).hide(); $.ajaxCall('like.delete', 'type_id=<?php echo $this->_aVars['aLike']['like_type_id']; ?>&amp;item_id=<?php echo $this->_aVars['aLike']['like_item_id']; ?>&amp;parent_id=<?php if (isset ( $this->_aVars['aFeed']['feed_id'] )):  echo $this->_aVars['aFeed']['feed_id'];  else:  endif;  if ($this->_aVars['aLike']['like_is_custom']): ?>&amp;custom_inline=1<?php endif; ?>', 'GET'); return false;" class="js_like_link_toggle js_like_link_unlike"<?php if ($this->_aVars['aLike']['like_is_liked']):  else: ?> style="display:none;"<?php endif; ?>>
		<span class="icon"></span>
		<span class="phrase"><?php echo Phpfox::getPhrase('feed.unlike'); ?></span>
	</a>
</li>
