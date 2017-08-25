<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:58 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: system.html.php 982 2009-09-16 08:11:36Z Raymond_Benc $
 */
 
 

?>
<div class="table_header">
<?php echo Phpfox::getPhrase('admincp.server_overview'); ?>
</div>
<?php if (count((array)$this->_aVars['aStats'])):  foreach ((array) $this->_aVars['aStats'] as $this->_aVars['sKey'] => $this->_aVars['sValue']): ?>
<div class="table">
	<div class="table_left">
<?php echo $this->_aVars['sKey']; ?>:
	</div>
	<div class="table_right_text">
<?php echo $this->_aVars['sValue']; ?>
	</div>
	<div class="clear"></div>
</div>
<?php endforeach; endif; ?>
<div class="table_clear"></div>
