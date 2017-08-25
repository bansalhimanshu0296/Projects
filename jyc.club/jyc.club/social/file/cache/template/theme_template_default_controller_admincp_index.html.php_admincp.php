<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:52 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Theme
 * @version 		$Id: index.html.php 1298 2009-12-05 16:19:23Z Raymond_Benc $
 */
 
 

 if (count((array)$this->_aVars['aThemes'])):  foreach ((array) $this->_aVars['aThemes'] as $this->_aVars['theme']): ?>
<div class="themes<?php if (( $this->_aVars['theme']['is_default'] )): ?> is_default<?php endif; ?>" data-src="<?php echo $this->_aVars['theme']['image']; ?>">
	<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.theme.manage', array('id' => $this->_aVars['theme']['theme_id'])); ?>">
		<span class="phrase"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['theme']['name']); ?></span>
	</a>
</div>
<?php endforeach; endif; ?>
