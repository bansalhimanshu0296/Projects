<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:43 pm */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo $this->_aVars['sLocaleDirection']; ?>" lang="<?php echo $this->_aVars['sLocaleCode']; ?>">
	<head>
		<title><?php echo $this->getTitle(); ?></title>	
<?php echo $this->getHeader(); ?>
	</head>
	<body id="<?php echo Phpfox::getLib('template')->getPageId(); ?>" class="<?php echo Phpfox::getLib('template')->getPageClass(); ?>">	
		<div id="global_ajax_message"></div>

		<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl(''); ?>" id="back_to_site"><span class="icon"></span><span class="phrase">Back to site</span></a>
		<div id="top">
			<div class="main_holder">
				<div id="top_right">
					
					<div class="main_menu_holder">

						<div id="admincp_user">
							<div class="admincp_user_image">
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('user' => $this->_aVars['aUserDetails'],'suffix' => '_50_square','max_width' => 20,'max_height' => 20)); ?>
							</div>
							<div class="admincp_user_content">
<?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aUserDetails']['full_name']); ?>
							</div>
						</div>

						<ul class="main_menu">
							<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp'); ?>" class="main_menu_link n_dashboard">Dashboard</a></li>

							<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.block'); ?>" class="main_menu_link n_apps">Modules</a>
								<div class="main_sub_menu">
<?php if (( isset ( $this->_aVars['aNewProducts'] ) && count ( $this->_aVars['aNewProducts'] ) )): ?>
									<div class="main_sub_menu_holder_header">New Modules</div>
									<ul>
<?php if (count((array)$this->_aVars['aNewProducts'])):  foreach ((array) $this->_aVars['aNewProducts'] as $this->_aVars['iKey'] => $this->_aVars['aProduct']): ?>
										<li class="main_menu_link_li">
											<div class="new_product">
												<span><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aProduct']['title']); ?></span>
												<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.product.file', array('install' => $this->_aVars['aProduct']['product_id'])); ?>" class="main_sub_action">Install</a>
											</div>
										</li>
<?php endforeach; endif; ?>
									</ul>
									<div class="main_sub_menu_holder_header">Installed Modules</div>
<?php endif; ?>
									<ul>
<?php if (count((array)$this->_aVars['aModulesMenu'])):  foreach ((array) $this->_aVars['aModulesMenu'] as $this->_aVars['aModule']): ?>
										<li class="main_menu_link_li"><a class="main_menu_link<?php if (( ! $this->_aVars['aModule']['is_active'] )): ?> not_active<?php endif; ?>" href="<?php if (( isset ( $this->_aVars['aModule']['no_index'] ) )):  echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aModule']['no_index']);  else:  echo Phpfox::getLib('phpfox.url')->makeUrl("admincp.".$this->_aVars['aModule']['module_id']."");  endif; ?>"><?php echo $this->_aVars['aModule']['app_name']; ?></a></li>
<?php endforeach; endif; ?>
									</ul>
								</div>
							</li>

							<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.theme'); ?>" class="main_menu_link n_themes">Themes</a></li>

							<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.language.phrase'); ?>" class="main_menu_link n_phrases">Phrases</a></li>

							<li>
								<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.setting'); ?>" class="main_menu_link n_settings">Settings</a>
								<div class="main_sub_menu">
									<ul>
<?php if (count((array)$this->_aVars['setting_groups'])):  foreach ((array) $this->_aVars['setting_groups'] as $this->_aVars['group_name'] => $this->_aVars['setting']): ?>
										<li class="main_menu_link_li"><a class="main_menu_link" href="<?php if (( isset ( $this->_aVars['setting']['url'] ) )):  echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['setting']['url']);  else:  echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.setting.edit'); ?>group-id_<?php echo $this->_aVars['setting']['group_id']; ?>/<?php endif; ?>"><?php echo $this->_aVars['group_name']; ?></a></li>
<?php endforeach; endif; ?>
									</ul>
								</div>
							</li>

							<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.block'); ?>" class="main_menu_link n_tools">Tools</a>
								<div class="main_sub_menu">
<?php if (count((array)$this->_aVars['tools'])):  foreach ((array) $this->_aVars['tools'] as $this->_aVars['name'] => $this->_aVars['items']): ?>
										<div class="main_sub_menu_holder_header"><?php echo Phpfox::getPhrase($this->_aVars['name']); ?></div>
										<ul>
<?php if (count((array)$this->_aVars['items'])):  foreach ((array) $this->_aVars['items'] as $this->_aVars['phrase'] => $this->_aVars['link']): ?>
												<li class="main_menu_link_li"><a class="main_menu_link" href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['link']); ?>"><?php echo Phpfox::getPhrase($this->_aVars['phrase']); ?></a></li>
<?php endforeach; endif; ?>
										</ul>
<?php endforeach; endif; ?>
								</div>
							</li>

<?php if (( defined ( 'MOXI9_IS_DEV' ) )): ?>
							<li><a href="#" class="main_menu_link n_techie">Techie</a>
								<div class="main_sub_menu">
<?php if (! defined ( 'MOXI9_IS_DEMO' )): ?>
									<a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.product.add'); ?>" class="main_sub_action">New Product</a>

									<div class="main_sub_menu_holder_header">Manage</div>
									<ul>
										<li class="main_menu_link_li"><a class="main_menu_link" href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.product'); ?>" class="main_sub_action">Products</a></li>
										<li class="main_menu_link_li"><a class="main_menu_link" href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.plugin'); ?>" class="main_sub_action">Plugins</a></li>
									</ul>

<?php endif; ?>

									<div class="main_sub_menu_holder_header">Create</div>
									<ul>
<?php if (! defined ( 'MOXI9_IS_DEMO' )): ?>
										<li class="main_menu_link_li"><a class="main_menu_link" href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.module.add'); ?>" class="main_sub_action">New Module</a></li>
										<li class="main_menu_link_li"><a class="main_menu_link" href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.language.phrase.add'); ?>">New Phrase</a></li>
										<li class="main_menu_link_li"><a class="main_menu_link" href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.setting.add'); ?>">New Setting</a></li>
										<li class="main_menu_link_li"><a class="main_menu_link" href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.group.setting'); ?>">New User Group Setting</a></li>
										<li class="main_menu_link_li"><a class="main_menu_link" href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.plugin.add'); ?>">New Plugin</a></li>
<?php endif; ?>
										<li class="main_menu_link_li"><a class="main_menu_link" href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.theme.add'); ?>">New Theme</a></li>
									</ul>
								</div>
							</li>
<?php endif; ?>

							<li class="info"><span>CMS</span></li>
							<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.page'); ?>" class="main_menu_link n_content">Content</a></li>
							<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.menu'); ?>" class="main_menu_link n_menus">Menus</a></li>
							<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.block'); ?>" class="main_menu_link do_ajax n_blocks">Blocks</a></li>

							<li class="info"><span>Members</span></li>
							<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.browse'); ?>" class="main_menu_link n_search">Manage</a></li>
							<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.group'); ?>" class="main_menu_link n_user_groups">User Groups</a></li>
							<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.promotion'); ?>" class="main_menu_link n_promotions">Promotions</a></li>
							<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.inactivereminder'); ?>" class="main_menu_link n_inactive_members">Inactive Members</a></li>
							<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.cancellations.feedback'); ?>" class="main_menu_link n_cancel_feedback">Cancellation Feedback</a></li>
							<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.subscribe.list'); ?>" class="main_menu_link n_subscribe">Subscriptions</a></li>
						</ul>
					</div>					
									
				</div>
			</div>
		</div>
		
		<div id="main_body_holder"></div>
			<div class="main_holder">					
				<div id="js_content_container">					
					<div id="main">

<?php if ($this->_aVars['iBreadTotal'] = count ( $this->_aVars['aBreadCrumbs'] )): ?>
						<div class="main_title_holder">
<?php if (count ( $this->_aVars['aBreadCrumbs'] ) == 1 && empty ( $this->_aVars['aBreadCrumbTitle'] )): ?>
							<div id="breadcrumb_list">
								<ul>
<?php if (count((array)$this->_aVars['aBreadCrumbs'])):  $this->_aPhpfoxVars['iteration']['link'] = 0;  foreach ((array) $this->_aVars['aBreadCrumbs'] as $this->_aVars['sLink'] => $this->_aVars['sCrumb']):  $this->_aPhpfoxVars['iteration']['link']++; ?>

									<li><h1><a href="<?php echo $this->_aVars['sLink']; ?>" class="<?php if ($this->_aPhpfoxVars['iteration']['link'] == '1'): ?> first<?php endif; ?>"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['sCrumb']); ?></a></h1></li>
<?php endforeach; endif; ?>
								</ul>
							</div>
<?php else: ?>
<?php if ($this->_aVars['iBreadTotal'] = count ( $this->_aVars['aBreadCrumbs'] )):  endif; ?>
							<div id="breadcrumb_list">
								<ul>
<?php if (count((array)$this->_aVars['aBreadCrumbs'])):  $this->_aPhpfoxVars['iteration']['link'] = 0;  foreach ((array) $this->_aVars['aBreadCrumbs'] as $this->_aVars['sLink'] => $this->_aVars['sCrumb']):  $this->_aPhpfoxVars['iteration']['link']++; ?>

<?php if (isset ( $this->_aVars['aBreadCrumbTitle'] ) && count ( $this->_aVars['aBreadCrumbTitle'] ) && $this->_aVars['aBreadCrumbTitle'][0] == $this->_aVars['sCrumb']): ?>

<?php else: ?>
									<li><a href="<?php echo $this->_aVars['sLink']; ?>"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['sCrumb']); ?><span></span></a></li>
<?php endif; ?>
<?php endforeach; endif; ?>
									<li>
<?php if (isset ( $this->_aVars['aBreadCrumbTitle'] ) && count ( $this->_aVars['aBreadCrumbTitle'] )): ?>
										<h1><a href="<?php echo $this->_aVars['aBreadCrumbTitle'][1]; ?>"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aBreadCrumbTitle'][0]); ?><span></span></a></h1>
<?php endif; ?>
									</li>
								</ul>
								<div class="clear"></div>
							</div>
<?php endif; ?>

						</div>
<?php endif; ?>

<?php if (isset ( $this->_aVars['bIsModuleConnection'] ) && $this->_aVars['bIsModuleConnection'] && count ( $this->_aVars['aActiveMenus'] )): ?>
						<div id="breadcrumb_holder">
							<div id="breadcrumb_position">
								<ul id="breadcrumb_menu">
<?php if (count((array)$this->_aVars['aActiveMenus'])):  foreach ((array) $this->_aVars['aActiveMenus'] as $this->_aVars['sPhrase'] => $this->_aVars['sLink']): ?>
<?php if (( $this->_aVars['sPhrase'] == 'SPACE' )): ?>
									<li class="space"></li>
<?php else: ?>
									<li<?php if ($this->_aVars['sMenuController'] == $this->_aVars['sLink']): ?> class="active"<?php endif; ?>><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['sLink']); ?>"><?php if (( defined ( 'PHPFOX_ADMINCP_CUSTOM_MENU' ) )):  echo $this->_aVars['sPhrase'];  else:  echo Phpfox::getPhrase($this->_aVars['sPhrase']);  endif; ?></a></li>
<?php endif; ?>
<?php endforeach; endif; ?>
								</ul>
							</div>
						</div>
<?php endif; ?>
<?php if (isset ( $this->_aVars['bIsModuleConnection'] ) && $this->_aVars['bIsModuleConnection'] && count ( $this->_aVars['aActiveMenus'] )): ?>
							<div id="breadcrumb_content_holder">
<?php endif; ?>
<?php if (!$this->bIsSample):  $this->getLayout('error');  endif; ?>
<?php if (( defined ( 'PHPFOX_EXIT_PRODUCT' ) )): ?>
								<div class="message">
<?php if (( isset ( $this->_aVars['custom_exit_message'] ) )): ?>
<?php echo $this->_aVars['custom_exit_message']; ?>
<?php else: ?>
									Trial versions do not have access to this section.
<?php endif; ?>
								</div>
<?php else: ?>
<?php if (defined('PHPFOX_IN_BLOCK_MODE2')): ?><div id="site_content">[CONTENT]</div><?php else:  if (!$this->bIsSample): ?><div id="site_content"><?php if (isset($this->_aVars['bSearchFailed'])): ?><div class="message">Unable to find anything with your search criteria.</div><?php else:  $sController = "admincp.setting/edit";  if ( Phpfox::getLib("template")->shouldLoadDelayed("admincp.setting/edit") == true ): ?>
<div id="delayed_block_image" style="text-align:center; padding-top:20px;"><img src="http://jyc.club/social/theme/frontend/default/style/default/image/ajax/add.gif" alt="" /></div>
<div id="delayed_block" style="display:none;"><?php echo Phpfox::getLib('phpfox.module')->getFullControllerName(); ?></div>
<?php else:  Phpfox::getLib('phpfox.module')->getControllerTemplate();  endif;  endif; ?></div><?php endif;  endif; ?>
<?php endif; ?>
<?php if (isset ( $this->_aVars['bIsModuleConnection'] ) && $this->_aVars['bIsModuleConnection'] && count ( $this->_aVars['aActiveMenus'] )): ?>
							</div>
<?php endif; ?>
					</div>
				</div>		
				
				<div id="copyright">
<?php echo Phpfox::getParam('core.site_copyright'); ?> <?php echo ' &middot; ' . PhpFox::link(); ?>
				</div>		
						
			</div>		
<?php (($sPlugin = Phpfox_Plugin::get('theme_template_body__end')) ? eval($sPlugin) : false); ?>
<?php echo $this->_sFooter; ?>
	</body>
</html>
