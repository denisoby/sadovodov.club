<?php //netteCache[01]000475a:2:{s:4:"time";s:21:"0.58527700 1437885347";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:86:"/opt/sites/sadovodov.club/wp-content/themes/fairytale/Templates/parts/content-none.php";i:2;i:1437883843;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /opt/sites/sadovodov.club/wp-content/themes/fairytale/Templates/parts/content-none.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'm9evewrsvk')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>
<article id="post-0" class="post no-results not-found">
	<div class="wrapper">
		<header class="entry-header">
			<h1 class="entry-title"><?php echo NTemplateHelpers::escapeHtml(__('Nothing Found', 'ait'), ENT_NOQUOTES) ?></h1>
		</header>
		<div class="entry-content">
			<p><?php echo NTemplateHelpers::escapeHtml(__('Apologies, but no results were found for the request. Perhaps searching will help find a related post.', 'ait'), ENT_NOQUOTES) ?></p>
<?php NCoreMacros::includeTemplate("search-form.php", $template->getParams(), $_l->templates['m9evewrsvk'])->render() ?>
		</div>
	</div>	
</article>