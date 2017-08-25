<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: March 18, 2015, 8:59 pm */ ?>

<?php if (isset ( $this->_aVars['sAjax'] )): ?>
<div class="pager_view_more_holder">
	<div class="pager_view_more_link">
<?php if (! empty ( $this->_aVars['aPager']['nextAjaxUrl'] )): ?>
		<a href="<?php echo $this->_aVars['aPager']['nextUrl']; ?>" class="pager_view_more no_ajax_link" onclick="$.ajaxCall('<?php echo $this->_aVars['sAjax']; ?>', 'page=<?php echo $this->_aVars['aPager']['nextAjaxUrl'];  echo $this->_aVars['aPager']['sParamsAjax']; ?>', 'GET'); return false;">
<?php if (! empty ( $this->_aVars['aPager']['icon'] )): ?>
<?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => $this->_aVars['aPager']['icon'],'class' => 'v_middle')); ?>
<?php endif; ?>
<?php if (! empty ( $this->_aVars['aPager']['phrase'] )):  echo $this->_aVars['aPager']['phrase'];  else:  echo Phpfox::getPhrase('core.view_more');  endif; ?>
			<span><?php echo Phpfox::getPhrase('core.displaying_of_total', array('displaying' => $this->_aVars['aPager']['displaying'],'total' => $this->_aVars['aPager']['totalRows'])); ?></span>
		</a>
<?php endif; ?>
	</div>
</div>
<?php else:  if (( isset ( $this->_aVars['aPager']['nextUrl'] ) )):  if (( ! PHPFOX_IS_AJAX )): ?>
<div class="pager_link_holder">
	<div class="pager_link_append"></div>
<?php endif; ?>
	<div class="pager_link">
		<span><?php echo $this->_aVars['aPager']['nextUrl']; ?></span>
	</div>
<?php if (( ! PHPFOX_IS_AJAX )): ?>
</div>
<?php endif;  endif;  endif; ?>
