<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author			Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: key.html.php 2833 2011-08-15 19:56:43Z Raymond_Benc $
 */
 
defined('PHPFOX') or exit('NO DICE!'); 

?>
{if !$bHasCurl}
<div class="error_message">
	Your server is missing the CURL library for PHP. In order for our product to run it requires CURL.
</div>
{else}
<form method="post" action="{url link=''$sUrl'.key'}" id="js_form">
</form>
{/if}