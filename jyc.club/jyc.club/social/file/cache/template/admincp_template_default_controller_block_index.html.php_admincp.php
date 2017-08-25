<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:50 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Admincp
 * @version 		$Id: index.html.php 4481 2012-07-06 08:05:15Z Raymond_Benc $
 */
 
 

?>
<ul>
<?php if (count((array)$this->_aVars['aBlocks'])):  foreach ((array) $this->_aVars['aBlocks'] as $this->_aVars['sUrl'] => $this->_aVars['aModules']): ?>
	<li class="main_menu_link_li"><a class="main_menu_link" href="#" onclick="$('#frame_holder_cover').show(); $.ajaxCall('admincp.getBlocks', 'm_connection=<?php echo $this->_aVars['sUrl']; ?>', 'GET'); $(this).blur(); $('.main_menu_link').removeClass('cem_active'); $(this).addClass('cem_active'); return false;"><?php if (empty ( $this->_aVars['sUrl'] )):  echo Phpfox::getPhrase('admincp.site_wide');  else:  echo $this->_aVars['sUrl'];  endif; ?></a></li>
<?php endforeach; endif; ?>
</ul>
