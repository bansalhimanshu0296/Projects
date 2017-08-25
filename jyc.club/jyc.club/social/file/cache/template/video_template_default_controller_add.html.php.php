<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:44 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond_Benc
 * @package 		Phpfox
 * @version 		$Id: add.html.php 4901 2012-10-17 06:29:50Z Raymond_Benc $
 */
 
 

 if ($this->_aVars['bIsVideoUploading']): ?>
<div id="js_upload_video_file">
<?php Phpfox::getBlock('video.file', array()); ?>
</div>
<?php else: ?>
<div id="js_upload_video_url">
<?php Phpfox::getBlock('video.url', array()); ?>
</div>
<?php endif; ?>
