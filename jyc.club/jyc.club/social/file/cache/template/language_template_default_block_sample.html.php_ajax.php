<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:52 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: sample.html.php 1297 2009-12-04 23:18:17Z Raymond_Benc $
 */
 
 

?>
<div class="p_4">
	<div class="p_4">	
		<div class="go_left t_right" style="width:150px;"><b><?php echo Phpfox::getPhrase('language.php'); ?></b>:</div>
		<div><input type="text" name="php" value="Phpfox::getPhrase('<?php echo $this->_aVars['sCachePhrase']; ?>')" size="40" onclick="this.select();" /></div>
		<div class="clear"></div>
	</div>
	<div class="p_4">	
		<div class="go_left t_right" style="width:150px;"><b><?php echo Phpfox::getPhrase('language.php_single_quoted'); ?></b>:</div>
		<div><input type="text" name="php" value="' . Phpfox::getPhrase('<?php echo $this->_aVars['sCachePhrase']; ?>') . '" size="40" onclick="this.select();" /></div>
		<div class="clear"></div>
	</div>	
	<div class="p_4">	
		<div class="go_left t_right" style="width:150px;"><b><?php echo Phpfox::getPhrase('language.php_double_quoted'); ?></b>:</div>
		<div><input type="text" name="php" value="&quot; . Phpfox::getPhrase('<?php echo $this->_aVars['sCachePhrase']; ?>') . &quot;" size="40" onclick="this.select();" /></div>
		<div class="clear"></div>
	</div>		
	<div class="p_4">
		<div class="go_left t_right" style="width:150px;"><b><?php echo Phpfox::getPhrase('language.html'); ?></b>:</div>
		<div><input type="text" name="html" value="<?php echo '{'; ?>
phrase var='<?php echo $this->_aVars['sCachePhrase']; ?>'<?php echo '}'; ?>
" size="40" onclick="this.select();" /></div>
		<div class="clear"></div>
	</div>
	<div class="p_4">
		<div class="go_left t_right" style="width:150px;"><b><?php echo Phpfox::getPhrase('language.js'); ?></b>:</div>
		<div><input type="text" name="html" value="oTranslations['<?php echo $this->_aVars['sCachePhrase']; ?>']" size="40" onclick="this.select();" /></div>
		<div class="clear"></div>
	</div>	
	<div class="p_4">
		<div class="go_left t_right" style="width:150px;"><b><?php echo Phpfox::getPhrase('language.text'); ?></b>:</div>
		<div><input type="text" name="html" value="<?php echo $this->_aVars['sCachePhrase']; ?>" size="40" onclick="this.select();" /></div>
		<div class="clear"></div>
	</div>		
</div>
