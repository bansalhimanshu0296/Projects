<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:44 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond_Benc
 * @package 		Phpfox
 * @version 		$Id: controller.html.php 64 2009-01-19 15:05:54Z Raymond_Benc $
 */
 
 

?>
<?php if (! $this->_aVars['bIsUsersProfilePage'] && count ( $this->_aVars['aSubMenus'] )): ?>
<?php if (Phpfox ::isMobile()): ?>
<?php if (count ( $this->_aVars['aSubMenus'] ) == 1): ?>
<?php if (count((array)$this->_aVars['aSubMenus'])):  $this->_aPhpfoxVars['iteration']['submenu'] = 0;  foreach ((array) $this->_aVars['aSubMenus'] as $this->_aVars['iKey'] => $this->_aVars['aSubMenu']):  $this->_aPhpfoxVars['iteration']['submenu']++; ?>

			<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aSubMenu']['url']); ?>" class="mobile_section_menu"><?php echo Phpfox::getPhrase('core.add'); ?></a>
<?php endforeach; endif; ?>
<?php else: ?>
			<a href="#" class="mobile_section_menu" onclick="$('#section_menu').toggle(); return false;"><?php echo Phpfox::getPhrase('core.add'); ?></a>
<?php endif; ?>
		
<?php endif; ?>
	<div id="section_menu"<?php if (Phpfox ::isMobile()): ?> style="display:none;"<?php endif; ?>>
		<ul>
<?php if (defined ( 'PHPFOX_IS_PAGES_VIEW' )): ?>
<?php if (count((array)$this->_aVars['aSubPageMenus'])):  foreach ((array) $this->_aVars['aSubPageMenus'] as $this->_aVars['aSubPageMenu']): ?>
			<li><a href="<?php echo $this->_aVars['aSubPageMenu']['url']; ?>"><?php echo $this->_aVars['aSubPageMenu']['phrase']; ?></a></li>
<?php endforeach; endif; ?>
<?php else: ?>
<?php if (count((array)$this->_aVars['aSubMenus'])):  $this->_aPhpfoxVars['iteration']['submenu'] = 0;  foreach ((array) $this->_aVars['aSubMenus'] as $this->_aVars['iKey'] => $this->_aVars['aSubMenu']):  $this->_aPhpfoxVars['iteration']['submenu']++; ?>

			<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aSubMenu']['url']); ?>" <?php if (isset ( $this->_aVars['aSubMenu']['css_name'] )): ?>class="<?php echo $this->_aVars['aSubMenu']['css_name']; ?> no_ajax_link"<?php endif; ?>><?php if (substr ( $this->_aVars['aSubMenu']['url'] , -4 ) == '.add' || substr ( $this->_aVars['aSubMenu']['url'] , -7 ) == '.upload' || substr ( $this->_aVars['aSubMenu']['url'] , -8 ) == '.compose'):  echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'layout/section_menu_add.png','class' => 'v_middle'));  endif;  echo Phpfox::getPhrase($this->_aVars['aSubMenu']['module'].'.'.$this->_aVars['aSubMenu']['var_name']); ?></a></li>
<?php endforeach; endif; ?>
<?php endif; ?>
		</ul>						
		<div class="clear"></div>
	</div>
<?php if (Phpfox ::isMobile()): ?>
	<div class="clear"></div>
<?php endif; ?>
<?php endif; ?>

