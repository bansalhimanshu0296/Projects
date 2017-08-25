<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:52 pm */ ?>
<div id="admincp_theme_manage">
	<ul>
		<li class="name"><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.theme'); ?>"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aTheme']['name']); ?></a></li>
<?php if (count((array)$this->_aVars['theme_menus'])):  foreach ((array) $this->_aVars['theme_menus'] as $this->_aVars['theme_menu']): ?>
		<li><a href="<?php echo $this->_aVars['theme_menu']['link']; ?>"<?php if (( $this->_aVars['theme_menu']['is_active'] )): ?> class="active"<?php endif; ?>><?php echo $this->_aVars['theme_menu']['name']; ?></a></li>
<?php endforeach; endif; ?>
		<li class="hide first"><a href="#" onclick="$Core.ajaxMessage('Setting as default theme...'); $.ajaxCall('theme.setDefault', '&id=<?php echo $this->_aVars['aTheme']['theme_id']; ?>&global_ajax_message=true'); $('.theme_drop').hide(); return false;">Set as Default</a></li>
		<li class="hide"><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.theme.add', array('id' => $this->_aVars['aTheme']['theme_id'])); ?>">Edit Settings</a></li>
<?php if (( $this->_aVars['aTheme']['folder'] != 'unity' && $this->_aVars['aTheme']['folder'] != 'default' )): ?>
		<li class="hide"><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.theme.export', array('theme' => $this->_aVars['aTheme']['theme_id'])); ?>">Export to Unity</a></li>
<?php endif; ?>
	</ul>
</div>


<div id="content_editor_holder">
	<div id="admincp_theme_content">

<?php if (( $this->_aVars['type'] == 'css' )): ?>
		<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('current'); ?>" id="js_template_form" onsubmit="$Core.ajaxMessage(); $('#js_last_modified').show(); $('#js_template_content_text').val(editAreaLoader.getValue('editor')); $(this).ajaxCall('theme.saveCssFile', 'global_ajax_message=true'); return false;">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
			<div id="js_hidden_cache">
				<div><input type="hidden" name="val[style_id]" value="<?php echo $this->_aVars['aStyle']['style_id']; ?>" id="js_css_style_id" /></div>
				<div><input type="hidden" name="val[file_name]" value="custom.css" id="js_css_file" /></div>
				<div><input type="hidden" name="val[module_id]" value="" id="js_css_module" /></div>
			</div>
			<div style="display:none;"><textarea cols="50" rows="15" name="val[css_data]" id="js_template_content_text"><?php echo $this->_aVars['aCustomDataContent']; ?></textarea></div>
			<div id="js_content_edit_area" style="display:none;">

				<div id="editor"><?php echo $this->_aVars['aCustomDataContent']; ?></div>
				<div id="content_editor_submit">
					<ul>
						<li><input type="submit" value="<?php echo Phpfox::getPhrase('core.save'); ?>" class="button" id="js_update_template" /></li>
						<li id="js_last_modified"><input type="button" value="<?php echo Phpfox::getPhrase('theme.revert'); ?>" class="button button_off" id="js_revert" onclick="return $Core.cssEditor.revert();" /></li>
					</ul>
					<div id="js_last_modified_info"><?php if (isset ( $this->_aVars['aCustomDataContent']['time_stamp'] )):  echo Phpfox::getTime(Phpfox::getParam('core.global_update_time'), $this->_aVars['aCustomDataContent']['time_stamp']);  endif; ?></div>

				</div>
			</div>

		
</form>

<?php elseif (( $this->_aVars['type'] == 'images' )): ?>
		<div id="drop_holder_themes" data-upload-url="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.theme.manage', array('id' => $this->_aVars['aTheme']['theme_id'],'upload' => '1')); ?>">
			<span class="drag_icon"></span>
			<ul class="theme_images">
<?php if (count((array)$this->_aVars['images'])):  foreach ((array) $this->_aVars['images'] as $this->_aVars['image']): ?>
				<li data-url="<?php echo $this->_aVars['image']['url']; ?>"><?php echo $this->_aVars['image']['name']; ?></li>
<?php endforeach; endif; ?>
			</ul>
			<div id="droppable" data-url="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.theme.manage', array('id' => $this->_aVars['aTheme']['theme_id'],'delete' => '1')); ?>">
				<span class="trash_icon"></span>
			</div>
		</div>
<?php elseif (( $this->_aVars['type'] == 'js' )): ?>

		<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('current'); ?>" id="js_script_save">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
			<div id="js_hidden_cache">
				<div><input type="hidden" name="val[theme_id]" value="<?php echo $this->_aVars['aTheme']['theme_id']; ?>" /></div>
			</div>
			<div style="display:none;"><textarea cols="50" rows="15" name="val[css_data]" id="js_template_content_text"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['js_content']); ?></textarea></div>
			<div id="js_content_edit_area" style="display:none;">

				<div id="editor"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['js_content']); ?></div>
				<div id="content_editor_submit">
					<ul>
						<li><input type="submit" value="<?php echo Phpfox::getPhrase('core.save'); ?>" class="button" /></li>
					</ul>
				</div>
			</div>

		
</form>


<?php else: ?>
		<div id="content_editor_menu">
			<ul>
<?php if (count((array)$this->_aVars['templates'])):  $this->_aPhpfoxVars['iteration']['type'] = 0;  foreach ((array) $this->_aVars['templates'] as $this->_aVars['sType'] => $this->_aVars['aTemplate']):  $this->_aPhpfoxVars['iteration']['type']++; ?>

<?php if ($this->_aVars['sType'] == 'layout'): ?>
				<li class="active"><a href="#" class="menu_parent js_open_template_list first<?php if (isset ( $this->_aVars['aTemplate']['modified'] )): ?> modified<?php endif; ?>"><span class="folder"></span><?php echo Phpfox::getPhrase('theme.global_templates'); ?></a>
					<ul class="js_list_templates">
<?php if (count((array)$this->_aVars['aTemplate']['files'])):  foreach ((array) $this->_aVars['aTemplate']['files'] as $this->_aVars['sFile']): ?>
						<li><a href="#?type=layout&amp;name=<?php if (is_array ( $this->_aVars['sFile'] )):  echo $this->_aVars['sFile']['0'];  else:  echo $this->_aVars['sFile'];  endif; ?>&amp;theme=<?php echo $this->_aVars['aTheme']['folder']; ?>" class="js_get_template_file<?php if (is_array ( $this->_aVars['sFile'] )): ?> modified<?php endif; ?>"><div style="position:absolute; right:0; display:none;"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'ajax/small.gif')); ?></div><span class="file"></span><?php if (is_array ( $this->_aVars['sFile'] )):  echo $this->_aVars['sFile']['0'];  else:  echo $this->_aVars['sFile'];  endif; ?></a></li>
<?php endforeach; endif; ?>
					</ul>
				</li>
<?php else: ?>
				<li><a href="#" class="menu_parent js_open_template_list<?php if (isset ( $this->_aVars['aTemplate']['modified'] )): ?> modified<?php endif; ?>"><span class="folder"></span><?php echo $this->_aVars['sType']; ?></a>
					<ul class="js_list_templates" style="display:none;">
<?php if (count((array)$this->_aVars['aTemplate'])):  foreach ((array) $this->_aVars['aTemplate'] as $this->_aVars['aModules']): ?>
<?php if (isset ( $this->_aVars['aTemplate']['controller'] ) && count ( $this->_aVars['aTemplate']['controller'] )): ?>
						<li><span class="title"><?php echo Phpfox::getPhrase('theme.controllers'); ?></span>
							<ul>
<?php if (count((array)$this->_aVars['aTemplate']['controller'])):  foreach ((array) $this->_aVars['aTemplate']['controller'] as $this->_aVars['sController']): ?>
								<li>
									<a href="#?type=controller&amp;name=<?php if (is_array ( $this->_aVars['sController'] )):  echo $this->_aVars['sController']['0'];  else:  echo $this->_aVars['sController'];  endif; ?>&amp;theme=<?php echo $this->_aVars['aTheme']['folder']; ?>&amp;module=<?php echo $this->_aVars['sType']; ?>" class="js_get_template_file<?php if (is_array ( $this->_aVars['sController'] )): ?> modified<?php endif; ?>"><div style="position:absolute; right:0; display:none;"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'ajax/small.gif')); ?></div><span class="file"></span><?php if (is_array ( $this->_aVars['sController'] )):  echo $this->_aVars['sController']['0'];  else:  echo $this->_aVars['sController'];  endif; ?>
									</a>
								</li>
<?php endforeach; endif; ?>
<?php unset($this->_aVars['aTemplate']['controller']); ?>
							</ul>
						</li>
<?php endif; ?>
<?php if (isset ( $this->_aVars['aTemplate']['block'] ) && count ( $this->_aVars['aTemplate']['block'] )): ?>
						<li><span class="title"><?php echo Phpfox::getPhrase('theme.blocks'); ?></span>
							<ul>
<?php if (count((array)$this->_aVars['aTemplate']['block'])):  foreach ((array) $this->_aVars['aTemplate']['block'] as $this->_aVars['sBlock']): ?>
								<li><a href="#?type=block&amp;name=<?php if (is_array ( $this->_aVars['sBlock'] )):  echo $this->_aVars['sBlock']['0'];  else:  echo $this->_aVars['sBlock'];  endif; ?>&amp;theme=<?php echo $this->_aVars['aTheme']['folder']; ?>&amp;module=<?php echo $this->_aVars['sType']; ?>" class="js_get_template_file<?php if (is_array ( $this->_aVars['sBlock'] )): ?> modified<?php endif; ?>"><div style="position:absolute; right:0; display:none;"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'ajax/small.gif')); ?></div><span class="file"></span><?php if (is_array ( $this->_aVars['sBlock'] )):  echo $this->_aVars['sBlock']['0'];  else:  echo $this->_aVars['sBlock'];  endif; ?></a></li>
<?php endforeach; endif; ?>
<?php unset($this->_aVars['aTemplate']['block']); ?>
							</ul>
						</li>
<?php endif; ?>
<?php endforeach; endif; ?>
					</ul>
				</li>
<?php endif; ?>
<?php endforeach; endif; ?>
			</ul>
		</div>

		<div id="content_editor_text">
			<div class="content_editor_overlay" id="js_template_content_loader"></div>
			<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('current'); ?>" id="js_template_form">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
				<div id="js_hidden_cache">
					<div><input type="hidden" name="val[type]" value="" id="js_template_type" /></div>
					<div><input type="hidden" name="val[theme]" value="" id="js_template_theme" /></div>
					<div><input type="hidden" name="val[name]" value="" id="js_template_name" /></div>
					<div><input type="hidden" name="val[module]" value="" id="js_template_module" /></div>
				</div>
				<div style="display:none;"><textarea cols="50" rows="15" name="val[text]" id="js_template_content_text" style="width:100%;"></textarea></div>
				<div id="js_content_edit_area" style="display:none;">
					<div id="editor"></div>
					<div id="content_editor_submit">
						<ul>
							<li><input type="button" value="<?php echo Phpfox::getPhrase('core.save'); ?>" class="button" id="js_update_template" />	</li>
							<li id="js_last_modified"><input type="button" value="<?php echo Phpfox::getPhrase('theme.revert'); ?>" class="button button_off" id="js_revert" /></li>
						</ul>

						<div style="display:none;">
<?php echo Phpfox::getPhrase('admincp.product'); ?>:
							<select name="val[product_id]" id="js_template_product_id">
<?php if (count((array)$this->_aVars['aProducts'])):  foreach ((array) $this->_aVars['aProducts'] as $this->_aVars['aProduct']): ?>
								<option value="<?php echo $this->_aVars['aProduct']['product_id']; ?>"><?php echo $this->_aVars['aProduct']['title']; ?></option>
<?php endforeach; endif; ?>
							</select>
						</div>
						<div id="js_last_modified_info"></div>

					</div>
				</div>
			
</form>

		</div>
<?php endif; ?>

	</div>
</div>
