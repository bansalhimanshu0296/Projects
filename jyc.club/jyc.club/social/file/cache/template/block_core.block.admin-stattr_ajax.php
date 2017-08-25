<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:48 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: admin-stattr.html.php 4093 2012-04-16 12:54:05Z Raymond_Benc $
 */
 
 

?>
<tr<?php if (is_int ( $this->_aPhpfoxVars['iteration']['stats'] / 2 )): ?> class="tr"<?php endif; ?>>
	<td><?php echo Phpfox::getPhrase($this->_aVars['aStat']['phrase']); ?></td>
	<td><?php echo number_format($this->_aVars['aStat']['total']); ?></td>
	<td><?php if (isset ( $this->_aVars['aStat']['average'] )):  echo $this->_aVars['aStat']['average'];  else: ?>N/A<?php endif; ?></td>
</tr>
