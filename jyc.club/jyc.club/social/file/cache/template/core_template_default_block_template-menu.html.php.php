<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:44 pm */ ?>
<?php 
/**
 * [NULLED BY DARKGOTH 2014]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond_Benc
 * @package 		Phpfox
 * @version 		$Id: template-menu.html.php 6937 2013-11-24 18:11:09Z Miguel_Espinoza $
 */
 
 

?>
<?php (($sPlugin = Phpfox_Plugin::get('core.template_block_template_menu_1')) ? eval($sPlugin) : false); ?>
<?php if (Phpfox ::getUserBy('profile_page_id') <= 0): ?>
						<ul class="links">
<?php (($sPlugin = Phpfox_Plugin::get('theme_template_core_menu_list')) ? eval($sPlugin) : false); ?>
<?php if (isset ( $this->_aVars['bForceLogoOnMenu'] )): ?>
								<li><?php Phpfox::getBlock('core.template-logo'); ?></li>
<?php endif; ?>
<?php if (( $this->_aVars['iMenuCnt'] = 0 )):  endif; ?>
<?php if (count((array)$this->_aVars['aMainMenus'])):  $this->_aPhpfoxVars['iteration']['menu'] = 0;  foreach ((array) $this->_aVars['aMainMenus'] as $this->_aVars['iKey'] => $this->_aVars['aMainMenu']):  $this->_aPhpfoxVars['iteration']['menu']++; ?>

<?php if (! isset ( $this->_aVars['aMainMenu']['is_force_hidden'] )): ?>
<?php $this->_aVars['iMenuCnt']++; ?>
<?php endif; ?>
								<li rel="menu<?php echo $this->_aVars['aMainMenu']['menu_id']; ?>" <?php if (( isset ( $this->_aVars['iTotalHide'] ) && isset ( $this->_aVars['iMenuCnt'] ) && $this->_aVars['iMenuCnt'] > $this->_aVars['iTotalHide'] )): ?> style="display:none;" <?php endif; ?> <?php if (( ( $this->_aVars['aMainMenu']['url'] == 'apps' && count ( $this->_aVars['aInstalledApps'] ) ) || ( isset ( $this->_aVars['aMainMenu']['children'] ) && count ( $this->_aVars['aMainMenu']['children'] ) ) ) || ( isset ( $this->_aVars['aMainMenu']['is_force_hidden'] ) )): ?>class="<?php if (isset ( $this->_aVars['aMainMenu']['is_force_hidden'] ) && isset ( $this->_aVars['iTotalHide'] )): ?>is_force_hidden<?php else: ?>explore<?php endif;  if (( $this->_aVars['aMainMenu']['url'] == 'apps' && count ( $this->_aVars['aInstalledApps'] ) )): ?> explore_apps<?php endif; ?>"<?php endif; ?>><a <?php if (! isset ( $this->_aVars['aMainMenu']['no_link'] ) || $this->_aVars['aMainMenu']['no_link'] != true): ?>href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aMainMenu']['url']); ?>" <?php else: ?> href="#" onclick="return false;" <?php endif; ?> class="<?php echo $this->_aVars['aMainMenu']['class_name']; ?> <?php if (isset ( $this->_aVars['aMainMenu']['is_selected'] ) && $this->_aVars['aMainMenu']['is_selected']): ?> menu_is_selected <?php endif;  if (isset ( $this->_aVars['aMainMenu']['external'] ) && $this->_aVars['aMainMenu']['external'] == true): ?>no_ajax_link <?php endif; ?>ajax_link">
									<span class="icon"<?php if (( isset ( $this->_aVars['aMainMenu']['icon'] ) )): ?> style="background-image:url('<?php echo $this->_aVars['aMainMenu']['icon']; ?>'); border:0px; background-position:center center;"<?php endif; ?>></span><span class="phrase"><?php if (( $this->_aVars['aMainMenu']['module'] )):  echo Phpfox::getPhrase($this->_aVars['aMainMenu']['module'].'.'.$this->_aVars['aMainMenu']['var_name']);  if (isset ( $this->_aVars['aMainMenu']['suffix'] )):  echo $this->_aVars['aMainMenu']['suffix'];  endif;  else:  echo $this->_aVars['aMainMenu']['var_name'];  endif; ?></span>
									</a>
<?php if (isset ( $this->_aVars['aMainMenu']['children'] ) && count ( $this->_aVars['aMainMenu']['children'] )): ?>
									<ul>
<?php if (count((array)$this->_aVars['aMainMenu']['children'])):  $this->_aPhpfoxVars['iteration']['child_menu'] = 0;  foreach ((array) $this->_aVars['aMainMenu']['children'] as $this->_aVars['aChild']):  $this->_aPhpfoxVars['iteration']['child_menu']++; ?>

										<li<?php if ($this->_aPhpfoxVars['iteration']['child_menu'] == 1): ?> class="first"<?php endif; ?>><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl($this->_aVars['aChild']['url']); ?>"><?php echo Phpfox::getPhrase($this->_aVars['aChild']['module'].'.'.$this->_aVars['aChild']['var_name']); ?></a></li>
<?php endforeach; endif; ?>
									</ul>
<?php else: ?>
<?php if (! isset ( $this->_aVars['bForceLogoOnMenu'] ) && $this->_aVars['aMainMenu']['url'] == 'apps' && count ( $this->_aVars['aInstalledApps'] )): ?>
									<ul>
<?php if (count((array)$this->_aVars['aInstalledApps'])):  foreach ((array) $this->_aVars['aInstalledApps'] as $this->_aVars['aInstalledApp']): ?>
										<li><a href="<?php echo Phpfox::permalink('apps', $this->_aVars['aInstalledApp']['app_id'], $this->_aVars['aInstalledApp']['app_title'], false, null, (array) array (
)); ?>" title="<?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aInstalledApp']['app_title']); ?>"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('server_id' => 0,'path' => 'app.url_image','file' => $this->_aVars['aInstalledApp']['image_path'],'suffix' => '_square','max_width' => 16,'max_height' => 16,'title' => $this->_aVars['aInstalledApp']['app_title'],'class' => 'v_middle')); ?> <?php echo Phpfox::getLib('phpfox.parse.output')->shorten(Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aInstalledApp']['app_title']), 22, '...'); ?></a></li>
<?php endforeach; endif; ?>
									</ul>
<?php endif; ?>
<?php endif; ?>
								</li>
<?php endforeach; endif; ?>
						</ul>
<?php endif; ?>
