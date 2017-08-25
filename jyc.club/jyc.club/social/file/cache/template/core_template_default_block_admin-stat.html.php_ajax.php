<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:48 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: admin-stat.html.php 4093 2012-04-16 12:54:05Z Raymond_Benc $
 */
 
 

 if (count((array)$this->_aVars['aStats'])):  $this->_aPhpfoxVars['iteration']['stats'] = 0;  foreach ((array) $this->_aVars['aStats'] as $this->_aVars['aStat']):  $this->_aPhpfoxVars['iteration']['stats']++; ?>

<?php
						Phpfox::getLib('template')->getBuiltFile('core.block.admin-stattr');						
						 endforeach; endif; ?>
