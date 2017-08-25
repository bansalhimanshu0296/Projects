<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 9:10 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: warning.html.php 1953 2010-10-27 14:10:41Z Raymond_Benc $
 */
 
 

 echo Phpfox::getPhrase('photo.the_photo_you_are_about_to_view_may_contain_nudity_sexual_themes_violence_gore_strong_language_or_ideologically_sensitive_subject_matter'); ?>
<p>
<?php echo Phpfox::getPhrase('photo.would_you_like_to_view_this_image'); ?>
</p>
<ul class="action">
	<li><a href="<?php echo $this->_aVars['sLink']; ?>"><?php echo Phpfox::getPhrase('photo.yes'); ?></a></li>
	<li><a href="#" onclick="tb_remove(); return false;"><?php echo Phpfox::getPhrase('photo.no_thanks'); ?></a></li>
</ul>
