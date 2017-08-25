<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:59 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author			Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: block.html.php 6820 2013-10-22 13:05:35Z Raymond_Benc $
 */
 
 

 if (( isset ( $this->_aVars['sHeader'] ) && ( ! PHPFOX_IS_AJAX || isset ( $this->_aVars['bPassOverAjaxCall'] ) || isset ( $this->_aVars['bIsAjaxLoader'] ) ) ) || ( defined ( "PHPFOX_IN_DESIGN_MODE" ) && PHPFOX_IN_DESIGN_MODE ) || ( Phpfox ::getService('theme')->isInDnDMode())): ?>

<div class="block<?php if (( defined ( 'PHPFOX_IN_DESIGN_MODE' ) || Phpfox ::getService('theme')->isInDnDMode()) && ( ! isset ( $this->_aVars['bCanMove'] ) || ( isset ( $this->_aVars['bCanMove'] ) && $this->_aVars['bCanMove'] == true ) )): ?> js_sortable<?php endif;  if (isset ( $this->_aVars['sCustomClassName'] )): ?> <?php echo $this->_aVars['sCustomClassName'];  endif; ?>"<?php if (isset ( $this->_aVars['sBlockBorderJsId'] )): ?> id="js_block_border_<?php echo $this->_aVars['sBlockBorderJsId']; ?>"<?php endif;  if (defined ( 'PHPFOX_IN_DESIGN_MODE' ) && Phpfox ::getLib('module')->blockIsHidden('js_block_border_' . $this->_aVars['sBlockBorderJsId'] . '' )): ?> style="display:none;"<?php endif; ?>>
<?php if (! empty ( $this->_aVars['sHeader'] ) || ( defined ( "PHPFOX_IN_DESIGN_MODE" ) && PHPFOX_IN_DESIGN_MODE ) || ( Phpfox ::getService('theme')->isInDnDMode())): ?>
		<div class="title <?php if (defined ( 'PHPFOX_IN_DESIGN_MODE' ) || Phpfox ::getService('theme')->isInDnDMode()): ?>js_sortable_header<?php endif; ?>">		
<?php if (isset ( $this->_aVars['sBlockTitleBar'] )): ?>
<?php echo $this->_aVars['sBlockTitleBar']; ?>
<?php endif; ?>
<?php if (( isset ( $this->_aVars['aEditBar'] ) && Phpfox ::isUser())): ?>
			<div class="js_edit_header_bar">
				<a href="#" title="<?php echo Phpfox::getPhrase('core.edit_this_block'); ?>" onclick="$.ajaxCall('<?php echo $this->_aVars['aEditBar']['ajax_call']; ?>', 'block_id=<?php echo $this->_aVars['sBlockBorderJsId'];  if (isset ( $this->_aVars['aEditBar']['params'] )):  echo $this->_aVars['aEditBar']['params'];  endif; ?>'); return false;"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/application_edit.png','alt' => '','class' => 'v_middle')); ?></a>				
			</div>
<?php endif; ?>
<?php if (true || isset ( $this->_aVars['sDeleteBlock'] )): ?>
			<div class="js_edit_header_bar js_edit_header_hover" style="display:none;">
<?php if (Phpfox ::getService('theme')->isInDnDMode() && ( ( isset ( $this->_aVars['bCanMove'] ) && $this->_aVars['bCanMove'] ) || ! isset ( $this->_aVars['bCanMove'] ) )): ?>
					<a href="#" onclick="if (confirm('<?php echo Phpfox::getPhrase('core.are_you_sure', array('phpfox_squote' => true)); ?>')){
					$(this).parents('.block:first').remove(); $.ajaxCall('core.removeBlockDnD', 'sController=' + oParams['sController'] 
					+ '&amp;block_id=<?php if (isset ( $this->_aVars['sDeleteBlock'] )):  echo $this->_aVars['sDeleteBlock'];  else: ?> <?php echo $this->_aVars['sBlockBorderJsId'];  endif; ?>');} return false;"title="<?php echo Phpfox::getPhrase('core.remove_this_block'); ?>">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/application_delete.png','alt' => '','class' => 'v_middle')); ?>
					</a>
<?php else: ?>
<?php if (( ( isset ( $this->_aVars['bCanMove'] ) && $this->_aVars['bCanMove'] ) || ! isset ( $this->_aVars['bCanMove'] ) )): ?>
						<a href="#" onclick="if (confirm('<?php echo Phpfox::getPhrase('core.are_you_sure', array('phpfox_squote' => true)); ?>')) { $(this).parents('.block:first').remove();
						$.ajaxCall('core.hideBlock', '<?php if (isset ( $this->_aVars['sCustomDesignId'] )): ?>custom_item_id=<?php echo $this->_aVars['sCustomDesignId']; ?>&amp;<?php endif; ?>sController=' + oParams['sController'] + '&amp;type_id=<?php if (isset ( $this->_aVars['sDeleteBlock'] )):  echo $this->_aVars['sDeleteBlock'];  else: ?> <?php echo $this->_aVars['sBlockBorderJsId'];  endif; ?>&amp;block_id=' + $(this).parents('.block:first').attr('id')); } return false;" title="<?php echo Phpfox::getPhrase('core.remove_this_block'); ?>">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/application_delete.png','alt' => '','class' => 'v_middle')); ?>
						</a>				
<?php endif; ?>
<?php endif; ?>
			</div>
			
<?php endif; ?>
<?php if (empty ( $this->_aVars['sHeader'] )): ?>
<?php echo $this->_aVars['sBlockShowName']; ?>
<?php else: ?>
<?php echo $this->_aVars['sHeader']; ?>
<?php endif; ?>
		</div>
<?php endif; ?>
<?php if (isset ( $this->_aVars['aEditBar'] )): ?>
	<div id="js_edit_block_<?php echo $this->_aVars['sBlockBorderJsId']; ?>" class="edit_bar" style="display:none;"></div>
<?php endif; ?>
<?php if (isset ( $this->_aVars['aMenu'] ) && count ( $this->_aVars['aMenu'] )): ?>
	<div class="menu">
	<ul>
<?php if (count((array)$this->_aVars['aMenu'])):  $this->_aPhpfoxVars['iteration']['content'] = 0;  foreach ((array) $this->_aVars['aMenu'] as $this->_aVars['sPhrase'] => $this->_aVars['sLink']):  $this->_aPhpfoxVars['iteration']['content']++; ?>
 
		<li class="<?php if (count ( $this->_aVars['aMenu'] ) == $this->_aPhpfoxVars['iteration']['content']): ?> last<?php endif;  if ($this->_aPhpfoxVars['iteration']['content'] == 1): ?> first active<?php endif; ?>"><a href="<?php echo $this->_aVars['sLink']; ?>"><?php echo $this->_aVars['sPhrase']; ?></a></li>
<?php endforeach; endif; ?>
	</ul>
	<div class="clear"></div>
	</div>
<?php unset($this->_aVars['aMenu']); ?>
<?php endif; ?>
	<div class="content"<?php if (isset ( $this->_aVars['sBlockJsId'] )): ?> id="js_block_content_<?php echo $this->_aVars['sBlockJsId']; ?>"<?php endif; ?>>
<?php endif; ?>
		<?php
/**
 * [NULLED BY DARKGOTH 2014]
 *
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: filter.html.php 6860 2013-11-06 20:17:19Z Fern $
 */



?>
<form method="post" action="<?php if (isset ( $this->_aVars['aCallback']['url_home'] )):  echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aCallback']['url_home'], array('view' => $this->_aVars['sView']));  else:  echo Phpfox::getLib('phpfox.url')->makeUrl('user.browse', array('view' => $this->_aVars['sView']));  endif; ?>">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>';  if (isset ( $this->_aVars['aCallback']['url_home'] )): ?>
	<div><input type="hidden" name="url_home" value="<?php echo $this->_aVars['aCallback']['url_home']; ?>" /></div>
<?php endif;  if (Phpfox ::getUserParam('user.can_search_user_gender')): ?>
	<div class="p_top_4">
		<span class="user_browse_title"><?php echo Phpfox::getPhrase('user.browse_for'); ?></span>:
		<div class="p_4">
<?php echo $this->_aVars['aFilters']['gender']; ?>
		</div>
	</div>
<?php endif;  if (Phpfox ::getUserParam('user.can_search_user_age')): ?>
	<div class="p_top_4">
		<span class="user_browse_title"><?php echo Phpfox::getPhrase('user.between_ages'); ?></span>:
		<div class="p_4">
<?php echo $this->_aVars['aFilters']['from']; ?> - <?php echo $this->_aVars['aFilters']['to']; ?>
		</div>
	</div>
<?php endif; ?>
	<div class="p_top_4">
		<span class="user_browse_title"><?php echo Phpfox::getPhrase('user.located_within'); ?></span>:
		<div class="p_4">
<?php echo $this->_aVars['aFilters']['country']; ?>
<?php Phpfox::getBlock('core.country-child', array('country_child_filter' => true,'country_child_type' => 'browse')); ?>
		</div>
	</div>

	<div class="p_top_4">
		<span class="user_browse_title"><?php echo Phpfox::getPhrase('user.city'); ?></span>:
		<div class="p_4">
<?php echo $this->_aVars['aFilters']['city']; ?>
		</div>
	</div>
	
<?php if (Phpfox ::getUserParam('user.can_search_by_zip')): ?>
		<div class="p_top_4">
			<span class="user_browse_title"><?php echo Phpfox::getPhrase('user.zip_postal_code'); ?></span>:
			<div class="p_4">
<?php echo $this->_aVars['aFilters']['zip']; ?>
			</div>
		</div>
<?php endif; ?>
	
	<div class="p_top_4">
		<span class="user_browse_title"><?php echo Phpfox::getPhrase('user.keywords'); ?></span>:
		<div class="p_4">
<?php echo $this->_aVars['aFilters']['keyword']; ?>
			<div class="extra_info">
<?php echo Phpfox::getPhrase('user.within'); ?>: <?php echo $this->_aVars['aFilters']['type']; ?>
			</div>
		</div>
	</div>
		
	<div class="p_top_8">
		<input type="submit" value="<?php echo Phpfox::getPhrase('user.browse_filter_submit'); ?>" class="button" name="search[submit]" />
	</div>
	
	<ul id="js_user_browse_advanced_link">
		<li><a href="#" onclick="$('#js_user_browse_advanced').show(); return false;" id="user_browse_advanced_link"><?php echo Phpfox::getPhrase('user.advanced_filters'); ?></a></li>
<?php if (isset ( $this->_aVars['bIsInSearchMode'] ) && $this->_aVars['bIsInSearchMode']): ?>
		<li><a href="#"><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('user.browse'); ?>"><?php echo Phpfox::getPhrase('user.reset_browse_criteria'); ?></a></a></li>
<?php endif; ?>
	</ul>
	
	<div id="js_user_browse_advanced">
		<div class="user_browse_content">
		    
		    
	<div id="browse_custom_fields_popup_holder">
<?php if (count((array)$this->_aVars['aCustomFields'])):  $this->_aPhpfoxVars['iteration']['customfield'] = 0;  foreach ((array) $this->_aVars['aCustomFields'] as $this->_aVars['aCustomField']):  $this->_aPhpfoxVars['iteration']['customfield']++; ?>

	    <div class="go_left">

<?php if (isset ( $this->_aVars['aCustomField']['fields'] )): ?>
		<br />
		<div class="title">
<?php echo Phpfox::getPhrase($this->_aVars['aCustomField']['phrase_var_name']); ?>
		</div>
		<br />
			<?php
						Phpfox::getLib('template')->getBuiltFile('custom.block.foreachcustom');						
						?>
<?php endif; ?>
	    </div>
<?php if (is_int ( $this->_aPhpfoxVars['iteration']['customfield'] / 3 )): ?>
		<div class="clear"> </div>
<?php endif; ?>
<?php endforeach; endif; ?>
	    
	    <div class="clear"></div>
	</div>
<?php if (count ( $this->_aVars['aForms'] )): ?>
	<?php echo '
	<script type="text/javascript">
		$Behavior.user_filter_1 = function()
		{
			var iBrowseCnt = 0;
			$(\'#js_block_border_user_filter .menu li\').each(function()
			{
				iBrowseCnt++;
				if (iBrowseCnt == 1)
				{
					$(this).removeClass(\'active\');
				}
				else
				{
					$(this).addClass(\'active\');
				}
			});
		};
	</script>
	'; ?>

<?php endif; ?>
	
	<div class="p_top_4" style="display:none;">
	    <span class="user_browse_title"><?php echo Phpfox::getPhrase('user.sort_results_by'); ?></span>:
	    <div class="p_top_4">
<?php echo $this->_aVars['aFilters']['sort']; ?> <?php echo $this->_aVars['aFilters']['sort_by']; ?>
	    </div>
	</div>	
		
	<div class="p_top_15">
	    <a href="#" id="js_user_browse_advanced_link_close" onclick="$('#js_user_browse_advanced').hide(); return false;"><?php echo Phpfox::getPhrase('user.close_advanced_filters'); ?></a>
	    <input type="submit" value="<?php echo Phpfox::getPhrase('user.browse_filter_submit'); ?>" class="button" name="search[submit]" />
	</div>	
		    
		</div>
	</div>
	
<?php if (isset ( $this->_aVars['sCountryISO'] )): ?>
		<script type="text/javascript">
			$Behavior.loadStatesAfterBrowse = function()
			{
				sCountryISO = "<?php echo $this->_aVars['sCountryISO']; ?>";
				if(sCountryISO != "")
				{
					sCountryChildId = <?php echo $this->_aVars['sCountryChildId']; ?>;
					$.ajaxCall('core.getChildren', 'country_child_filter=true&country_child_type=browse&country_iso=' + sCountryISO + '&country_child_id=' + sCountryChildId);
				}
			}
		</script>
<?php endif; ?>
	

</form>



		
		
<?php if (( isset ( $this->_aVars['sHeader'] ) && ( ! PHPFOX_IS_AJAX || isset ( $this->_aVars['bPassOverAjaxCall'] ) || isset ( $this->_aVars['bIsAjaxLoader'] ) ) ) || ( defined ( "PHPFOX_IN_DESIGN_MODE" ) && PHPFOX_IN_DESIGN_MODE ) || ( Phpfox ::getService('theme')->isInDnDMode())): ?>
	</div>
<?php if (isset ( $this->_aVars['aFooter'] ) && count ( $this->_aVars['aFooter'] )): ?>
	<div class="bottom">
		<ul>
<?php if (count((array)$this->_aVars['aFooter'])):  $this->_aPhpfoxVars['iteration']['block'] = 0;  foreach ((array) $this->_aVars['aFooter'] as $this->_aVars['sPhrase'] => $this->_aVars['sLink']):  $this->_aPhpfoxVars['iteration']['block']++; ?>

				<li id="js_block_bottom_<?php echo $this->_aPhpfoxVars['iteration']['block']; ?>"<?php if ($this->_aPhpfoxVars['iteration']['block'] == 1): ?> class="first"<?php endif; ?>>
<?php if ($this->_aVars['sLink'] == '#'): ?>
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'ajax/add.gif','class' => 'ajax_image')); ?>
<?php endif; ?>
					<a href="<?php echo $this->_aVars['sLink']; ?>" id="js_block_bottom_link_<?php echo $this->_aPhpfoxVars['iteration']['block']; ?>"><?php echo $this->_aVars['sPhrase']; ?></a>
				</li>
<?php endforeach; endif; ?>
		</ul>
	</div>
<?php endif; ?>
</div>
<?php endif;  unset($this->_aVars['sHeader'], $this->_aVars['sComponent'], $this->_aVars['aFooter'], $this->_aVars['sBlockBorderJsId'], $this->_aVars['bBlockDisableSort'], $this->_aVars['bBlockCanMove'], $this->_aVars['aEditBar'], $this->_aVars['sDeleteBlock'], $this->_aVars['sBlockTitleBar'], $this->_aVars['sBlockJsId'], $this->_aVars['sCustomClassName'], $this->_aVars['aMenu']); ?>

<?php if (isset ( $this->_aVars['sClass'] )): ?>
<?php Phpfox::getBlock('ad.inner', array('sClass' => $this->_aVars['sClass']));  endif; ?>
