<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:54 pm */ ?>
<?php if (PHPFOX_IS_AJAX && Phpfox ::getLib('request')->get('theater') == 'true'): ?>


<?php elseif (isset ( $this->_aVars['sFeedType'] ) && $this->_aVars['sFeedType'] == 'view'): ?>
<div class="feed_share_custom">	
<?php if (Phpfox ::isModule('share') && Phpfox ::getParam('share.share_twitter_link')): ?>
		<div class="feed_share_custom_block"><a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo $this->_aVars['aFeed']['feed_link']; ?>" data-count="horizontal" data-via="<?php echo Phpfox::getParam('feed.twitter_share_via'); ?>"><?php echo Phpfox::getPhrase('feed.tweet'); ?></a><script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script></div>
<?php endif; ?>
<?php if (Phpfox ::isModule('share') && Phpfox ::getParam('share.share_google_plus_one')): ?>
	<div class="feed_share_custom_block">
		<g:plusone href="<?php echo $this->_aVars['aFeed']['feed_link']; ?>" size="medium"></g:plusone>
		<?php echo '
			<script type="text/javascript">
			  (function() {
				var po = document.createElement(\'script\'); po.type = \'text/javascript\'; po.async = true;
				po.src = \'https://apis.google.com/js/plusone.js\';
				var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(po, s);
			  })();
			</script>
		'; ?>

	</div>
<?php endif; ?>
<?php if (Phpfox ::isModule('share') && Phpfox ::getParam('share.share_facebook_like')): ?>
		<div class="feed_share_custom_block">
			<iframe src="http<?php if (Phpfox ::getParam('core.force_https_secure_pages') && Phpfox ::getParam('core.force_secure_site')): ?>s<?php endif; ?>://www.facebook.com/plugins/like.php?app_id=<?php if (Phpfox ::getParam('facebook.facebook_app_id') != ''):  echo Phpfox::getParam('facebook.facebook_app_id');  else: ?>156226084453194<?php endif; ?>&amp;href=<?php if (! empty ( $this->_aVars['aFeed']['feed_link'] )):  echo $this->_aVars['aFeed']['feed_link'];  else:  echo Phpfox::getLib('phpfox.url')->makeUrl('current');  endif; ?>&amp;send=false&amp;layout=button_count&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;width=90&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:140px; height:21px;" allowTransparency="true"></iframe>					
		</div>
<?php endif; ?>
	<div class="clear"></div>
</div>
<?php endif; ?>

<ul>
<?php if (! Phpfox ::getService('profile')->timeline()): ?>
<?php if (! isset ( $this->_aVars['aFeed']['feed_mini'] )): ?>
<?php if ($this->_aVars['aFeed']['privacy'] > 0): ?>
			<li class="privacy_icon_holder"><div class="js_hover_title"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'layout/privacy_icon.png','alt' => $this->_aVars['aFeed']['privacy'])); ?><span class="js_hover_info"><?php if (Phpfox ::isModule('privacy')):  echo Phpfox::getService('privacy')->getPhrase($this->_aVars['aFeed']['privacy']);  else: ?>Privacy <?php echo $this->_aVars['aFeed']['privacy'];  endif; ?></span></div></li>
			
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>

	
	
<?php if (Phpfox ::isUser() && Phpfox ::isModule('comment') && Phpfox ::getUserParam('feed.can_post_comment_on_feed') && Phpfox ::getUserParam('comment.can_post_comments') && ( isset ( $this->_aVars['aFeed']['comment_type_id'] ) && $this->_aVars['aFeed']['can_post_comment'] ) || ( ! isset ( $this->_aVars['aFeed']['comment_type_id'] ) && isset ( $this->_aVars['aFeed']['total_comment'] ) )): ?>
	<li>
		<a href="<?php echo $this->_aVars['aFeed']['feed_link']; ?>add-comment/" class="<?php if (( isset ( $this->_aVars['sFeedType'] ) && $this->_aVars['sFeedType'] == 'mini' ) || ( ! isset ( $this->_aVars['aFeed']['comment_type_id'] ) && isset ( $this->_aVars['aFeed']['total_comment'] ) )):  else: ?>js_feed_entry_add_comment no_ajax_link<?php endif; ?>"><?php echo Phpfox::getPhrase('feed.comment'); ?></a>
	</li>				
<?php if (( Phpfox ::isModule('share') && ! isset ( $this->_aVars['aFeed']['no_share'] ) )): ?>
		
<?php endif; ?>
<?php endif; ?>
<?php if (Phpfox ::isModule('share') && ! isset ( $this->_aVars['aFeed']['no_share'] )): ?>
<?php if ($this->_aVars['aFeed']['privacy'] == '0' || $this->_aVars['aFeed']['privacy'] == '1' || $this->_aVars['aFeed']['privacy'] == '2'): ?>
<?php Phpfox::getBlock('share.link', array('type' => 'feed','display' => 'menu','url' => $this->_aVars['aFeed']['feed_link'],'title' => $this->_aVars['aFeed']['feed_title'],'sharefeedid' => $this->_aVars['aFeed']['item_id'],'sharemodule' => $this->_aVars['aFeed']['type_id'])); ?>
<?php else: ?>
<?php Phpfox::getBlock('share.link', array('type' => 'feed','display' => 'menu','url' => $this->_aVars['aFeed']['feed_link'],'title' => $this->_aVars['aFeed']['feed_title'])); ?>
<?php endif; ?>
<?php endif; ?>
<?php if (Phpfox ::isModule('report') && isset ( $this->_aVars['aFeed']['report_module'] ) && isset ( $this->_aVars['aFeed']['force_report'] )): ?>
			
		<li><a href="#?call=report.add&amp;height=100&amp;width=400&amp;type=<?php echo $this->_aVars['aFeed']['report_module']; ?>&amp;id=<?php echo $this->_aVars['aFeed']['item_id']; ?>" class="inlinePopup activity_feed_report" title="<?php echo $this->_aVars['aFeed']['report_phrase']; ?>"><?php echo Phpfox::getPhrase('feed.report'); ?></a></li>				
<?php endif; ?>
					
<?php (($sPlugin = Phpfox_Plugin::get('feed.template_block_entry_2')) ? eval($sPlugin) : false); ?>
<?php if (Phpfox ::isMobile() && ( ( defined ( 'PHPFOX_FEED_CAN_DELETE' ) ) || ( Phpfox ::getUserParam('feed.can_delete_own_feed') && $this->_aVars['aFeed']['user_id'] == Phpfox ::getUserId()) || Phpfox ::getUserParam('feed.can_delete_other_feeds'))): ?>
	
	<li><a href="#" onclick="if (confirm(getPhrase('core.are_you_sure'))){$.ajaxCall('feed.delete', 'id=<?php echo $this->_aVars['aFeed']['feed_id'];  if (isset ( $this->_aVars['aFeedCallback']['module'] )): ?>&amp;module=<?php echo $this->_aVars['aFeedCallback']['module']; ?>&amp;item=<?php echo $this->_aVars['aFeedCallback']['item_id'];  endif; ?>', 'GET');} return false;"><?php echo Phpfox::getPhrase('feed.delete'); ?></a></li>
<?php endif; ?>
</ul>

