<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 9:07 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Photo
 * @version 		$Id: drop-down.html.php 2633 2011-05-30 13:57:44Z Raymond_Benc $
 */
 
 

?>
<select <?php if ($this->_aVars['bMultiple']): ?>name="val<?php if (isset ( $this->_aVars['aForms']['photo_id'] )): ?>[<?php echo $this->_aVars['aForms']['photo_id']; ?>]<?php endif; ?>[category_id][]" multiple="multiple" size="8"<?php else: ?>name="val[category_id]"<?php endif; ?> style="width:270px;">
<?php if (! $this->_aVars['bMultiple']): ?>
	<option value="">Select:</option>
<?php endif; ?>
<?php echo $this->_aVars['sCategories']; ?>
</select>
