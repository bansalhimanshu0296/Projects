<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 9:04 pm */ ?>
<?php if (Phpfox ::getUserParam('shoutbox.can_add_shoutout')): ?>
	<script type="text/javascript">
		<?php echo '
		function add_shoutout(obj) {
			if ($(\'#js_panel_shoutbox_input\').val() == \'\') {
				return false;
			}

			$(\'#js_shoutbox_form\').hide();
			$(obj).ajaxCall(\'shoutbox.add\');
			$(\'#js_panel_shoutbox_input\').val(\'\');

			return false;
		}
		'; ?>

	</script>
	<form method="post" action="#" onsubmit="return add_shoutout(this);">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
		<div class="shoutbox_form"><input id="js_panel_shoutbox_input" type="text" name="shoutout" size="20" maxlength="255" value="" placeholder="Write a shoutout..." autocomplete="off" /></div>
	
</form>

<?php endif; ?>

<div id="js_shoutbox_messages"></div>
<?php if (count((array)$this->_aVars['aShoutouts'])):  $this->_aPhpfoxVars['iteration']['shoutout'] = 0;  foreach ((array) $this->_aVars['aShoutouts'] as $this->_aVars['iShoutCount'] => $this->_aVars['aShoutout']):  $this->_aPhpfoxVars['iteration']['shoutout']++; ?>

	<?php
						Phpfox::getLib('template')->getBuiltFile('shoutbox.block.entry');						
						 endforeach; endif; ?>
