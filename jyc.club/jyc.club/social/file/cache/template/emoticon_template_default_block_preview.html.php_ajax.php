<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 9:15 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Emoticon
 * @version 		$Id: preview.html.php 5331 2013-02-08 12:44:10Z Miguel_Espinoza $
 */
 
 

?>
<div class="label_flow" style="height:300px;">    
<?php if (count((array)$this->_aVars['aRows'])):  $this->_aPhpfoxVars['iteration']['emoticons'] = 0;  foreach ((array) $this->_aVars['aRows'] as $this->_aVars['iKey'] => $this->_aVars['aRow']):  $this->_aPhpfoxVars['iteration']['emoticons']++; ?>

        <div class="emoticon_preview" onclick="Editor.insert(<?php echo '{'; ?>
type: 'emoticon', path: '<?php echo $this->_aVars['sUrlEmoticon'];  echo $this->_aVars['aRow']['package_path']; ?>/<?php echo $this->_aVars['aRow']['image']; ?>', text: '<?php echo $this->_aVars['aRow']['text']; ?>', editor_id: '<?php echo $this->_aVars['sEditorId']; ?>'<?php echo '}'; ?>
); return false;">
            <img src="<?php echo $this->_aVars['sUrlEmoticon'];  echo $this->_aVars['aRow']['package_path']; ?>/<?php echo $this->_aVars['aRow']['image']; ?>" alt="<?php echo $this->_aVars['aRow']['title']; ?>" style="vertical-align:middle;" /><br /><?php echo $this->_aVars['aRow']['text']; ?>
        </div>
<?php if (is_int ( $this->_aPhpfoxVars['iteration']['emoticons'] / 5 )): ?>
        <div class="clear"></div>
<?php endif; ?>
<?php endforeach; endif; ?>
	<div class="clear"></div>
</div>
