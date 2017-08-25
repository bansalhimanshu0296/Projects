<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:59 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond_Benc
 * @package 		Phpfox
 * @version 		$Id: index.html.php 3990 2012-03-09 15:28:08Z Raymond_Benc $
 */
 
 

 if (count ( $this->_aVars['aPages'] )):  if ($this->_aVars['sView'] == 'my' && Phpfox ::getUserBy('profile_page_id')): ?>
<div class="message">
<?php echo Phpfox::getPhrase('pages.note_that_pages_displayed_here_are_pages_created_by_the_page', array('global_full_name' => Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['sGlobalUserFullName']),'profile_full_name' => Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aGlobalProfilePageLogin']['full_name']))); ?>
</div>
<?php endif;  if (count((array)$this->_aVars['aPages'])):  $this->_aPhpfoxVars['iteration']['pages'] = 0;  foreach ((array) $this->_aVars['aPages'] as $this->_aVars['aPage']):  $this->_aPhpfoxVars['iteration']['pages']++; ?>

<div id="js_pages_<?php echo $this->_aVars['aPage']['page_id']; ?>" class="pages_browse">
	<a href="<?php echo $this->_aVars['aPage']['link']; ?>" class="pages_browse_image"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('server_id' => $this->_aVars['aPage']['profile_server_id'],'title' => $this->_aVars['aPage']['title'],'path' => 'core.url_user','file' => $this->_aVars['aPage']['profile_user_image'],'suffix' => '_120_square','max_width' => '120','max_height' => '120','is_page_image' => true)); ?></a>
	<div class="pages_browse_link">
		<a href="<?php echo $this->_aVars['aPage']['link']; ?>" class="pbl_main"><?php echo Phpfox::getLib('phpfox.parse.output')->split(Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aPage']['title']), 55, '...'), 40); ?></a>
<?php if ($this->_aVars['aPage']['total_like'] > 1):  echo Phpfox::getPhrase('pages.total_members', array('total' => number_format($this->_aVars['aPage']['total_like'])));  elseif ($this->_aVars['aPage']['total_like'] == 1):  echo Phpfox::getPhrase('pages.1_member');  else:  echo Phpfox::getPhrase('pages.no_members');  endif; ?>
	</div>
	<?php
						Phpfox::getLib('template')->getBuiltFile('pages.block.joinpage');						
						?>
</div>
<?php endforeach; endif;  if (Phpfox ::getUserParam('pages.can_moderate_pages')):  Phpfox::getBlock('core.moderation');  endif; ?>

<?php if (!isset($this->_aVars['aPager'])): Phpfox::getLib('pager')->set(array('page' => Phpfox::getLib('request')->getInt('page'), 'size' => Phpfox::getLib('search')->getDisplay(), 'count' => Phpfox::getLib('search')->getCount())); endif;  $this->getLayout('pager');  else: ?>
<div class="extra_info">
<?php echo Phpfox::getPhrase('pages.no_pages_found'); ?>
</div>
<?php endif; ?>
