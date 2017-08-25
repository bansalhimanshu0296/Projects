<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:48 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: stat.html.php 4095 2012-04-16 13:29:01Z Raymond_Benc $
 */
 
 

 if (! empty ( $this->_aVars['sStartTime'] )): ?>
Viewing stats from <strong><?php echo $this->_aVars['sStartTime']; ?></strong> until <strong><?php echo $this->_aVars['sEndTime']; ?></strong>.
<?php endif; ?>
<table id="js_core_site_stat" cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo Phpfox::getPhrase('core.name'); ?></th>
	<th><?php echo Phpfox::getPhrase('core.total'); ?></th>
	<th><?php echo Phpfox::getPhrase('core.daily_average'); ?></th>
</tr>
<?php if (empty ( $this->_aVars['aStats'] )): ?>
<tr id="js_core_site_stat_build">
	<td colspan="3">
<?php echo Phpfox::getPhrase('core.building_site_stats_please_hold'); ?>
		<script type="text/javascript">
			<?php echo '
			$Behavior.buildCoreSiteStats = function(){
				$.ajaxCall(\'core.buildStats\', \'\', \'GET\');
			}
			'; ?>

		</script>
	</td>
</tr>
<?php else:  if (count((array)$this->_aVars['aStats'])):  $this->_aPhpfoxVars['iteration']['stats'] = 0;  foreach ((array) $this->_aVars['aStats'] as $this->_aVars['aStat']):  $this->_aPhpfoxVars['iteration']['stats']++; ?>

<?php
						Phpfox::getLib('template')->getBuiltFile('core.block.admin-stattr');						
						 endforeach; endif;  endif; ?>
</table>
