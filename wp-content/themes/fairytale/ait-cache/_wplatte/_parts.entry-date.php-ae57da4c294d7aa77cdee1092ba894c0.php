<?php //netteCache[01]000473a:2:{s:4:"time";s:21:"0.55666300 1441808008";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:84:"/opt/sites/sadovodov.club/wp-content/themes/fairytale/Templates/parts/entry-date.php";i:2;i:1438710396;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /opt/sites/sadovodov.club/wp-content/themes/fairytale/Templates/parts/entry-date.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'c4lt4tokmh')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>

	<div class="date">
		<span class="icon-round"></span>
		<a href="<?php echo WpLatteFunctions::getDayLink($post->date) ?>" title="<?php echo htmlSpecialChars($template->date($post->date, $site->dateFormat)) ?>" rel="bookmark">
			<span class="icon-date">
				<div class="date-day"><?php echo NTemplateHelpers::escapeHtml($template->date($post->date, "d"), ENT_NOQUOTES) ?></div>
				<div class="month-year">
					<p class="date-month"><?php echo date_i18n('M',strtotime($post->date)) ?></p>
					<p class="date-year"><?php echo NTemplateHelpers::escapeHtml($template->date($post->date, "Y"), ENT_NOQUOTES) ?></p>
				</div>
			</span>
		</a>
	</div>
