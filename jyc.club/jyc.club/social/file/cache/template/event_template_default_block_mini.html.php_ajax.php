<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:59 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond_Benc
 * @package 		Phpfox
 * @version 		$Id: mini.html.php 5521 2013-03-19 12:58:06Z Raymond_Benc $
 */
 
 

?>			<div style="display:none;"><div class="js_datepicker_core"><div class="js_datepicker_image"></div><span class="js_datepicker_holder"><div style="display:none;"><select name="val[end_month]" id="end_month" class="js_datepicker_month">
			<option value="1"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '1')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& $this->_aVars['aForms']['end_month'] == '1')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('1' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'January' : Phpfox::getPhrase('core.january')); ?></option>
			<option value="2"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '2')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& $this->_aVars['aForms']['end_month'] == '2')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('2' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'February' : Phpfox::getPhrase('core.february')); ?></option>
			<option value="3"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '3')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& $this->_aVars['aForms']['end_month'] == '3')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('3' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'March' : Phpfox::getPhrase('core.march')); ?></option>
			<option value="4"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '4')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& $this->_aVars['aForms']['end_month'] == '4')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('4' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'April' : Phpfox::getPhrase('core.april')); ?></option>
			<option value="5"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '5')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& $this->_aVars['aForms']['end_month'] == '5')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('5' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'May' : Phpfox::getPhrase('core.may')); ?></option>
			<option value="6"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '6')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& $this->_aVars['aForms']['end_month'] == '6')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('6' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'June' : Phpfox::getPhrase('core.june')); ?></option>
			<option value="7"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '7')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& $this->_aVars['aForms']['end_month'] == '7')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('7' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'July' : Phpfox::getPhrase('core.july')); ?></option>
			<option value="8"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '8')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& $this->_aVars['aForms']['end_month'] == '8')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('8' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'August' : Phpfox::getPhrase('core.august')); ?></option>
			<option value="9"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '9')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& $this->_aVars['aForms']['end_month'] == '9')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('9' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'September' : Phpfox::getPhrase('core.september')); ?></option>
			<option value="10"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '10')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& $this->_aVars['aForms']['end_month'] == '10')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('10' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'October' : Phpfox::getPhrase('core.october')); ?></option>
			<option value="11"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '11')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& $this->_aVars['aForms']['end_month'] == '11')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('11' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'November' : Phpfox::getPhrase('core.november')); ?></option>
			<option value="12"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_month') && in_array('end_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_month'])
								&& $aParams['end_month'] == '12')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_month'])
									&& !isset($aParams['end_month'])
									&& $this->_aVars['aForms']['end_month'] == '12')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_month']) ? ('12' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'December' : Phpfox::getPhrase('core.december')); ?></option>
		</select>
 / 		<select name="val[end_day]" id="end_day" class="js_datepicker_day">
			<option value="1"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '1')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '1')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('1' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>1</option>
			<option value="2"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '2')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '2')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('2' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>2</option>
			<option value="3"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '3')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '3')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('3' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>3</option>
			<option value="4"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '4')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '4')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('4' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>4</option>
			<option value="5"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '5')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '5')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('5' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>5</option>
			<option value="6"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '6')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '6')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('6' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>6</option>
			<option value="7"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '7')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '7')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('7' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>7</option>
			<option value="8"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '8')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '8')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('8' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>8</option>
			<option value="9"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '9')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '9')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('9' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>9</option>
			<option value="10"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '10')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '10')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('10' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>10</option>
			<option value="11"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '11')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '11')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('11' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>11</option>
			<option value="12"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '12')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '12')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('12' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>12</option>
			<option value="13"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '13')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '13')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('13' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>13</option>
			<option value="14"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '14')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '14')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('14' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>14</option>
			<option value="15"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '15')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '15')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('15' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>15</option>
			<option value="16"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '16')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '16')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('16' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>16</option>
			<option value="17"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '17')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '17')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('17' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>17</option>
			<option value="18"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '18')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '18')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('18' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>18</option>
			<option value="19"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '19')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '19')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('19' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>19</option>
			<option value="20"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '20')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '20')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('20' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>20</option>
			<option value="21"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '21')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '21')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('21' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>21</option>
			<option value="22"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '22')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '22')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('22' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>22</option>
			<option value="23"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '23')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '23')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('23' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>23</option>
			<option value="24"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '24')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '24')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('24' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>24</option>
			<option value="25"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '25')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '25')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('25' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>25</option>
			<option value="26"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '26')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '26')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('26' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>26</option>
			<option value="27"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '27')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '27')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('27' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>27</option>
			<option value="28"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '28')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '28')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('28' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>28</option>
			<option value="29"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '29')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '29')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('29' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>29</option>
			<option value="30"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '30')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '30')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('30' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>30</option>
			<option value="31"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_day') && in_array('end_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_day'])
								&& $aParams['end_day'] == '31')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_day'])
									&& !isset($aParams['end_day'])
									&& $this->_aVars['aForms']['end_day'] == '31')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_day']) ? ('31' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+4') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>31</option>
		</select>
 / <?php $aYears = range(2015, 2016);   $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); ?>		<select name="val[end_year]" id="end_year" class="js_datepicker_year">
<?php foreach ($aYears as $iYear): ?>			<option value="<?php echo $iYear; ?>"<?php echo ((isset($aParams['end_year']) && $aParams['end_year'] == $iYear) ? ' selected="selected"' : (!isset($this->_aVars['aForms']['end_year']) ? ($iYear == Phpfox::getTime('Y') ? ' selected="selected"' : '') : ($this->_aVars['aForms']['end_year'] == $iYear ? ' selected="selected"' : ''))); ?>><?php echo $iYear; ?></option>
<?php endforeach; ?>		</select>
</div><input type="text" name="js_end__datepicker" value="<?php if (isset($aParams['end_month'])):  echo $aParams['end_month'] . '/';  echo $aParams['end_day'] . '/';  echo $aParams['end_year'];  elseif (isset($this->_aVars['aForms'])):  if (isset($this->_aVars['aForms']['end_month'])):  switch(Phpfox::getParam("core.date_field_order")){  case "DMY":  echo $this->_aVars['aForms']['end_day'] . '/';  echo $this->_aVars['aForms']['end_month'] . '/';  echo $this->_aVars['aForms']['end_year'];  break;  case "MDY":  echo $this->_aVars['aForms']['end_month'] . '/';  echo $this->_aVars['aForms']['end_day'] . '/';  echo $this->_aVars['aForms']['end_year'];  break;  case "YMD":  echo $this->_aVars['aForms']['end_year'] . '/';  echo $this->_aVars['aForms']['end_month'] . '/';  echo $this->_aVars['aForms']['end_day'];  break;  }  endif;  else:  switch(Phpfox::getParam("core.date_field_order")){	case "DMY": echo Phpfox::getTime('j') . '/' . Phpfox::getTime('n') . '/' . Phpfox::getTime('Y'); break;	case "MDY": echo Phpfox::getTime('n') . '/' . Phpfox::getTime('j') . '/' . Phpfox::getTime('Y'); break;	case "YMD": echo Phpfox::getTime('Y') . '/' . Phpfox::getTime('n') . '/' . Phpfox::getTime('j'); break;} endif; ?>" class="js_date_picker" /></span> at		<select name="val[end_hour]" id="end_hour">
			<option value="00"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '00')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '00')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('00' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>00</option>
			<option value="01"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '01')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '01')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('01' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>01</option>
			<option value="02"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '02')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '02')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('02' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>02</option>
			<option value="03"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '03')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '03')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('03' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>03</option>
			<option value="04"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '04')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '04')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('04' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>04</option>
			<option value="05"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '05')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '05')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('05' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>05</option>
			<option value="06"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '06')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '06')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('06' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>06</option>
			<option value="07"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '07')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '07')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('07' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>07</option>
			<option value="08"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '08')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '08')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('08' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>08</option>
			<option value="09"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '09')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '09')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('09' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>09</option>
			<option value="10"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '10')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '10')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('10' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>10</option>
			<option value="11"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '11')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '11')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('11' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>11</option>
			<option value="12"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '12')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '12')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('12' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>12</option>
			<option value="13"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '13')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '13')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('13' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>13</option>
			<option value="14"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '14')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '14')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('14' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>14</option>
			<option value="15"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '15')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '15')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('15' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>15</option>
			<option value="16"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '16')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '16')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('16' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>16</option>
			<option value="17"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '17')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '17')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('17' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>17</option>
			<option value="18"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '18')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '18')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('18' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>18</option>
			<option value="19"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '19')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '19')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('19' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>19</option>
			<option value="20"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '20')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '20')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('20' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>20</option>
			<option value="21"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '21')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '21')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('21' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>21</option>
			<option value="22"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '22')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '22')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('22' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>22</option>
			<option value="23"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_hour') && in_array('end_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_hour'])
								&& $aParams['end_hour'] == '23')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_hour'])
									&& !isset($aParams['end_hour'])
									&& $this->_aVars['aForms']['end_hour'] == '23')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_hour']) ? ('23' == (Phpfox::getLib('date')->modifyHours('+4')) ? ' selected="selected"' : '') : ''); ?>>23</option>
		</select>&nbsp;&nbsp;:&nbsp;&nbsp;
		<select name="val[end_minute]" id="end_minute">
			<option value="00"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '00')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '00')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('00' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>00</option>
			<option value="01"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '01')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '01')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('01' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>01</option>
			<option value="02"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '02')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '02')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('02' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>02</option>
			<option value="03"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '03')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '03')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('03' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>03</option>
			<option value="04"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '04')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '04')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('04' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>04</option>
			<option value="05"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '05')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '05')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('05' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>05</option>
			<option value="06"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '06')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '06')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('06' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>06</option>
			<option value="07"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '07')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '07')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('07' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>07</option>
			<option value="08"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '08')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '08')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('08' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>08</option>
			<option value="09"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '09')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '09')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('09' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>09</option>
			<option value="10"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '10')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '10')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('10' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>10</option>
			<option value="11"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '11')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '11')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('11' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>11</option>
			<option value="12"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '12')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '12')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('12' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>12</option>
			<option value="13"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '13')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '13')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('13' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>13</option>
			<option value="14"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '14')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '14')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('14' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>14</option>
			<option value="15"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '15')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '15')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('15' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>15</option>
			<option value="16"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '16')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '16')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('16' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>16</option>
			<option value="17"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '17')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '17')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('17' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>17</option>
			<option value="18"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '18')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '18')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('18' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>18</option>
			<option value="19"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '19')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '19')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('19' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>19</option>
			<option value="20"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '20')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '20')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('20' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>20</option>
			<option value="21"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '21')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '21')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('21' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>21</option>
			<option value="22"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '22')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '22')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('22' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>22</option>
			<option value="23"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '23')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '23')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('23' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>23</option>
			<option value="24"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '24')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '24')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('24' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>24</option>
			<option value="25"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '25')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '25')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('25' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>25</option>
			<option value="26"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '26')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '26')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('26' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>26</option>
			<option value="27"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '27')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '27')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('27' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>27</option>
			<option value="28"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '28')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '28')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('28' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>28</option>
			<option value="29"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '29')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '29')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('29' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>29</option>
			<option value="30"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '30')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '30')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('30' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>30</option>
			<option value="31"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '31')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '31')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('31' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>31</option>
			<option value="32"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '32')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '32')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('32' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>32</option>
			<option value="33"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '33')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '33')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('33' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>33</option>
			<option value="34"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '34')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '34')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('34' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>34</option>
			<option value="35"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '35')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '35')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('35' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>35</option>
			<option value="36"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '36')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '36')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('36' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>36</option>
			<option value="37"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '37')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '37')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('37' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>37</option>
			<option value="38"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '38')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '38')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('38' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>38</option>
			<option value="39"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '39')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '39')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('39' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>39</option>
			<option value="40"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '40')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '40')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('40' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>40</option>
			<option value="41"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '41')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '41')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('41' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>41</option>
			<option value="42"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '42')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '42')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('42' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>42</option>
			<option value="43"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '43')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '43')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('43' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>43</option>
			<option value="44"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '44')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '44')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('44' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>44</option>
			<option value="45"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '45')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '45')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('45' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>45</option>
			<option value="46"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '46')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '46')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('46' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>46</option>
			<option value="47"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '47')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '47')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('47' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>47</option>
			<option value="48"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '48')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '48')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('48' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>48</option>
			<option value="49"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '49')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '49')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('49' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>49</option>
			<option value="50"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '50')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '50')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('50' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>50</option>
			<option value="51"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '51')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '51')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('51' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>51</option>
			<option value="52"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '52')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '52')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('52' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>52</option>
			<option value="53"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '53')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '53')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('53' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>53</option>
			<option value="54"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '54')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '54')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('54' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>54</option>
			<option value="55"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '55')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '55')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('55' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>55</option>
			<option value="56"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '56')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '56')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('56' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>56</option>
			<option value="57"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '57')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '57')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('57' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>57</option>
			<option value="58"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '58')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '58')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('58' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>58</option>
			<option value="59"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('end_minute') && in_array('end_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['end_minute'])
								&& $aParams['end_minute'] == '59')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['end_minute'])
									&& !isset($aParams['end_minute'])
									&& $this->_aVars['aForms']['end_minute'] == '59')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['end_minute']) ? ('59' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>59</option>
		</select>
</div></div>
				
			<div class="block_event_sub">
				<div class="js_datepicker_core"><div class="js_datepicker_image"></div><span class="js_datepicker_holder"><div style="display:none;"><select name="val[start_month]" id="start_month" class="js_datepicker_month">
			<option value="1"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '1')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& $this->_aVars['aForms']['start_month'] == '1')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('1' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'January' : Phpfox::getPhrase('core.january')); ?></option>
			<option value="2"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '2')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& $this->_aVars['aForms']['start_month'] == '2')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('2' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'February' : Phpfox::getPhrase('core.february')); ?></option>
			<option value="3"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '3')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& $this->_aVars['aForms']['start_month'] == '3')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('3' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'March' : Phpfox::getPhrase('core.march')); ?></option>
			<option value="4"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '4')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& $this->_aVars['aForms']['start_month'] == '4')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('4' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'April' : Phpfox::getPhrase('core.april')); ?></option>
			<option value="5"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '5')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& $this->_aVars['aForms']['start_month'] == '5')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('5' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'May' : Phpfox::getPhrase('core.may')); ?></option>
			<option value="6"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '6')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& $this->_aVars['aForms']['start_month'] == '6')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('6' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'June' : Phpfox::getPhrase('core.june')); ?></option>
			<option value="7"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '7')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& $this->_aVars['aForms']['start_month'] == '7')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('7' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'July' : Phpfox::getPhrase('core.july')); ?></option>
			<option value="8"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '8')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& $this->_aVars['aForms']['start_month'] == '8')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('8' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'August' : Phpfox::getPhrase('core.august')); ?></option>
			<option value="9"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '9')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& $this->_aVars['aForms']['start_month'] == '9')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('9' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'September' : Phpfox::getPhrase('core.september')); ?></option>
			<option value="10"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '10')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& $this->_aVars['aForms']['start_month'] == '10')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('10' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'October' : Phpfox::getPhrase('core.october')); ?></option>
			<option value="11"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '11')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& $this->_aVars['aForms']['start_month'] == '11')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('11' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'November' : Phpfox::getPhrase('core.november')); ?></option>
			<option value="12"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_month') && in_array('start_month', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_month'])
								&& $aParams['start_month'] == '12')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_month'])
									&& !isset($aParams['start_month'])
									&& $this->_aVars['aForms']['start_month'] == '12')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_month']) ? ('12' == Phpfox::getTime('n') ? ' selected="selected"' : '') : ''); ?>><?php echo (defined('PHPFOX_INSTALLER') ? 'December' : Phpfox::getPhrase('core.december')); ?></option>
		</select>
 / 		<select name="val[start_day]" id="start_day" class="js_datepicker_day">
			<option value="1"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '1')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '1')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('1' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>1</option>
			<option value="2"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '2')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '2')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('2' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>2</option>
			<option value="3"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '3')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '3')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('3' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>3</option>
			<option value="4"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '4')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '4')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('4' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>4</option>
			<option value="5"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '5')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '5')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('5' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>5</option>
			<option value="6"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '6')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '6')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('6' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>6</option>
			<option value="7"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '7')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '7')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('7' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>7</option>
			<option value="8"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '8')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '8')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('8' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>8</option>
			<option value="9"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '9')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '9')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('9' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>9</option>
			<option value="10"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '10')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '10')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('10' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>10</option>
			<option value="11"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '11')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '11')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('11' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>11</option>
			<option value="12"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '12')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '12')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('12' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>12</option>
			<option value="13"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '13')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '13')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('13' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>13</option>
			<option value="14"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '14')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '14')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('14' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>14</option>
			<option value="15"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '15')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '15')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('15' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>15</option>
			<option value="16"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '16')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '16')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('16' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>16</option>
			<option value="17"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '17')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '17')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('17' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>17</option>
			<option value="18"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '18')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '18')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('18' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>18</option>
			<option value="19"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '19')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '19')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('19' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>19</option>
			<option value="20"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '20')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '20')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('20' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>20</option>
			<option value="21"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '21')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '21')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('21' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>21</option>
			<option value="22"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '22')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '22')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('22' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>22</option>
			<option value="23"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '23')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '23')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('23' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>23</option>
			<option value="24"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '24')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '24')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('24' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>24</option>
			<option value="25"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '25')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '25')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('25' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>25</option>
			<option value="26"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '26')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '26')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('26' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>26</option>
			<option value="27"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '27')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '27')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('27' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>27</option>
			<option value="28"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '28')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '28')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('28' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>28</option>
			<option value="29"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '29')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '29')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('29' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>29</option>
			<option value="30"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '30')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '30')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('30' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>30</option>
			<option value="31"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_day') && in_array('start_day', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_day'])
								&& $aParams['start_day'] == '31')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_day'])
									&& !isset($aParams['start_day'])
									&& $this->_aVars['aForms']['start_day'] == '31')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_day']) ? ('31' == ((Phpfox::getTime('H') == 23 && (Phpfox::getTime('H') + '+1') >= 00) ? (Phpfox::getTime('j') + 1) : Phpfox::getTime('j')) ? ' selected="selected"' : '') : ''); ?>>31</option>
		</select>
 / <?php $aYears = range(2015, 2016);   $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); ?>		<select name="val[start_year]" id="start_year" class="js_datepicker_year">
<?php foreach ($aYears as $iYear): ?>			<option value="<?php echo $iYear; ?>"<?php echo ((isset($aParams['start_year']) && $aParams['start_year'] == $iYear) ? ' selected="selected"' : (!isset($this->_aVars['aForms']['start_year']) ? ($iYear == Phpfox::getTime('Y') ? ' selected="selected"' : '') : ($this->_aVars['aForms']['start_year'] == $iYear ? ' selected="selected"' : ''))); ?>><?php echo $iYear; ?></option>
<?php endforeach; ?>		</select>
</div><input type="text" name="js_start__datepicker" value="<?php if (isset($aParams['start_month'])):  echo $aParams['start_month'] . '/';  echo $aParams['start_day'] . '/';  echo $aParams['start_year'];  elseif (isset($this->_aVars['aForms'])):  if (isset($this->_aVars['aForms']['start_month'])):  switch(Phpfox::getParam("core.date_field_order")){  case "DMY":  echo $this->_aVars['aForms']['start_day'] . '/';  echo $this->_aVars['aForms']['start_month'] . '/';  echo $this->_aVars['aForms']['start_year'];  break;  case "MDY":  echo $this->_aVars['aForms']['start_month'] . '/';  echo $this->_aVars['aForms']['start_day'] . '/';  echo $this->_aVars['aForms']['start_year'];  break;  case "YMD":  echo $this->_aVars['aForms']['start_year'] . '/';  echo $this->_aVars['aForms']['start_month'] . '/';  echo $this->_aVars['aForms']['start_day'];  break;  }  endif;  else:  switch(Phpfox::getParam("core.date_field_order")){	case "DMY": echo Phpfox::getTime('j') . '/' . Phpfox::getTime('n') . '/' . Phpfox::getTime('Y'); break;	case "MDY": echo Phpfox::getTime('n') . '/' . Phpfox::getTime('j') . '/' . Phpfox::getTime('Y'); break;	case "YMD": echo Phpfox::getTime('Y') . '/' . Phpfox::getTime('n') . '/' . Phpfox::getTime('j'); break;} endif; ?>" class="js_date_picker" /></span> at		<select name="val[start_hour]" id="start_hour">
			<option value="00"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '00')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '00')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('00' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>00</option>
			<option value="01"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '01')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '01')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('01' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>01</option>
			<option value="02"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '02')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '02')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('02' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>02</option>
			<option value="03"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '03')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '03')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('03' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>03</option>
			<option value="04"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '04')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '04')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('04' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>04</option>
			<option value="05"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '05')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '05')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('05' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>05</option>
			<option value="06"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '06')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '06')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('06' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>06</option>
			<option value="07"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '07')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '07')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('07' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>07</option>
			<option value="08"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '08')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '08')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('08' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>08</option>
			<option value="09"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '09')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '09')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('09' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>09</option>
			<option value="10"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '10')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '10')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('10' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>10</option>
			<option value="11"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '11')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '11')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('11' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>11</option>
			<option value="12"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '12')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '12')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('12' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>12</option>
			<option value="13"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '13')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '13')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('13' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>13</option>
			<option value="14"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '14')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '14')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('14' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>14</option>
			<option value="15"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '15')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '15')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('15' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>15</option>
			<option value="16"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '16')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '16')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('16' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>16</option>
			<option value="17"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '17')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '17')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('17' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>17</option>
			<option value="18"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '18')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '18')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('18' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>18</option>
			<option value="19"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '19')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '19')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('19' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>19</option>
			<option value="20"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '20')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '20')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('20' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>20</option>
			<option value="21"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '21')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '21')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('21' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>21</option>
			<option value="22"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '22')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '22')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('22' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>22</option>
			<option value="23"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_hour') && in_array('start_hour', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_hour'])
								&& $aParams['start_hour'] == '23')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_hour'])
									&& !isset($aParams['start_hour'])
									&& $this->_aVars['aForms']['start_hour'] == '23')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_hour']) ? ('23' == (Phpfox::getLib('date')->modifyHours('+1')) ? ' selected="selected"' : '') : ''); ?>>23</option>
		</select>&nbsp;&nbsp;:&nbsp;&nbsp;
		<select name="val[start_minute]" id="start_minute">
			<option value="00"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '00')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '00')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('00' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>00</option>
			<option value="01"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '01')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '01')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('01' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>01</option>
			<option value="02"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '02')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '02')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('02' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>02</option>
			<option value="03"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '03')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '03')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('03' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>03</option>
			<option value="04"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '04')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '04')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('04' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>04</option>
			<option value="05"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '05')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '05')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('05' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>05</option>
			<option value="06"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '06')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '06')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('06' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>06</option>
			<option value="07"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '07')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '07')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('07' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>07</option>
			<option value="08"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '08')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '08')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('08' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>08</option>
			<option value="09"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '09')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '09')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('09' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>09</option>
			<option value="10"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '10')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '10')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('10' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>10</option>
			<option value="11"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '11')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '11')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('11' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>11</option>
			<option value="12"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '12')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '12')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('12' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>12</option>
			<option value="13"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '13')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '13')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('13' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>13</option>
			<option value="14"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '14')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '14')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('14' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>14</option>
			<option value="15"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '15')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '15')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('15' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>15</option>
			<option value="16"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '16')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '16')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('16' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>16</option>
			<option value="17"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '17')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '17')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('17' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>17</option>
			<option value="18"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '18')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '18')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('18' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>18</option>
			<option value="19"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '19')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '19')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('19' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>19</option>
			<option value="20"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '20')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '20')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('20' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>20</option>
			<option value="21"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '21')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '21')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('21' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>21</option>
			<option value="22"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '22')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '22')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('22' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>22</option>
			<option value="23"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '23')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '23')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('23' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>23</option>
			<option value="24"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '24')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '24')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('24' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>24</option>
			<option value="25"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '25')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '25')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('25' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>25</option>
			<option value="26"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '26')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '26')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('26' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>26</option>
			<option value="27"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '27')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '27')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('27' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>27</option>
			<option value="28"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '28')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '28')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('28' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>28</option>
			<option value="29"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '29')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '29')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('29' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>29</option>
			<option value="30"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '30')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '30')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('30' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>30</option>
			<option value="31"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '31')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '31')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('31' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>31</option>
			<option value="32"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '32')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '32')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('32' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>32</option>
			<option value="33"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '33')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '33')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('33' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>33</option>
			<option value="34"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '34')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '34')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('34' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>34</option>
			<option value="35"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '35')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '35')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('35' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>35</option>
			<option value="36"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '36')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '36')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('36' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>36</option>
			<option value="37"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '37')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '37')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('37' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>37</option>
			<option value="38"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '38')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '38')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('38' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>38</option>
			<option value="39"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '39')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '39')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('39' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>39</option>
			<option value="40"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '40')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '40')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('40' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>40</option>
			<option value="41"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '41')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '41')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('41' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>41</option>
			<option value="42"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '42')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '42')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('42' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>42</option>
			<option value="43"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '43')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '43')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('43' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>43</option>
			<option value="44"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '44')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '44')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('44' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>44</option>
			<option value="45"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '45')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '45')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('45' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>45</option>
			<option value="46"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '46')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '46')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('46' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>46</option>
			<option value="47"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '47')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '47')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('47' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>47</option>
			<option value="48"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '48')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '48')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('48' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>48</option>
			<option value="49"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '49')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '49')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('49' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>49</option>
			<option value="50"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '50')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '50')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('50' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>50</option>
			<option value="51"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '51')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '51')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('51' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>51</option>
			<option value="52"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '52')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '52')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('52' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>52</option>
			<option value="53"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '53')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '53')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('53' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>53</option>
			<option value="54"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '54')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '54')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('54' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>54</option>
			<option value="55"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '55')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '55')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('55' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>55</option>
			<option value="56"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '56')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '56')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('56' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>56</option>
			<option value="57"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '57')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '57')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('57' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>57</option>
			<option value="58"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '58')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '58')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('58' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>58</option>
			<option value="59"<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));


if (isset($this->_aVars['aField']) && isset($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]) && !is_array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]))
							{
								$this->_aVars['aForms'][$this->_aVars['aField']['field_id']] = array($this->_aVars['aForms'][$this->_aVars['aField']['field_id']]);
							}

if (isset($this->_aVars['aForms'])
 && is_numeric('start_minute') && in_array('start_minute', $this->_aVars['aForms']))
							
{
								echo ' selected="selected" ';
							}

							if (isset($aParams['start_minute'])
								&& $aParams['start_minute'] == '59')

							{

								echo ' selected="selected" ';

							}

							else

							{

								if (isset($this->_aVars['aForms']['start_minute'])
									&& !isset($aParams['start_minute'])
									&& $this->_aVars['aForms']['start_minute'] == '59')
								{
								 echo ' selected="selected" ';
								}
								else
								{
									echo "";
								}
							}
							 echo (!isset($this->_aVars['aForms']['start_minute']) ? ('59' == Phpfox::getTime('i') ? ' selected="selected"' : '') : ''); ?>>59</option>
		</select>
</div>
			</div>

			<div class="block_event_sub">
				<div id="js_quick_event_default_where" style="display:none;"><?php echo Phpfox::getPhrase('event.where'); ?></div>
				<input class="block_event_form_input block_event_form_input_off" type="text" name="val[location]" value="<?php echo Phpfox::getPhrase('event.where'); ?>" onfocus="if (this.value == $('#js_quick_event_default_where').html()) { this.value = ''; $(this).removeClass('block_event_form_input_off'); }" />
			</div>

			<div class="block_event_sub">
				<input type="submit" class="button" value="<?php echo Phpfox::getPhrase('event.create_event'); ?>" />
			</div>
		
