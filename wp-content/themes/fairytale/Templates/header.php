<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" {!$site->langAttributes}><![endif]-->
<!--[if IE 8]><html class="ie ie8" {!$site->langAttributes}><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html {!$site->langAttributes}>
<!--<![endif]-->
<head>
	<meta charset="{$site->charset}">
	{mobileDetectionScript}
	<meta name="author" content="AitThemes.club, http://www.ait-themes.club">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="{$site->pingbackUrl}">
	{head}

	<!--[if lt IE 9]>
		<script src="//ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<![endif]-->

	<link id="ait-style" rel="stylesheet" type="text/css" media="all" href="{less}">
	<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/fairytale/custom.css">
	<title>{title}</title>
</head>

<body <?php body_class("layout-".$themeOptions->general->pageLayout); ?> data-themeurl="{$themeUrl}">
{doAction ait-html-body-begin}
	<div class="mainpage">
		<div class="main-container">
			<div id="fixedmenu-container">
				<div class="fixedmenu-wrap">
				<div class="fixed-content wrapper">
					<div class="menu-content">
						<div class="menu-wrapper">
							<div id="mainmenu-dropdown-duration" style="display: none;">200</div>
							<div id="mainmenu-dropdown-easing" style="display: none;">swing</div>
							<span class="menubut bigbut">{__ 'Main Menu'}</span>
							{menu theme_location => primary-menu, fallback_cb => default_menu, container => nav, container_class => mainmenu, menu_class => menu}
						</div>

						{if function_exists(icl_get_languages)}
							{if icl_get_languages('skip_missing=0')}
							<div id="flags">
								<div class="flag-selected"></div>
								<ul class="flags-dropdown">
								{foreach icl_get_languages('skip_missing=0') as $lang}
									<li {if $lang['active'] == 1}class="flag-active"{/if}><a href="{$lang['url']}"><img src="{$lang['country_flag_url']}" alt="{$lang['translated_name']}" /></a></li>
								{/foreach}
								</ul>
							</div>
							{/if}
						{/if}

						<div class="searchicon">
							{include general-search-form.php}
						</div>
					</div>
				</div>
				</div>
			</div>

			{if isset($post) && isset($post->options('slider')->overrideGlobal)}
				{if function_exists('putRevSlider')}
					{if $post->options('slider')->sliderDisplay == true}
						<div class="top-container slider-enabled">
					{else}
						<div class="top-container slider-disabled">
					{/if}
				{else}
					<div class="top-container slider-disabled">
				{/if}
			{else}
				{if function_exists('putRevSlider')}
					{if $themeOptions->sections->sliderDisplay == true}
						<div class="top-container slider-enabled">
					{else}
						<div class="top-container slider-disabled">
					{/if}
				{else}
					<div class="top-container slider-disabled">
				{/if}
			{/if}

				<header class="page-header clearfix">
					<div class="wrapper clearfix">
						<div class="logo left clearfix">
							<a href="{$homeUrl}"><h1 class="header-logo">{!$themeOptions->general->tagline}</h1></a>
						</div>
						<aside class="quick-info right">
							<!--	<span class="button share-button right"><a href="{if $site->isHomepage or $site->is404}{$homeUrl}{else}{$post->permalink}{/if}" class="share-link" rel="prettySociable">share</a></span>-->

							{if $themeOptions->socialIcons->displayIcons}
							<ul class="social-icons right clearfix">
								{foreach $themeOptions->socialIcons->icons as $icon}
								<li class="left"><span class="icon-round"></span><a href="{if !empty($icon->link)}{$icon->link}{else}#{/if}"><span class="icon" title="{$icon->title}" style="background-image: url('{$icon->image}');">{$icon->title}</span></a></li>
								{/foreach}
							</ul>
							{/if}
						</aside>
					</div>

				</header>

				{if isset($post) && isset($post->options('slider')->overrideGlobal)}
					{if function_exists('putRevSlider')}
						{if $post->options('slider')->sliderDisplay == true}
							{include parts/slider.php, options => $post->options('slider')}
							<div class="grey-bg-wrap"><div class="grey-bg"></div></div>
						{else}
							<div class="grey-bg-wrap">
								<div class="grey-bg">
									{include parts/breadcrumbs.php}
								</div>
							</div>
						{/if}
					{else}
						<div class="grey-bg-wrap">
							<div class="grey-bg">
								{include parts/breadcrumbs.php}
							</div>
						</div>
					{/if}
				{else}
					{if function_exists('putRevSlider')}
						{if $themeOptions->sections->sliderDisplay == true}
							{include parts/slider.php, options => $themeOptions->sections}
							<div class="grey-bg-wrap"><div class="grey-bg"></div></div>
						{else}
							<div class="grey-bg-wrap">
								<div class="grey-bg">
									{include parts/breadcrumbs.php}
								</div>
							</div>
						{/if}
					{else}
						<div class="grey-bg-wrap">
							<div class="grey-bg">
								{include parts/breadcrumbs.php}
							</div>
						</div>
					{/if}
				{/if}

			</div>
		</div>

