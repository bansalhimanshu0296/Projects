<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 9:03 pm */ ?>
<?php

 if (Phpfox ::getParam('photo.show_info_on_mouseover')): ?>
<?php if (! isset ( $this->_aVars['aAlbum'] ) || empty ( $this->_aVars['aAlbum'] )): ?>
		<div class="photo_hover_info">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'layout/thickbox_bg.png','class' => 'bg')); ?>
			<div class="photo_hover_info_album_title">
				<strong>
<?php if (isset ( $this->_aVars['aPhoto']['album_name'] )): ?>
<?php echo Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getLib('phpfox.parse.output')->clean(Phpfox::getLib('locale')->convert($this->_aVars['aPhoto']['album_name'])), 22, '...'); ?>
<?php elseif (! empty ( $this->_aVars['aPhoto']['title'] )): ?>
<?php echo Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aPhoto']['title']), 22, '...'); ?>
<?php endif; ?>
				</strong>
<?php if (isset ( $this->_aVars['aPhoto']['user_name'] )): ?><div><?php echo '<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aPhoto']['user_name'] . '" itemprop="author"><a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aPhoto']['user_name'], ((empty($this->_aVars['aPhoto']['user_name']) && isset($this->_aVars['aPhoto']['profile_page_id'])) ? $this->_aVars['aPhoto']['profile_page_id'] : null))) . '" rel="author" >' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aPhoto']['user_id'], $this->_aVars['aPhoto']['full_name']), 50, '...') . '</a></span>'; ?></div><?php endif; ?>
			</div>
			<div class="photo_hover_info_actions">
<?php if (Phpfox ::isModule('like')): ?>
				<div class="photo_hover_info_actions_do">
					<a href="#" class="js_like_photo js_toggle_like_<?php echo $this->_aVars['aPhoto']['photo_id']; ?>" id="js_like_<?php echo $this->_aVars['aPhoto']['photo_id']; ?>" <?php if (isset ( $this->_aVars['aPhoto']['is_liked'] ) && $this->_aVars['aPhoto']['is_liked']): ?>style="display:none;"<?php endif; ?> onclick="$Core.Photo.inlineAction(<?php echo $this->_aVars['aPhoto']['photo_id']; ?>, 'js_like', 'add', 'js_toggle_like_<?php echo $this->_aVars['aPhoto']['photo_id']; ?>');return false;"><?php echo Phpfox::getPhrase('like.like_uppercase'); ?></a>
					<a href="#" class="js_unlike_photo js_toggle_like_<?php echo $this->_aVars['aPhoto']['photo_id']; ?>" id="js_undislike_<?php echo $this->_aVars['aPhoto']['photo_id']; ?>" <?php if (! isset ( $this->_aVars['aPhoto']['is_liked'] ) || ! $this->_aVars['aPhoto']['is_liked']): ?>style="display:none;"<?php endif; ?> onclick="$Core.Photo.inlineAction(<?php echo $this->_aVars['aPhoto']['photo_id']; ?>, 'js_like', 'delete', 'js_toggle_like_<?php echo $this->_aVars['aPhoto']['photo_id']; ?>'); return false;"><?php echo Phpfox::getPhrase('like.unlike_uppercase'); ?></a>		  
				</div>
				<div class="photo_hover_info_actions_counter">
					<div class="js_like_counter">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'layout/like.png')); ?> <span id="js_like_counter_<?php echo $this->_aVars['aPhoto']['photo_id']; ?>"><?php if (isset ( $this->_aVars['aPhoto']['total_like'] )):  echo $this->_aVars['aPhoto']['total_like'];  else: ?>0<?php endif; ?></span>
					</div>
				</div>
<?php endif; ?>
			</div>
		</div>
		
<?php else: ?>
		<div class="photo_hover_info">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'layout/thickbox_bg.png','class' => 'bg')); ?>
			<div class="photo_hover_info_album_title">
				<strong>
<?php if (isset ( $this->_aVars['aAlbum']['name'] )): ?>
<?php echo Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aAlbum']['name']), 22, '...'); ?>
<?php endif; ?>
				</strong>
				<div>
<?php if ($this->_aVars['aAlbum']['total_photo'] == '1'): ?>
<?php echo Phpfox::getPhrase('photo.number_photo', array('iCnt' => 1)); ?>
<?php else: ?>
<?php echo Phpfox::getPhrase('photo.number_photos', array('iCnt' => number_format($this->_aVars['aAlbum']['total_photo']))); ?>
<?php endif; ?>
				</div>
<?php if (! defined ( 'PHPFOX_IS_USER_PROFILE' )): ?>
					<div><?php echo Phpfox::getLib('phpfox.parse.output')->split('<span class="user_profile_link_span" id="js_user_name_link_' . $this->_aVars['aAlbum']['user_name'] . '"><a href="' . Phpfox::getLib('phpfox.url')->makeUrl('profile', array($this->_aVars['aAlbum']['user_name'], ((empty($this->_aVars['aAlbum']['user_name']) && isset($this->_aVars['aAlbum']['profile_page_id'])) ? $this->_aVars['aAlbum']['profile_page_id'] : null))) . '">' . Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getService('user')->getCurrentName($this->_aVars['aAlbum']['user_id'], $this->_aVars['aAlbum']['full_name']), 50, '...') . '</a></span>', 10); ?></div>
<?php endif; ?>
			</div>
			<div class="photo_hover_info_actions">
<?php if (Phpfox ::isModule('like')): ?>
				<div class="photo_hover_info_actions_do">
					<a href="#" class="js_like_photo js_toggle_like_<?php echo $this->_aVars['aAlbum']['album_id']; ?>" id="js_like_<?php echo $this->_aVars['aAlbum']['album_id']; ?>" <?php if (isset ( $this->_aVars['aAlbum']['is_liked'] ) && $this->_aVars['aAlbum']['is_liked']): ?>style="display:none;"<?php endif; ?> onclick="$Core.Photo.albumInlineAction(<?php echo $this->_aVars['aAlbum']['album_id']; ?>, 'js_like', 'add', 'js_toggle_like_<?php echo $this->_aVars['aAlbum']['album_id']; ?>');return false;"><?php echo Phpfox::getPhrase('like.like_uppercase'); ?></a>
					<a href="#" class="js_unlike_photo js_toggle_like_<?php echo $this->_aVars['aAlbum']['album_id']; ?>" id="js_undislike_<?php echo $this->_aVars['aAlbum']['album_id']; ?>" <?php if (! isset ( $this->_aVars['aAlbum']['is_liked'] ) || ! $this->_aVars['aAlbum']['is_liked']): ?>style="display:none;"<?php endif; ?> onclick="$Core.Photo.albumInlineAction(<?php echo $this->_aVars['aAlbum']['album_id']; ?>, 'js_like', 'delete', 'js_toggle_like_<?php echo $this->_aVars['aAlbum']['album_id']; ?>'); return false;"><?php echo Phpfox::getPhrase('like.unlike_uppercase'); ?></a>		  
				</div>
				<div class="photo_hover_info_actions_counter">
					<div class="js_like_counter">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'layout/like.png')); ?> <span id="js_like_counter_<?php echo $this->_aVars['aAlbum']['album_id']; ?>"><?php if (isset ( $this->_aVars['aAlbum']['total_like'] )):  echo $this->_aVars['aAlbum']['total_like'];  else: ?>0<?php endif; ?></span>
					</div>
				</div>
<?php endif; ?>
			</div>
		</div>
<?php endif;  endif; ?>

