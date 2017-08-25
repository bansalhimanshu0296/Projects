{if !PHPFOX_IS_AJAX_PAGE}
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="{$sLocaleDirection}" lang="{$sLocaleCode}">
	<head>
		<title>{title}</title>
		{header}
	</head>
	<body>
		<section id="top_section">
			<nav id="menu">
				{menu}
			</nav>
			{if (Phpfox::isUser())}
			<div id="panel">
				{notification}
			</div>
			{/if}
		</section>

		<div id="main_content_holder">
		{/if}

			{if (defined('PHPFOX_IS_PAGES_VIEW'))}
			{module name='pages.header'}
			{/if}
			{block location='11'}

			<div id="main_content">
				<section class="holder">
					<div id="content">
						{block location='7'}

						{breadcrumb}
						{search}

						{if isset($aBreadCrumbTitle) && count($aBreadCrumbTitle)}
						<h1><a href="{$aBreadCrumbTitle[1]}">{$aBreadCrumbTitle[0]|clean|split:30}</a></h1>
						{/if}

						{if defined('PHPFOX_IS_USER_PROFILE')}
						{module name='profile.panel'}
						{/if}
						{error}
						{block location='2'}
						{content}
						{block location='4'}
					</div>
				</section>

				{block location='8'}

				<div id="column_holder">
					<div id="column">
						{if ($bUseFullSite)}
						<div id="full_site_mode"></div>
						{else}
						<div id="column_content">
							{menu_sub}
							{block location='1'}
							{block location='3'}
						</div>

						<footer>
							{menu_footer}
							<div id="copyright">
								{copyright}
							</div>
							{block location='5'}
						</footer>
						{/if}
					</div>
				</div>
			</div>
			{if !PHPFOX_IS_AJAX_PAGE}
		</div>
		{footer}
	</body>
</html>
{/if}