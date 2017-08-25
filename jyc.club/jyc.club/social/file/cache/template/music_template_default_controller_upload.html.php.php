<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:55 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: upload.html.php 3346 2011-10-24 15:20:05Z Raymond_Benc $
 */
 
 

 if ($this->_aVars['bIsEdit']): ?>
<div class="view_item_link">
	<a href="<?php echo Phpfox::permalink('music', $this->_aVars['aForms']['song_id'], $this->_aVars['aForms']['title'], false, null, (array) array (
)); ?>"><?php echo Phpfox::getPhrase('music.view_song'); ?></a>
</div>
<?php endif; ?>

<?php echo $this->_aVars['sCreateJs']; ?>
<div id="js_actual_upload_form">
<?php if ($this->_aVars['bIsEdit']): ?>
	<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('music.upload'); ?>">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
	<div><input type="hidden" name="id" value="<?php echo $this->_aVars['aForms']['song_id']; ?>" /></div>
	<div><input type="hidden" name="upload_via_song" value="1" /></div>
<?php else: ?>
	<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('music.upload'); ?>" id="js_music_form" enctype="multipart/form-data" onsubmit="return $Core.music.upload(<?php echo $this->_aVars['sGetJsForm']; ?>);" target="js_upload_frame">
<?php endif; ?>
<?php if (isset ( $this->_aVars['sModule'] ) && $this->_aVars['sModule']): ?>
		<div><input type="hidden" name="val[callback_module]" value="<?php echo $this->_aVars['sModule']; ?>" /></div>
<?php endif; ?>
<?php if (isset ( $this->_aVars['iItem'] ) && $this->_aVars['iItem']): ?>
		<div><input type="hidden" name="val[callback_item_id]" value="<?php echo $this->_aVars['iItem']; ?>" /></div>
<?php endif; ?>
		<div id="js_music_upload_song">
			<div><input type="hidden" name="val[method]" value="<?php echo $this->_aVars['sMethod']; ?>"></div>
			<?php
						Phpfox::getLib('template')->getBuiltFile('music.block.upload');						
						?>
<?php if ($this->_aVars['bIsEdit']): ?>
			<div class="table_clear">
				<input type="submit" value="<?php echo Phpfox::getPhrase('music.update'); ?>" class="button" />
			</div>			
<?php endif; ?>
		</div>
	
</form>

</div>
