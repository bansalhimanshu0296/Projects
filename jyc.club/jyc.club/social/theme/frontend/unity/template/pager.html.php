
{if isset($sAjax)}
<div class="pager_view_more_holder">
	<div class="pager_view_more_link">
		{if !empty($aPager.nextAjaxUrl)}
		<a href="{$aPager.nextUrl}" class="pager_view_more no_ajax_link" onclick="$.ajaxCall('{$sAjax}', 'page={$aPager.nextAjaxUrl}{$aPager.sParamsAjax}', 'GET'); return false;">
			{if !empty($aPager.icon)}
			{img theme=$aPager.icon class='v_middle'}
			{/if}
			{if !empty($aPager.phrase)}{$aPager.phrase}{else}{phrase var='core.view_more'}{/if}
			<span>{phrase var='core.displaying_of_total' displaying=$aPager.displaying total=$aPager.totalRows}</span>
		</a>
		{/if}
	</div>
</div>
{else}
{if (isset($aPager.nextUrl))}
{if (!PHPFOX_IS_AJAX)}
<div class="pager_link_holder">
	<div class="pager_link_append"></div>
{/if}
	<div class="pager_link">
		<span>{$aPager.nextUrl}</span>
	</div>
{if (!PHPFOX_IS_AJAX)}
</div>
{/if}
{/if}
{/if}